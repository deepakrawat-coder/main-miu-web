<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Course;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Exception;

class ProgramController extends Controller
{
    /**
     * Display listing
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $programs = Program::with('courses')->select('programs.*');

            return DataTables::of($programs)
                ->addIndexColumn()

                // Show multiple courses
                ->addColumn('courses', function ($row) {

                    return $row->courses->map(function ($course) {
                        return '<span class="badge bg-primary me-1">'
                            . $course->name .
                            '</span>';
                    })->implode(' ');
                })
                ->rawColumns(['courses'])


                ->addColumn('short_description', function ($row) {
                    return Str::limit(strip_tags($row->short_description), 80);
                })

                ->addColumn('action', fn($row) => '')

                ->make(true);
        }

        return view('admin.Programs.index');
    }

    /**
     * Show create form
     */
    public function create()
    {
        $courses = Course::where('status', 1)->get();
        return view('admin.Programs.create', compact('courses'));
    }

    /**
     * Store program
     */
    // public function store(Request $request)

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course_id'        => 'required|array',
            'course_id.*'      => 'exists:courses,id',
            'name'             => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $program = new Program();
            $program->name = $request->name;
            $program->short_description = $request->short_description;
            $program->meta_title = $request->meta_title;
            $program->meta_description = $request->meta_description;
            $program->status = 1; // You might want to make this configurable

            // Image upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/programs'), $filename);
                $program->image = 'uploads/programs/' . $filename;
            }

            $program->save();

            // Attach multiple courses - using course_id array
            if ($request->has('course_id')) {
                $program->courses()->sync($request->course_id);
            }
            return response()->json([
                'status' => 'success',
                'message' => 'Program created successfully',
                'data' => $program
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Edit form
     */
    public function edit($id)
    {
        $program = Program::with('courses')->findOrFail($id);
        $courses = Course::where('status', 1)->get();
        // dd($courses);
        return view('admin.Programs.edit', compact('program', 'courses'));
    }


    /**
     * Update program
     */

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'course_id'          => 'required|array',
            'course_id.*'        => 'exists:courses,id',
            'name'               => 'required|string|max:255',
            'short_description'  => 'nullable|string',
            'meta_title'         => 'nullable|string|max:255',
            'meta_description'   => 'nullable|string',
            'image'              => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $program = Program::findOrFail($id);
            $program->name = $request->name;
            $program->short_description = $request->short_description;
            $program->meta_title = $request->meta_title;
            $program->meta_description = $request->meta_description;


            /* =========================
           Image Upload (If Changed)
        ==========================*/
            if ($request->hasFile('image')) {

                // Delete old image if exists
                if (!empty($program->image) && file_exists(public_path($program->image))) {
                    unlink(public_path($program->image));
                }

                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/programs'), $filename);

                $program->image = 'uploads/programs/' . $filename;
            }

            $program->save();

            /* =========================
           Sync Multiple Courses
        ==========================*/
            $program->courses()->sync($request->course_id);
            return response()->json([
                'status' => 'success',
                'message' => 'Program updated successfully',
                'data' => $program
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Something went wrong: ' . $e->getMessage()
            ], 500);
        }
    }



    /**
     * Toggle status
     */
    public function status($id)
    {
        try {

            $program = Program::findOrFail($id);
            $program->status = $program->status == 1 ? 0 : 1;
            $program->save();

            return response()->json([
                'status' => 'success',
                'message' => $program->name . ' status updated successfully!',
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Delete
     */
    public function destroy($id)
    {
        try {

            $program = Program::findOrFail($id);

            // Delete image
            if ($program->image && file_exists(public_path($program->image))) {
                unlink(public_path($program->image));
            }

            // Detach pivot
            $program->courses()->detach();

            $program->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Program deleted successfully!'
            ]);
        } catch (\Throwable $e) {

            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }
}
