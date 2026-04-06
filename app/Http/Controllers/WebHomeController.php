<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\EventsPost;
use App\Models\Faq;
use App\Models\Program;
use App\Models\School;
use App\Models\Specialization;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Laravel\Prompts\Concerns\Events;

class WebHomeController extends Controller
{
    public function index()
    {
        $schools = School::where('status', 1)
            ->orderBy('order', 'asc')->limit(6)
            ->get();
        $programs = Program::with('specializations')
            ->where('status', 1)
            ->orderBy('name')
            ->get()
            ->groupBy('name');
        // dd($schools);
        $Testimonials = Testimonial::where('status', 1)->where('page_type', 'home')->get();
        // dd($Testimonials);

        $events = EventsPost::with('category')->where('category_id', 1)->where('status', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        $blogs = Blog::where('status', 1)->orderBy('created_at', 'asc')->limit(3)->get();
        // dd($blogs);
        $faqencode = Faq::where('page_type', 'home')->where('status', 1)->first();
        if (!empty($faqencode)) {
            $faq = collect(json_decode(base64_decode($faqencode->faqs_json), true))
                ->where('status', 1)
                ->sortBy('order')
                ->values()
                ->toArray();
        } else {
            $faq = [];
        }
        $specializations = Specialization::where('status', 1)->get(); // Added this line
        return view('web.pages.index', compact('schools', 'Testimonials', 'events', 'blogs', 'faq', 'programs')); // Modified this line
    }
}
