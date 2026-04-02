<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Specialization;
use App\Models\Program;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class SpecializationController extends Controller
{
    public function show($courseSlug, $programSlug, $specializationSlug)
    {
        // Get specialization
        $specialization = Specialization::where('slug', $specializationSlug)
            ->where('status', 1)
            ->firstOrFail();

        // Get specialization features safely
        $specializationOther = DB::table('specialization_features')
            ->where('specialization_id', $specialization->id)
            ->first();

        $why_choose = [];
        $success_rate = [];
        $career = [];
        $recruiter = [];

        if ($specializationOther && $specializationOther->features_json) {

            $decoded = json_decode(base64_decode($specializationOther->features_json));

            $why_choose   = $decoded->why_choose   ?? [];
            $success_rate = $decoded->success_rate ?? [];
            $career       = $decoded->career       ?? [];
            $recruiter    = $decoded->recruiter    ?? [];
        }
        $testimonials = Testimonial::where('specialization_id', $specialization->id)
            ->where('status', 1)
            ->get();

        // FAQ
        $faqencode = Faq::where('specialization_id', $specialization->id)
            ->where('status', 1)
            ->first();

        $faq = [];

        if ($faqencode && $faqencode->faqs_json) {
            $faq = collect(json_decode(base64_decode($faqencode->faqs_json), true))
                ->where('status', 1)
                ->sortBy('order')
                ->values()
                ->toArray();
        }
        // dd($testimonials);
        return view('web.pages.specialization-details', compact('specialization', 'why_choose', 'success_rate', 'career', 'recruiter', 'testimonials', 'faq'));
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Specialization::with('program')->latest();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '';
                })
                ->addColumn('short_description', function ($row) {
                    return \Illuminate\Support\Str::limit(strip_tags($row->short_description), 80);
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.specialization.index');
    }
    public function create()
    {
        // dd('hello');
        $programs = Program::where('status', 1)->get();
        return view('admin.specialization.create', compact('programs'));
    }
    public function store(Request $request)
    {
        // ✅ Validation
        $validator = Validator::make($request->all(), [
            'program_id' => 'required',
            'title'      => 'required|string|max:255',
            'image'      => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {

            $specialization = new Specialization();

            $specialization->program_id = $request->program_id;
            $specialization->title = $request->title;

            // ✅ Custom slug OR auto slug
            $specialization->slug = $request->slug
                ? Str::slug($request->slug)
                : generateSlug(Specialization::class, $request->title);

            $specialization->short_description = $request->short_description;
            $specialization->description       = $request->description;
            $specialization->content           = $request->content;
            $specialization->meta_title        = $request->meta_title;
            $specialization->meta_description  = $request->meta_description;

            // ✅ MAIN IMAGE Upload (Same as School)
            if ($request->hasFile('image')) {

                $file = $request->file('image');
                $filename = time() . '_' . $file->getClientOriginalName();

                $file->move(public_path('uploads/specializations/main/'), $filename);

                $specialization->image = 'uploads/specializations/main/' . $filename;
            }

            $specialization->status = 1;

            $specialization->save();

            /*
        |--------------------------------------------------------------------------
        | FEATURE SECTION
        |--------------------------------------------------------------------------
        */

            $successRates = $request->success_rate ?? [];
            $careers      = $request->career ?? [];
            $recruiters   = $request->recruiter ?? [];
            $whyChoose = $request->why_choose ?? [];

            foreach ($whyChoose as $key => $item) {

                if ($request->hasFile("why_choose.$key.image")) {

                    $file = $request->file("why_choose.$key.image");
                    $filename = time() . '_why_' . $file->getClientOriginalName();

                    $file->move(public_path('uploads/specializations/why_choose'), $filename);

                    $whyChoose[$key]['image'] =
                        'uploads/specializations/why_choose/' . $filename;
                }
            }
            // ✅ Career Images Upload
            foreach ($careers as $key => $career) {

                if ($request->hasFile("career.$key.image")) {

                    $file = $request->file("career.$key.image");
                    $filename = time() . '_career_' . $file->getClientOriginalName();

                    $file->move(public_path('uploads/specializations/careers'), $filename);

                    $careers[$key]['image'] =
                        'uploads/specializations/careers/' . $filename;
                }
            }

            // ✅ Recruiter Images Upload
            foreach ($recruiters as $key => $rec) {

                if ($request->hasFile("recruiter.$key.image")) {

                    $file = $request->file("recruiter.$key.image");
                    $filename = time() . '_recruiter_' . $file->getClientOriginalName();

                    $file->move(public_path('uploads/specializations/recruiters'), $filename);

                    $recruiters[$key]['image'] =
                        'uploads/specializations/recruiters/' . $filename;
                }
            }

            $featureData = [
                'why_choose' => $whyChoose,
                'success_rate' => $successRates,
                'career'       => $careers,
                'recruiter'    => $recruiters
            ];

            // ✅ Insert into specialization_features table
            DB::table('specialization_features')->insert([
                'specialization_id' => $specialization->id,
                'features_json'     => base64_encode(json_encode($featureData)),
                'created_at'        => now(),
                'updated_at'        => now()
            ]);

            return response()->json([
                'status'  => 'success',
                'message' => 'Specialization created successfully',
                'data'    => $specialization
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
        $specialization = Specialization::findOrFail($id);
        $programs = Program::where('status', 1)->get();

        $featureRow = DB::table('specialization_features')
            ->where('specialization_id', $id)
            ->first();

        $features = [];
        // dd($featureRow);
        if ($featureRow && !empty($featureRow->features_json)) {
            $decoded = base64_decode($featureRow->features_json);
            $features = json_decode($decoded, true) ?? [];
        }
        // dd($features);
        return view('admin.specialization.edit', compact(
            'specialization',
            'programs',
            'features'
        ));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'program_id' => 'required',
            'title'      => 'required|string|max:255',
            'slug'       => 'required|unique:specializations,slug,' . $id,
            'image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        DB::transaction(function () use ($request, $id) {

            $specialization = Specialization::findOrFail($id);

            /*
        |--------------------------------------------------------------------------
        | BASIC FIELDS
        |--------------------------------------------------------------------------
        */

            $specialization->program_id = $request->program_id;
            $specialization->title      = $request->title;
            $specialization->slug       = Str::slug($request->slug);
            $specialization->short_description = $request->short_description;
            $specialization->description       = $request->description;
            $specialization->content           = $request->content;
            $specialization->meta_title        = $request->meta_title;
            $specialization->meta_description  = $request->meta_description;
            $specialization->status            = $request->status ?? 1;

            /*
        |--------------------------------------------------------------------------
        | MAIN IMAGE REPLACE
        |--------------------------------------------------------------------------
        */

            if ($request->hasFile('image')) {

                if (
                    $specialization->image &&
                    file_exists(public_path($specialization->image))
                ) {
                    unlink(public_path($specialization->image));
                }

                $file = $request->file('image');
                $filename = time() . '_main_' . $file->getClientOriginalName();

                $file->move(public_path('uploads/specializations'), $filename);

                $specialization->image =
                    'uploads/specializations/' . $filename;
            }

            $specialization->save();

            /*
        |--------------------------------------------------------------------------
        | FETCH OLD FEATURES
        |--------------------------------------------------------------------------
        */

            $oldFeatureRow = DB::table('specialization_features')
                ->where('specialization_id', $id)
                ->first();

            $oldFeatures = [];

            if ($oldFeatureRow) {
                $oldFeatures = json_decode(
                    base64_decode($oldFeatureRow->features_json),
                    true
                );
            }

            $successRates = $request->success_rate ?? [];
            $careers      = $request->career ?? [];
            $recruiters   = $request->recruiter ?? [];
            $whyChoose    = $request->why_choose ?? [];

            /*
        |--------------------------------------------------------------------------
        | WHY CHOOSE IMAGE HANDLE
        |--------------------------------------------------------------------------
        */

            foreach ($whyChoose as $key => $item) {

                if ($request->hasFile("why_choose.$key.image")) {

                    if (
                        !empty($oldFeatures['why_choose'][$key]['image']) &&
                        file_exists(public_path($oldFeatures['why_choose'][$key]['image']))
                    ) {

                        unlink(public_path($oldFeatures['why_choose'][$key]['image']));
                    }

                    $file = $request->file("why_choose.$key.image");
                    $filename = time() . '_why_' . uniqid() . '.' . $file->getClientOriginalExtension();

                    $file->move(public_path('uploads/specializations/why_choose'), $filename);

                    $whyChoose[$key]['image'] =
                        'uploads/specializations/why_choose/' . $filename;
                } else {

                    $whyChoose[$key]['image'] =
                        $oldFeatures['why_choose'][$key]['image'] ?? null;
                }
            }

            /*
        |--------------------------------------------------------------------------
        | CAREER IMAGE HANDLE
        |--------------------------------------------------------------------------
        */

            foreach ($careers as $key => $career) {

                if ($request->hasFile("career.$key.image")) {

                    if (
                        !empty($oldFeatures['career'][$key]['image']) &&
                        file_exists(public_path($oldFeatures['career'][$key]['image']))
                    ) {

                        unlink(public_path($oldFeatures['career'][$key]['image']));
                    }

                    $file = $request->file("career.$key.image");
                    $filename = time() . '_career_' . uniqid() . '.' . $file->getClientOriginalExtension();

                    $file->move(public_path('uploads/specializations/careers'), $filename);

                    $careers[$key]['image'] =
                        'uploads/specializations/careers/' . $filename;
                } else {

                    $careers[$key]['image'] =
                        $oldFeatures['career'][$key]['image'] ?? null;
                }
            }

            /*
        |--------------------------------------------------------------------------
        | RECRUITER IMAGE HANDLE
        |--------------------------------------------------------------------------
        */

            foreach ($recruiters as $key => $rec) {

                if ($request->hasFile("recruiter.$key.image")) {

                    if (
                        !empty($oldFeatures['recruiter'][$key]['image']) &&
                        file_exists(public_path($oldFeatures['recruiter'][$key]['image']))
                    ) {

                        unlink(public_path($oldFeatures['recruiter'][$key]['image']));
                    }

                    $file = $request->file("recruiter.$key.image");
                    $filename = time() . '_recruiter_' . uniqid() . '.' . $file->getClientOriginalExtension();

                    $file->move(public_path('uploads/specializations/recruiters'), $filename);

                    $recruiters[$key]['image'] =
                        'uploads/specializations/recruiters/' . $filename;
                } else {

                    $recruiters[$key]['image'] =
                        $oldFeatures['recruiter'][$key]['image'] ?? null;
                }
            }

            /*
        |--------------------------------------------------------------------------
        | FINAL FEATURE DATA
        |--------------------------------------------------------------------------
        */

            $featureData = [
                'why_choose'   => array_values($whyChoose),
                'success_rate' => array_values($successRates),
                'career'       => array_values($careers),
                'recruiter'    => array_values($recruiters),
            ];

            DB::table('specialization_features')->updateOrInsert(
                ['specialization_id' => $id],
                [
                    'features_json' => base64_encode(json_encode($featureData)),
                    'updated_at'    => now(),
                ]
            );
        });

        return redirect()->route('specialization.index')
            ->with('success', 'Specialization Updated Successfully');
    }
    public function destroy($id)
    {
        // Delete related features manually
        DB::table('specialization_features')
            ->where('specialization_id', $id)
            ->delete();

        // Delete specialization
        Specialization::findOrFail($id)->delete();

        return back()->with('success', 'Deleted Successfully');
    }
}
