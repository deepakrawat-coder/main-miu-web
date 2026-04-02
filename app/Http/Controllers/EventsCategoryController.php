<?php

namespace App\Http\Controllers;


use App\Models\EventsCategory;
use Illuminate\Http\Request;
// use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Exception;

use App\Models\EventsPost;


class EventsCategoryController extends Controller
{



public function noticeAndEvents()
{
    // Carousel (Featured posts)
    $featuredPosts = EventsPost::where('status', 1)
        ->where('is_featured', 1)
        ->latest('publish_date')
        ->take(6)
        ->get();

        // dd($featuredPosts);

    // Recent Events
    $recentEvents = EventsPost::where('status', 1)
        ->whereHas('category', function ($q) {
            $q->where('slug', 'events');
        })
        ->latest('publish_date')
        ->get();

    // Recent Notices
    $recentNotices = EventsPost::where('status', 1)
        ->whereHas('category', function ($q) {
            $q->where('slug', 'notice');
        })
        ->latest('publish_date')
        ->take(6)
        ->get();

    // Recent Updates
    $recentUpdates = EventsPost::where('status', 1)
        ->whereHas('category', function ($q) {
            $q->where('slug', 'update');
        })
        ->latest('publish_date')
        ->take(6)
        ->get();
        // dd($recentNotices);
    return view('web.pages.notice-and-events', compact(
        'featuredPosts',
        'recentEvents',
        'recentNotices',
        'recentUpdates'
    ));
}


// public function showPost($slug)
// {
//     $post = EventsPost::where('slug', $slug)->firstOrFail();
//     return view('web.pages.notice-and-events-details', compact('post'));


// }


public function showPost($slug)
{
    $post = EventsPost::with('category')
        ->where('slug', $slug)
        ->where('status', 1)
        ->firstOrFail();

    // Similar posts (same category, exclude current)
    $similarPosts = EventsPost::with('category')
        ->where('status', 1)
        ->where('category_id', $post->category_id)
        ->where('id', '!=', $post->id)
        ->latest('publish_date')
        ->take(6)
        ->get();
        $categoryName = $post->category ? $post->category->name : 'Unknown Category';
    //  dd($categoryName);
    return view('web.pages.notice-and-events-details', compact('post', 'similarPosts', 'categoryName'));
}


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $eventsCategories = EventsCategory::orderBy('id', 'desc')->get();
            return DataTables::of($eventsCategories)
                ->addIndexColumn()
                ->editColumn('status', fn($row) => $row->status ? 1 : 0)
                ->addColumn('action', fn($row) => '')
                ->make(true);
        }
        return view('admin.EventsCategory.index');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.EventsCategory.create');
    }



    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     // Validation
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255|unique:events_categories,name',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 0,
    //             'errors' => $validator->errors()
    //         ], 422);
    //     }

    //     try {

    //         $category = new EventsCategory();
    //         $category->name = $request->name;
    //         $category->status = 1; // default active (0/1 system)
    //         $category->save();

    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'Events Category created successfully',
    //             'data' => $category
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:events_categories,name',
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

            $category = new EventsCategory();
            $category->name = $request->name;
            $category->slug = generateSlug(EventsCategory::class, $request->name);
            $category->status = 1;
            // ✅ SEO Fallback Logic
            $category->meta_title = $request->meta_title ?? $request->name;
            $category->meta_description = $request->meta_description ??
                'Explore our ' . $request->name . ' events and stay updated with latest happenings.';
            $category->meta_keywords = $request->meta_keywords ??
                strtolower($request->name) . ', events, category';
            $category->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Events Category created successfully',
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
    public function show(EventsCategory $eventsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($categoryId)
    {
        $category = EventsCategory::findOrFail($categoryId);
        return view('admin.EventsCategory.edit', compact('category'));
    }


    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, $id)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255|unique:events_categories,name,' . $id,
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 0,
    //             'errors' => $validator->errors()
    //         ], 422);
    //     }

    //     try {

    //         $category = EventsCategory::findOrFail($id);
    //         $category->name = $request->name;
    //         $category->slug = generateSlug(EventsCategory::class, $request->name, $id);
    //         $category->save();

    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'Events Category updated successfully',
    //         ]);
    //     } catch (Exception $e) {

    //         return response()->json([
    //             'status' => 0,
    //             'message' => 'Something went wrong: ' . $e->getMessage()
    //         ], 500);
    //     }
    // }
    public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255|unique:events_categories,name,' . $id,
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

        $category = EventsCategory::findOrFail($id);

        // Update basic fields
        $category->name = $request->name;

        // Regenerate slug (ignore current ID)
        $category->slug = generateSlug(
            EventsCategory::class,
            $request->name,
            $id
        );

        // ✅ SEO Fallback Logic
        $category->meta_title = $request->meta_title ?? $request->name;

        $category->meta_description = $request->meta_description ??
            'Explore our ' . $request->name . ' events and stay updated with latest happenings.';

        $category->meta_keywords = $request->meta_keywords ??
            strtolower($request->name) . ', events, category';

        $category->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Events Category updated successfully',
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
   public function destroy($categoryId)
    { {
            try {
                $category = EventsCategory::destroy($categoryId);
                return ['status' => 'success', 'message' => 'Events Category deleted successfully!'];
            } catch (\Throwable $e) {
                return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
            }
        }
    }

    public function status($id)
    {
        try {
            $eventsCategory = EventsCategory::findOrFail($id);
            if ($eventsCategory) {
                $eventsCategory->status = $eventsCategory->status == 1 ? 0 : 1;
                $eventsCategory->save();
                return response()->json([
                    'status' => 'success',
                    'message' => $eventsCategory->name . ' status updated successfully!',
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Course not found',
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
