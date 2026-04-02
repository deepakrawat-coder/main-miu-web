<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Exception;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $galleries = Gallery::orderBy('id', 'desc')->get();
            return DataTables::of($galleries)
                ->addIndexColumn()
                ->editColumn('event_date', function ($row) {
                    return $row->event_date ? date('d M, Y', strtotime($row->event_date)) : '-';
                })
                ->addColumn('cover_image', function ($row) {
                    if ($row->cover_image) {
                        return '<img src="' . asset($row->cover_image) . '" width="50" class="img-thumbnail">';
                    }
                    return '-';
                })
                ->addColumn('status', function ($row) {
                    $checked = $row->status ? 'checked' : '';
                    return '<div class="form-check form-switch">
                                <input class="form-check-input change-status" type="checkbox" data-id="' . $row->id . '" ' . $checked . '>
                            </div>';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="' . route('gallery.edit', $row->id) . '" class="btn btn-sm btn-info">Edit</a>
                            <button class="btn btn-sm btn-danger delete-gallery" data-id="' . $row->id . '">Delete</button>';
                })
                ->rawColumns(['cover_image', 'status', 'action'])
                ->make(true);
        }

        return view('admin.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'description' => 'required|string',
            'cover_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $gallery = new Gallery();
            $gallery->title = $request->title;
            $gallery->event_date = $request->event_date;
            $gallery->description = $request->description;
            $gallery->status = $request->status ?? 1;

            if ($request->hasFile('cover_image')) {
                $file = $request->file('cover_image');
                $filename = time() . '_cover_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/gallery'), $filename);
                $gallery->cover_image = 'uploads/gallery/' . $filename;
            }

            $gallery_images = [];
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    if ($image->isValid()) {
                        $image_filename = time() . '_' . $image->getClientOriginalName();
                        $image->move(public_path('uploads/gallery'), $image_filename);
                        $gallery_images[] = 'uploads/gallery/' . $image_filename;
                    }
                }
            }
            $gallery->images = $gallery_images;

            $gallery->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Gallery created successfully'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'description' => 'required|string',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $gallery->title = $request->title;
            $gallery->event_date = $request->event_date;
            $gallery->description = $request->description;
            $gallery->status = $request->status ?? 1;

            if ($request->hasFile('cover_image')) {
                if ($gallery->cover_image && file_exists(public_path($gallery->cover_image))) {
                    unlink(public_path($gallery->cover_image));
                }
                $file = $request->file('cover_image');
                $filename = time() . '_cover_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/gallery'), $filename);
                $gallery->cover_image = 'uploads/gallery/' . $filename;
            }

            $existing_images = $request->input('existing_images', []);
            $current_images = $gallery->images ?? [];

            // Delete images that were removed in the UI
            foreach ($current_images as $img) {
                if (!in_array($img, $existing_images)) {
                    if (file_exists(public_path($img))) {
                        unlink(public_path($img));
                    }
                }
            }

            // Start with the images we kept
            $updated_images = $existing_images;

            // Add newly uploaded images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    if ($image->isValid()) {
                        $image_filename = time() . '_' . $image->getClientOriginalName();
                        $image->move(public_path('uploads/gallery'), $image_filename);
                        $updated_images[] = 'uploads/gallery/' . $image_filename;
                    }
                }
            }
            $gallery->images = $updated_images;

            $gallery->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Gallery updated successfully'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
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
            $gallery = Gallery::findOrFail($id);
            if ($gallery->cover_image && file_exists(public_path($gallery->cover_image))) {
                unlink(public_path($gallery->cover_image));
            }
            if ($gallery->images) {
                foreach ($gallery->images as $img) {
                    if (file_exists(public_path($img))) {
                        unlink(public_path($img));
                    }
                }
            }
            $gallery->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Gallery deleted successfully'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong'
            ], 500);
        }
    }

    /**
     * Change status
     */
    public function status($id)
    {
        try {
            $gallery = Gallery::findOrFail($id);
            $gallery->status = !$gallery->status;
            $gallery->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Status updated successfully'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong'
            ], 500);
        }
    }

    /**
     * Toggle specific image status (if needed)
     */
    public function toggleImageStatus($id)
    {
        // This would require managing images entry-wise in gallery_images table
        // For now, images are stored in JSON. If user wants item-wise status, 
        // we'd need to store them in the gallery_images table.
        return response()->json(['status' => 'info', 'message' => 'Not implemented for JSON storage']);
    }

    /**
     * Frontend Gallery
     */
    public function frontendGallery()
    {
        $galleries = Gallery::where('status', 1)->orderBy('event_date', 'desc')->get();
        return view('web.pages.gallery', compact('galleries'));
    }
}
