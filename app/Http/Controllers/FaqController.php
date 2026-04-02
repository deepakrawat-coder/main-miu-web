<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\School;
use App\Models\Specialization;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use Exception;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Faq::with(['school', 'specialization'])->latest();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return ''; // Handled by JS
                })
                ->addColumn('faq_count', function ($row) {
                    if ($row->faqs_json) {
                        $decoded = json_decode(base64_decode($row->faqs_json), true);
                        return is_array($decoded) ? count($decoded) : 0;
                    }
                    return 0;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.faqs.index');
    }

    public function create()
    {
        $schools         = School::all();
        $specializations = Specialization::all();

        return view('admin.faqs.create', compact('schools', 'specializations'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page_type' => 'required|in:home,school-details,specialization-details',
            'faqs'      => 'required|array|min:1',
            'faqs.*.question' => 'required|string',
            'faqs.*.answer'   => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $faq = new Faq();
            $faq->page_type         = $request->page_type;
            $faq->school_id         = $request->school_id;
            $faq->specialization_id = $request->specialization_id;
            $faq->status            = $request->status ?? 1;

            $faqData = [];
            foreach ($request->faqs as $item) {
                $faqData[] = [
                    'question' => $item['question'],
                    'answer'   => $item['answer'],
                    'status'   => $item['status'] ?? 1,
                    'order'    => $item['order'] ?? 0,
                ];
            }
            $faq->faqs_json = base64_encode(json_encode($faqData));
            $faq->save();

            return response()->json([
                'status'  => 'success',
                'message' => 'FAQs created successfully',
                'data'    => $faq
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
        $faq             = Faq::findOrFail($id);
        $schools         = School::all();
        $specializations = Specialization::all();

        $faqItems = [];
        if ($faq->faqs_json) {
            $faqItems = json_decode(base64_decode($faq->faqs_json), true) ?? [];
        }

        return view('admin.faqs.edit', compact('faq', 'schools', 'specializations', 'faqItems'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'page_type' => 'required|in:home,school-details,specialization-details',
            'faqs'      => 'required|array|min:1',
            'faqs.*.question' => 'required|string',
            'faqs.*.answer'   => 'required|string',
        ]);

        try {
            $faq = Faq::findOrFail($id);
            $faq->page_type         = $request->page_type;
            $faq->school_id         = $request->school_id;
            $faq->specialization_id = $request->specialization_id;
            $faq->status            = $request->status ?? 1;

            $faqData = [];
            foreach ($request->faqs as $item) {
                $faqData[] = [
                    'question' => $item['question'],
                    'answer'   => $item['answer'],
                    'status'   => $item['status'] ?? 1,
                    'order'    => $item['order'] ?? 0,
                ];
            }
            $faq->faqs_json = base64_encode(json_encode($faqData));
            $faq->save();

            return response()->json([
                'status'  => 'success',
                'message' => 'FAQs updated successfully',
                'data'    => $faq
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
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'FAQs deleted successfully'
        ]);
    }

    public function status($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->status = $faq->status == 1 ? 0 : 1;
        $faq->save();

        return response()->json([
            'status'  => 'success',
            'message' => 'Status updated successfully'
        ]);
    }
}
