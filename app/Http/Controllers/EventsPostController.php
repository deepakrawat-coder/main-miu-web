<?php

namespace App\Http\Controllers;

use App\Models\EventsPost;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\EventsCategory;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Str;


class EventsPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {

            $posts = EventsPost::with('category')
                ->orderBy('id', 'desc')
                ->get();

            //  dd($posts);
            return DataTables::of($posts)
                ->addIndexColumn()
                ->addColumn('category', fn($row) => $row->category->name ?? '-')
                ->editColumn('is_featured', fn($row) => $row->is_featured ? 1 : 0)
                ->editColumn('is_new', fn($row) => $row->is_new ? 1 : 0)
                ->addColumn('action', fn($row) => '')
                ->make(true);
        }



        return view('admin.EventsPost.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = EventsCategory::where('status', 1)->get();
        return view('admin.EventsPost.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:events_categories,id',
            'title' => 'required|string|max:255|unique:events_posts,title',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'publish_date' => 'nullable|date',
            'meta_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {

            $post = new EventsPost();

            $post->category_id = $request->category_id;
            $post->title = $request->title;

            // ✅ Slug using your helper
            $post->slug = generateSlug(EventsPost::class, $request->title);

            $post->short_description = $request->short_description;
            $post->description = $request->description;
            $post->publish_date = $request->publish_date ?? now();
            // ✅ Default Status Active
            $post->status = 1;


            // ✅ Boolean fields
            $post->is_featured = $request->has('is_featured');
            $post->is_new = $request->has('is_new');

            // ✅ Image Upload
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/posts'), $filename);
                $post->image = 'uploads/posts/' . $filename;
            }

            // ✅ SEO Fallback Logic (same style as category)
            $post->meta_title = $request->meta_title ?? $request->title;

            $post->meta_description = $request->meta_description ??
                Str::limit(strip_tags($request->short_description ?? $request->description), 150);

            $post->meta_keywords = $request->meta_keywords ??
                strtolower($request->title) . ', events, blog';

            $post->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Post created successfully',
                'data' => $post
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
    public function show(EventsPost $eventsPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($eventsPostID)
    {
        $post = EventsPost::findOrFail($eventsPostID);
        $categories = EventsCategory::where('status', 1)->get();
        return view('admin.EventsPost.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $eventsPost = EventsPost::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'category_id' => 'required|exists:events_categories,id',
            'title' => 'required|string|max:255|unique:events_posts,title,' . $eventsPost->id,
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'publish_date' => 'nullable|date',
            'meta_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {

            $oldTitle = $eventsPost->title;

            $eventsPost->category_id = $request->category_id;
            $eventsPost->title = $request->title;

            // ✅ Regenerate slug only if title changed
            if ($oldTitle !== $request->title) {
                $eventsPost->slug = generateSlug(EventsPost::class, $request->title);
            }

            $eventsPost->short_description = $request->short_description;
            $eventsPost->description = $request->description;
            $eventsPost->publish_date = $request->publish_date ?? $eventsPost->publish_date;

            // ✅ Boolean fields
            $eventsPost->is_featured = $request->has('is_featured');
            $eventsPost->is_new = $request->has('is_new');

            // ✅ Image Replace
            if ($request->hasFile('image')) {

                if ($eventsPost->image && file_exists(public_path($eventsPost->image))) {
                    unlink(public_path($eventsPost->image));
                }

                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/posts'), $filename);

                $eventsPost->image = 'uploads/posts/' . $filename;
            }

            // ✅ SEO fallback
            $eventsPost->meta_title = $request->meta_title ?? $request->title;

            $eventsPost->meta_description = $request->meta_description ??
                Str::limit(strip_tags($request->short_description ?? $request->description), 150);

            $eventsPost->meta_keywords = $request->meta_keywords ??
                strtolower($request->title) . ', events, blog';

            $eventsPost->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Post updated successfully',
                'data' => $eventsPost
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
    public function destroy(EventsPost $eventsPost)
    {
        //
    }
}
