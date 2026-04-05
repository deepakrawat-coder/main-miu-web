<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Str;
use App\Models\Program;
use App\Models\School;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {

            $courses = Course::with('school')->select('courses.*');

            return DataTables::of($courses)
                ->addIndexColumn()
                ->addColumn('action', fn($row) => '')
                ->addColumn('program_course_name', function ($row) {
                    $names = json_decode($row->program_course_name, true);
                    return is_array($names) ? implode(', ', $names) : '';
                })
                ->addColumn('short_description', function ($row) {
                    return \Illuminate\Support\Str::limit(strip_tags($row->short_description), 80);
                })
                ->make(true);
        }
        return view('admin.Courses.index');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schools = School::where('status', 1)->get();

        return view('admin.Courses.create', compact('schools'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // ✅ Validation
        $validator = Validator::make($request->all(), [
            'school_id'        => 'required|exists:schools,id',
            'name'             => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'duration'         => 'nullable|string|max:255',
            'eligibility'      => 'nullable|string',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'program_course_name' => 'nullable|array',
            'program_course_name.*' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {

            $course = new Course();

            $course->school_id        = $request->school_id;
            $course->name             = $request->name;
            $course->duration         = $request->duration;
            $course->eligibility      = $request->eligibility;
            $course->short_description = $request->short_description;
            $course->meta_title       = $request->meta_title;
            $course->meta_description = $request->meta_description;
            // ✅ Image Upload

            $course->program_course_name = $request->program_course_name ? json_encode($request->program_course_name) : null;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/courses'), $filename);
                $course->image = 'uploads/courses/' . $filename;
            }
            $course->save();

            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'Course added successfully',
            //     'data' => $course
            // ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Course added successfully',
                'data' => $course
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => 0,
                'message' => 'Something went wrong: ' . $e->getMessage()
            ], 500);
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($courseID)
    {
        $schools = School::where('status', 1)->get();
        $course  = Course::findOrFail($courseID);

        return view('admin.Courses.edit', compact('course', 'schools'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $courseID)
    {
        // dd([
        //     'request' => $request->all(),
        //     'courseID' => $courseID
        // ]);
        // ✅ Find Course
        $course = Course::findOrFail($courseID);

        // ✅ Validation
        $validator = Validator::make($request->all(), [
            'school_id'        => 'required|exists:schools,id',
            'name'             => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'duration'         => 'nullable|string|max:255',
            'eligibility'      => 'nullable|string|max:255',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'program_course_name' => 'nullable|array',
            'program_course_name.*' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {

            // ✅ Update Fields
            $course->school_id         = $request->school_id;
            $course->name              = $request->name;
            $course->duration          = $request->duration;
            $course->eligibility       = $request->eligibility;
            $course->short_description = $request->short_description;
            $course->meta_title        = $request->meta_title;
            $course->meta_description  = $request->meta_description;
            $course->program_course_name = $request->program_course_name ? json_encode($request->program_course_name) : null;
            // ✅ Image Update (Replace Old Image)
            if ($request->hasFile('image')) {

                // Delete old image if exists
                if ($course->image && file_exists(public_path($course->image))) {
                    unlink(public_path($course->image));
                }

                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/courses'), $filename);

                $course->image = 'uploads/courses/' . $filename;
            }

            $course->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Course updated successfully',
                'data' => $course
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => 0,
                'message' => 'Something went wrong: ' . $e->getMessage()
            ], 500);
        }
    }

    public function status($id)
    {
        try {
            $course = Course::findOrFail($id);
            if ($course) {
                $course->status = $course->status == 1 ? 0 : 1;
                $course->save();
                return response()->json([
                    'status' => 'success',
                    'message' => $course->name . ' status updated successfully!',
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'School not found',
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    { {
            try {
                // dd($schoolId);
                $school = Course::destroy($id);
                return ['status' => 'success', 'message' => 'School deleted successfully!'];
            } catch (\Throwable $e) {
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }
        }
    }
}
