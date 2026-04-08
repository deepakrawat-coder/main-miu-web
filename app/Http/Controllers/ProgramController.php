<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Program;
use App\Models\Course;
use App\Models\School;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Exception;

class ProgramController extends Controller
{

  public function show()
{
    $programs = Program::with(['category', 'school'])
        ->where('status', 1)
        ->orderBy('order', 'asc') // Order by 'order' column
        ->get();
    
    // Group programs by category name for tabs
    $groupedPrograms = [];
    foreach ($programs as $program) {
        $categoryName = $program->category ? $program->category->name : 'Other';
        $groupedPrograms[$categoryName][] = $program;
    }
    
    // Get unique categories for tabs
    $categories = $programs->pluck('category')->filter()->unique('id')->values();
    
    return view('web.pages.programs', compact('groupedPrograms', 'categories', 'programs'));
}

    public function details($slug)
    {
        // dd($slug);
       
        $program = Program::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();
        // dd($program);
        return view('web.pages.program-details', compact('program'));
    }

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $programs = Program::with(['school', 'category', 'courses'])->latest();

            return DataTables::of($programs)
                ->addIndexColumn()

                // School Name
                ->addColumn('SchoolName', function ($row) {
                    return $row->school ? e($row->school->name) : '<span class="badge bg-secondary">No School</span>';
                })
                // Category Name
                ->addColumn('CategoryName', function ($row) {
                    return $row->category ? e($row->category->name) : '<span class="badge bg-secondary">No Category</span>';
                })
                // Program Name (using name column)
                ->addColumn('name', function ($row) {
                    return '<strong>' . e($row->name) . '</strong>';
                })
                ->addColumn('program_course_name', function ($row) {

                    if (!$row->program_course_name) {
                        return '<span class="badge bg-secondary">No Courses</span>';
                    }

                    // ✅ Decode JSON
                    $decoded = json_decode($row->program_course_name, true);

                    // अगर JSON array nahi hai to direct string treat karo
                    if (!is_array($decoded)) {
                        $decoded = [$row->program_course_name];
                    }

                    $badges = '';

                    foreach ($decoded as $item) {

                        // ✅ comma separated values split karo
                        $courses = explode(',', $item);

                        foreach ($courses as $course) {
                            $course = trim($course);

                            if (!empty($course)) {
                                $badges .= '<span class="badge bg-primary me-1">'
                                    . e($course) .
                                    '</span>';
                            }
                        }
                    }

                    return $badges ?: '<span class="badge bg-secondary">No Courses</span>';
                })
                // Short Description
                ->addColumn('short_description', function ($row) {
                    return \Illuminate\Support\Str::limit(strip_tags($row->short_description ?? ''), 80);
                })
                // Image column
                ->addColumn('image', function ($row) {
                    if ($row->image) {
                        return '<img src="/' . e($row->image) . '" style="width:60px;height:60px;object-fit:cover;border-radius:6px;">';
                    }
                    return '-';
                })

                // Status column
                ->addColumn('status', function ($row) {
                    $checked = $row->status == 1 ? 'checked' : '';
                    $label = $row->status == 1 ? 'Active' : 'Inactive';
                    return '<div class="form-check form-switch form-switch-success">
                            <input class="form-check-input" type="checkbox" ' . $checked . '
                                onclick="updateActiveStatus(\'programs/status/' . $row->id . '\',\'programs-table\')">
                            <label class="form-check-label">' . $label . '</label>
                        </div>';
                })

                // Action column
                ->addColumn('action', function ($row) {
                    return '<div class="hstack gap-2">
                            <button class="btn btn-sm btn-light-primary"
                                onclick="edit(\'programs/edit/' . $row->id . '\',\'modal-lg\')">
                                <i class="ri-pencil-line"></i>
                            </button>
                            <button class="btn btn-sm btn-light-danger"
                                onclick="destroy(\'programs/delete/' . $row->id . '\',\'programs-table\')">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                        </div>';
                })

