<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Testimonial;
use App\Models\School;
use App\Models\Specialization;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Exception;

class TestimonialController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Testimonial::latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return ''; // Handled by DataTables in JS
                })
                // ->addColumn('status', function ($row) {
                //     $checked = $row->status == 1 ? 'checked' : '';
                //     return '<div class="form-check form-switch">
                //                 <input class="form-check-input change-status" type="checkbox" data-id="' . $row->id . '" ' . $checked . '>
                //             </div>';
                // })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }

        return view('admin.testimonials.index');
    }

    public function create()
    {
        $schools         = School::all();
        $specializations = Specialization::all();
        return view('admin.testimonials.create', compact('schools', 'specializations'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'              => 'required|string|max:255',
            'subtitle'          => 'required|string|max:255',
            'message'           => 'required|string',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'specialization_id' => 'nullable|exists:specializations,id',
            'school_id'         => 'nullable|exists:schools,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $testimonial = new Testimonial();
            $testimonial->name         = $request->name;
            $testimonial->subtitle     = $request->subtitle;
            $testimonial->message      = $request->message;
            $testimonial->rating       = $request->rating;
            $testimonial->company      = $request->company;
            $testimonial->package      = $request->package;
            $testimonial->passing_year = $request->passing_year;
            $testimonial->page_type    = $request->page_type;
            $testimonial->school_id    = $request->school_id;
            $testimonial->status       = $request->status ?? 1;
            $testimonial->specialization_id = $request->specialization_id;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/testimonials'), $filename);
                $testimonial->image = 'uploads/testimonials/' . $filename;
            }

            $testimonial->slug = $request->slug
                ? Str::slug($request->slug)
                : generateSlug(Testimonial::class, $request->name);

            $testimonial->save();

            return response()->json([
                'status'  => 'success',
                'message' => 'Testimonial created successfully',
                'data'    => $testimonial
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status'  => 0,
                'message' => 'Something went wrong: ' . $e->getMessage()
            ], 500);
        }
    }

    public function edit($id)
    {
        $testimonial     = Testimonial::findOrFail($id);
        $schools         = School::all();
        $specializations = Specialization::all();
        return view('admin.testimonials.edit', compact('testimonial', 'schools', 'specializations'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'subtitle'          => 'required|string|max:255',
            'message'           => 'required|string',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'specialization_id' => 'nullable|exists:specializations,id',
            'school_id'         => 'nullable|exists:schools,id',
        ]);

        try {
            $testimonial = Testimonial::findOrFail($id);
            $testimonial->name         = $request->name;
            $testimonial->subtitle     = $request->subtitle;
            $testimonial->message      = $request->message;
            $testimonial->rating       = $request->rating;
            $testimonial->company      = $request->company;
            $testimonial->package      = $request->package;
            $testimonial->passing_year = $request->passing_year;
            $testimonial->page_type    = $request->page_type;
            $testimonial->school_id    = $request->school_id;
            $testimonial->status       = $request->status ?? 1;
            $testimonial->specialization_id = $request->specialization_id;
            if ($request->hasFile('image')) {
                // Delete old image
                if ($testimonial->image && file_exists(public_path($testimonial->image))) {
                    unlink(public_path($testimonial->image));
                }

                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/testimonials'), $filename);
                $testimonial->image = 'uploads/testimonials/' . $filename;
            }

            $testimonial->slug = Str::slug($request->slug ?? $request->name);
            $testimonial->save();

            return response()->json([
                'status'  => 'success',
                'message' => 'Testimonial updated successfully',
                'data'    => $testimonial
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status'  => 0,
                'message' => 'Something went wrong: ' . $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        if ($testimonial->image && file_exists(public_path($testimonial->image))) {
            unlink(public_path($testimonial->image));
        }
        $testimonial->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Testimonial deleted successfully'
        ]);
    }

    public function status($id)
    {
        // dd($id);
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->status = $testimonial->status == 1 ? 0 : 1;
        $testimonial->save();

        return response()->json([
            'status'  => 'success',
            'message' => 'Status updated successfully'
        ]);
    }
}
