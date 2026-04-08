<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Exception;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $blogs = Blog::orderBy('id', 'desc')->get();
            return DataTables::of($blogs)
                ->addIndexColumn()
                ->editColumn('published_date', function ($row) {
                    return $row->published_date ? $row->published_date->format('d M, Y') : '-';
                })
                ->addColumn('status', function ($row) {
                    $checked = $row->status ? 'checked' : '';
                    return '<div class="form-check form-switch">
                                <input class="form-check-input change-status" type="checkbox" data-id="' . $row->id . '" ' . $checked . '>
                            </div>';
                })
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-sm btn-info edit-blog" data-id="' . $row->id . '">Edit</button>
                            <button class="btn btn-sm btn-danger delete-blog" data-id="' . $row->id . '">Delete</button>';
                })
                ->rawColumns(['status', 'action'])
                ->make(true);
        }

        return view('admin.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'published_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'short_description' => 'nullable|string',
            'content' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->published_date = $request->published_date;
            $blog->short_description = $request->short_description;
            $blog->content = $request->input('content');
            $blog->status = $request->has('status') ? 1 : 0;

            // if ($request->hasFile('image')) {
            //     $file = $request->file('image');
            //     $filename = time() . '_' . $file->getClientOriginalName();
            //     $path = 'uploads/blogs';
            //     $file->move(public_path($path), $filename);
            //     $blog->image = $path . '/' . $filename;
            // }
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/blogs'), $filename);
                $blog->image = 'uploads/schools/blogs' . $filename;
            }
            // SEO Implementation
            $blog->meta_title = $request->meta_title ?? $request->title;
            $blog->meta_description = $request->meta_description ?? Str::limit(strip_tags($request->short_description ?? $request->input('content')), 160);

            $blog->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Blog created successfully'
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
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'published_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'short_description' => 'nullable|string',
            'content' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $blog->title = $request->title;
            $blog->published_date = $request->published_date;
            $blog->short_description = $request->short_description;
            $blog->content = $request->input('content');
            $blog->status = $request->has('status') ? 1 : 0;

            // if ($request->hasFile('image')) {
            //     // Delete old image
            //     if ($blog->image && file_exists(public_path($blog->image))) {
            //         unlink(public_path($blog->image));
            //     }

            //     $file = $request->file('image');
            //     $filename = time() . '_' . $file->getClientOriginalName();
            //     $path = 'uploads/blogs';
            //     $file->move(public_path($path), $filename);
            //     $blog->image = $path . '/' . $filename;
            // }
            if ($request->hasFile('image')) {

                if ($blog->image && file_exists(public_path($blog->image))) {
                    unlink(public_path($blog->image));
                }

                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/blogs'), $filename);

                $blog->image = 'uploads/blogs/' . $filename;
            }

            // SEO Implementation
            $blog->meta_title = $request->meta_title ?? $request->title;
            $blog->meta_description = $request->meta_description ?? Str::limit(strip_tags($request->short_description ?? $request->input('content')), 160);

            $blog->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Blog updated successfully'
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
            $blog = Blog::findOrFail($id);
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }
            $blog->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Blog deleted successfully'
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
            $blog = Blog::findOrFail($id);
            $blog->status = !$blog->status;
            $blog->save();

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
     * Frontend Blog Detail
     */
    // public function show($slug)
    // {
    //     $blog = Blog::where('slug', $slug)->where('status', 1)->firstOrFail();
    //     return view('web.pages.blog-detail', compact('blog'));
    // }
     public function blogListing(){
        $blogs = Blog::where('status', 1)->orderBy('created_at', 'desc')->get();
        // dd($blogs);
        return view('web.pages.blog', compact('blogs'));
     }
     public function blogDetails($slug){
        $blog = Blog::where('slug', $slug)->where('status', 1)->firstOrFail();
        $otherBlogs = Blog::where('status', 1)->where('slug', '!=', $slug)->orderBy('created_at', 'desc')->limit(5)->get();
        dd($blog);
        return view('web.pages.blog-details', compact('blog', 'otherBlogs'));
     }
}
