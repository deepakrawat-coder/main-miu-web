<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\School;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Str;
use PHPUnit\Util\Test;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $schools = Category::latest()->get();
            return DataTables::of($schools)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    return $row->status;
                })
                ->addColumn('schoolsName', function ($row) {
                    return $row->schools->pluck('name')->join(', ');
                })
                ->addColumn('action', function ($row) {
                    return '';
                })
                ->rawColumns(['status', 'action'])
                ->make(true);
        }
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schools = School::all();
        return view('admin.category.create', compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        // ✅ Validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:schools,name',
            'school_id' => 'required|array',
            'school_id.*' => 'exists:schools,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $category = new Category();

            $category->name = $request->name;



            // ✅ Status default Active
            $category->status = 1;

            $category->save();
            $category->schools()->sync($request->school_id);
            return response()->json([
                'status' => 'success',
                'message' => 'Category added successfully',
                'data' => $category
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
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::with('schools')->findOrFail($id);
        $schools = School::all();

        return view('admin.category.edit', compact('category', 'schools'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // ✅ Validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories,name,' . $id,
            'school_id' => 'required|array',
            'school_id.*' => 'exists:schools,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // ✅ Find Category
            $category = Category::findOrFail($id);

            // ✅ Update fields
            $category->name = $request->name;

            // (optional) status update if needed
            // $category->status = $request->status ?? 1;

            $category->save();

            // ✅ Sync schools (pivot table update)
            $category->schools()->sync($request->school_id);

            return response()->json([
                'status' => 'success',
                'message' => 'Category updated successfully',
                'data' => $category
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
    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Category deleted successfully',
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
            $school = Category::findOrFail($id);
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