                ->rawColumns(['SchoolName', 'CategoryName', 'name', 'program_course_name', 'image', 'status', 'action'])
                ->make(true);
        }

        return view('admin.Programs.index');
    }

    public function create()
    {
        $schools = School::where('status', 1)->get();
        // Don't load categories here - will load via AJAX

        return view('admin.Programs.create', compact('schools'));
    }

    // Add this method to get categories by school
    public function getCategoriesBySchool(Request $request)
    {
        $schoolId = $request->school_id;
        // dd($schoolId);
        // Get categories that belong to this school via pivot table category_school
        $categories = Category::whereHas('schools', function ($query) use ($schoolId) {
            $query->where('school_id', $schoolId);
        })->where('status', 1)->get();

        // OR if category has direct school_id foreign key
        // $categories = Category::where('school_id', $schoolId)->where('status', 1)->get();

        return response()->json([
            'status' => 'success',
            'categories' => $categories
        ]);
    }
    // public function store(Request $request)
    // {
    //     // dd($request->all());
    //     // ✅ Validation
    //     $validator = Validator::make($request->all(), [
    //         'school_id'        => 'required|exists:schools,id',
    //         'content'           => 'nullable|string',
    //         'name'             => 'required|string|max:255',
    //         'short_description' => 'nullable|string',
    //         'duration'         => 'nullable|string|max:255',
    //         'eligibility'      => 'nullable|string',
    //         'meta_title'       => 'nullable|string|max:255',
    //         'meta_description' => 'nullable|string',
    //         'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    //         'program_course_name' => 'nullable|array',
    //         'program_course_name.*' => 'nullable|string',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 0,
    //             'errors' => $validator->errors()
    //         ], 422);
    //     }

    //     try {

    //         $programs = new Program();

    //         $programs->school_id        = $request->school_id;
    //         $programs->name             = $request->name;
    //         $programs->slug             = Str::slug($request->name);
    //         $programs->duration         = $request->duration;
    //         $programs->eligibility      = $request->eligibility;
    //         $programs->short_description = $request->short_description;
    //         $programs->meta_title       = $request->meta_title;
    //         $programs->meta_description = $request->meta_description;
    //         $programs->content = $request->content;
    //         // ✅ Image Upload

    //         $programs->program_course_name = $request->program_course_name ? json_encode($request->program_course_name) : null;
    //         if ($request->hasFile('image')) {
    //             $file = $request->file('image');
    //             $filename = time() . '_' . $file->getClientOriginalName();
    //             $file->move(public_path('uploads/programs'), $filename);
    //             $programs->image = 'uploads/programs/' . $filename;
    //         }
    //         $programs->save();

    //         // return response()->json([
    //         //     'status' => 'success',
    //         //     'message' => 'Course added successfully',
    //         //     'data' => $course
    //         // ]);
    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'Course added successfully',
    //             'data' => $programs
    //         ]);
    //     } catch (Exception $e) {

    //         return response()->json([
    //             'status' => 0,
    //             'message' => 'Something went wrong: ' . $e->getMessage()
    //         ], 500);
    //     }
    // }
    public function store(Request $request)
    {
        $request->validate([
            'school_id' => 'required|exists:schools,id',
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'eligibility' => 'nullable|string',
            'short_description' => 'nullable|string',
            'content' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'program_course_name' => 'nullable|array',
            'program_course_name.*' => 'nullable|string',
            'order' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/programs'), $imageName);
            $imagePath = 'uploads/programs/' . $imageName;
        }

        // Create program
        $program = Program::create([
            'school_id' => $request->school_id,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->name),
            'name' => $request->name,
            'duration' => $request->duration,
            'eligibility' => $request->eligibility,
            'short_description' => $request->short_description,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'order' => $request->order ?? 0,
            'image' => $imagePath,
            'program_course_name' => $request->program_course_name ? json_encode($request->program_course_name) : null,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Program created successfully',
            'data' => $program
        ]);
    }
    public function edit($courseID)
    {
        $schools = School::where('status', 1)->get();
        $programs = Program::findOrFail($courseID);

        // Get categories via pivot table category_school
        $categories = Category::where('status', 1)
            ->whereHas('schools', function ($query) use ($programs) {
                $query->where('school_id', $programs->school_id);
            })
            ->get();

        return view('admin.Programs.edit', compact('programs', 'schools', 'categories'));
    }
    // public function update(Request $request, $courseID)
    // {
    //     // dd([
    //     //     'request' => $request->all(),
    //     //     'courseID' => $courseID
    //     // ]);
    //     // ✅ Find Program
    //     $programs = Program::findOrFail($courseID);

    //     // ✅ Validation
    //     $validator = Validator::make($request->all(), [
    //         'school_id'        => 'required|exists:schools,id',
    //         'name'             => 'required|string|max:255',
    //         'short_description' => 'nullable|string',
    //         'meta_title'       => 'nullable|string|max:255',
    //         'meta_description' => 'nullable|string',
    //         'duration'         => 'nullable|string|max:255',
    //         'eligibility'      => 'nullable|string|max:255',
    //         'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    //         'program_course_name' => 'nullable|array',
    //         'program_course_name.*' => 'nullable|string',
    //         'content'           => 'nullable|string',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 0,
    //             'errors' => $validator->errors()
    //         ], 422);
    //     }

    //     try {

    //         // ✅ Update Fields
    //         $programs->school_id         = $request->school_id;
    //         $programs->name              = $request->name;
    //         $programs->slug             = Str::slug($request->name);
    //         $programs->duration          = $request->duration;
    //         $programs->eligibility       = $request->eligibility;
    //         $programs->short_description = $request->short_description;
    //         $programs->meta_title        = $request->meta_title;
    //         $programs->meta_description  = $request->meta_description;
    //         $programs->content           = $request->content;
    //         $programs->program_course_name = $request->program_course_name ? json_encode($request->program_course_name) : null;
    //         // ✅ Image Update (Replace Old Image)
    //         if ($request->hasFile('image')) {

    //             // Delete old image if exists
    //             if ($programs->image && file_exists(public_path($programs->image))) {
    //                 unlink(public_path($programs->image));
    //             }

    //             $file = $request->file('image');
    //             $filename = time() . '_' . $file->getClientOriginalName();
    //             $file->move(public_path('uploads/programs'), $filename);

    //             $programs->image = 'uploads/programs/' . $filename;
    //         }

    //         $programs->save();

    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'Program updated successfully',
    //             'data' => $programs
    //         ]);
    //     } catch (Exception $e) {

    //         return response()->json([
    //             'status' => 0,
    //             'message' => 'Something went wrong: ' . $e->getMessage()
    //         ], 500);
    //     }
    // }
    public function update(Request $request, $courseID)
    {
        // ✅ Find Program
        $program = Program::findOrFail($courseID);

        // ✅ Validation (Match with store function)
        $validator = Validator::make($request->all(), [
            'school_id' => 'required|exists:schools,id',
            'category_id' => 'nullable  |exists:categories,id',  // ✅ Added category_id validation
            'name' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'eligibility' => 'nullable|string',
            'short_description' => 'nullable|string',
            'content' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'program_course_name' => 'nullable|array',
            'order' => 'nullable|integer',
            'program_course_name.*' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // ✅ Handle image upload (Delete old if exists)
            $imagePath = $program->image;
            if ($request->hasFile('image')) {
                // Delete old image
                if ($program->image && file_exists(public_path($program->image))) {
                    unlink(public_path($program->image));
                }

                $image = $request->file('image');
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/programs'), $imageName);
                $imagePath = 'uploads/programs/' . $imageName;
            }

            // ✅ Update Program
            $program->update([
                'school_id' => $request->school_id,
                'category_id' => $request->category_id,  // ✅ Added category_id
                'slug' => Str::slug($request->name),
                'name' => $request->name,
                'duration' => $request->duration,
                'eligibility' => $request->eligibility,
                'short_description' => $request->short_description,
                'content' => $request->content,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'image' => $imagePath,
                'order' => $request->order ?? 0,
                'program_course_name' => $request->program_course_name ? json_encode($request->program_course_name) : null,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Program updated successfully',
                'data' => $program
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
            $programs = Program::findOrFail($id);
            if ($programs) {
                $programs->status = $programs->status == 1 ? 0 : 1;
                $programs->save();
                return response()->json([
                    'status' => 'success',
                    'message' => $programs->name . ' status updated successfully!',
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Program not found',
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }
    public function destroy($id)
    { {
            try {
                // dd($schoolId);
                $programs = Program::destroy($id);
                return ['status' => 'success', 'message' => 'Program deleted successfully!'];
            } catch (\Throwable $e) {
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }
        }
    }
}
