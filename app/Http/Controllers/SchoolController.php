<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Faq;
use App\Models\School;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Str;
use PHPUnit\Util\Test;

class SchoolController extends Controller
{




    public function show()
    {
        $schools = School::where('status', 1)
            ->orderBy('order', 'asc')
            ->get() ;          
       
        return view('web.pages.deparments-programs', compact('schools'));
    }


    public function details($slug)
    {
        $school = School::with('courses.programs.specializations')
            ->where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();
        // Get all programs
        $programs = $school->courses
            ->flatMap->programs
            ->unique('id')
            ->values();


        // Get all specializations
        $specializations = $programs
            ->pluck('specializations')
            ->flatten()
            ->unique('id')
            ->values();
        $coursesInfo = $school->courses()->where('status', 1)->get();
        $testimonials = Testimonial::where('school_id', $school->id)->where('status', 1)->get();
        $faqencode = Faq::where('school_id', $school->id)
            ->where('status', 1)
            ->first();
        if (!empty($faqencode)) {
            $faq = collect(json_decode(base64_decode($faqencode->faqs_json), true))
                ->where('status', 1)
                ->sortBy('order')
                ->values()
                ->toArray();
        } else {
            $faq = [];
        }
        // dd($school->courses);
        return view('web.pages.school-details', compact('school', 'specializations', 'programs', 'coursesInfo', 'testimonials', 'faq'));
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $schools = School::latest()->get();
            return DataTables::of($schools)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    return $row->status;
                })
                ->addColumn('action', function ($row) {
                    return '';
                })
                ->rawColumns(['status', 'action'])
                ->make(true);
        }
        return view('admin.Schools.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Schools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // ✅ Validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:schools,name',
            'short_description' => 'nullable|string',           
            'content' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',            
            'order' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $school = new School();

            $school->name = $request->name;

            // ✅ Generate unique slug
            $school->slug = generateSlug(School::class, $request->name);

            $school->short_description = $request->short_description;
           
            $school->content = $request->content;

            // ✅ Default order
            $school->order = $request->order ?? 0;

            // ✅ Image Upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/schools'), $filename);
                $school->image = 'uploads/schools/' . $filename;
            }          

           
            // ✅ Status default Active
            $school->status = 1;

            $school->save();

            return response()->json([
                'status' => 'success',
                'message' => 'School / Department added successfully',
                'data' => $school
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
    // public function show(School $school)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($schoolId)
    {
        $school = School::findOrFail($schoolId);
        return view('admin.Schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Update the specified resource in storage.
     */
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        // ✅ Find School
        $school = School::findOrFail($id);

        // ✅ Validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:schools,name,' . $school->id,
            'short_description' => 'nullable|string',           
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',            
            'order' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {

            /*
        |--------------------------------------------------------------------------
        | Basic Fields
        |--------------------------------------------------------------------------
        */
            $school->name = $request->name;

            // Regenerate slug if name changed
            if ($school->isDirty('name')) {
                $school->slug = generateSlug(School::class, $request->name);
            }

            $school->short_description = $request->short_description;          
            $school->content = $request->content;

            // ✅ Order Update

            $school->order = $request->order ?? $school->order;

            /*
        |--------------------------------------------------------------------------
        | Image Replace
        |--------------------------------------------------------------------------
        */
            if ($request->hasFile('image')) {

                if ($school->image && file_exists(public_path($school->image))) {
                    unlink(public_path($school->image));
                }

                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/schools'), $filename);

                $school->image = 'uploads/schools/' . $filename;
            }      
        

            /*
        |--------------------------------------------------------------------------
        | Features & Highlights (Comma Split Fix)
        |--------------------------------------------------------------------------
        */
          

            $school->save();

            return response()->json([
                'status' => 'success',
                'message' => 'School / Department updated successfully',
                'data' => $school
            ]);
        } catch (Exception $e) {

            return response()->json([
                'status' => 0,
                'message' => 'Something went wrong: ' . $e->getMessage()
            ], 500);
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($schoolId)
    { {
            try {
                // dd($schoolId);
                $school = School::destroy($schoolId);
                return ['status' => 'success', 'message' => 'School deleted successfully!'];
            } catch (\Throwable $e) {
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }
        }
    }

    public function status($id)
    {
        try {
            $school = School::findOrFail($id);
            if ($school) {
                $school->status = $school->status == 1 ? 0 : 1;
                $school->save();
                return response()->json([
                    'status' => 'success',
                    'message' => $school->name . ' status updated successfully!',
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
}
