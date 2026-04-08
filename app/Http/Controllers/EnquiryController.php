<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
//   use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use App\Models\Enquiry;
class EnquiryController extends Controller
{
    /**
     * Frontend: Store a newly created enquiry in storage.
     */


    public function store(Request $request)
    {
        // dd($request->all());
        // 🔥 VALIDATION
        $validator = Validator::make($request->all(), [
            'name'  => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|digits:10',
            'city'  => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'page'  => 'required|in:school,programs',
            'id'    => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        // 🔥 DUPLICATE CHECK (page-wise correct column check)
        $exists = Enquiry::where('email', $request->email)
            ->where('phone', $request->phone)
            ->where(function ($q) use ($request) {
                if ($request->page === 'school') {
                    $q->where('school_id', $request->id);
                } else {
                    $q->where('program_id', $request->id);
                }
            })
            ->exists();

        if ($exists) {
            return response()->json([
                'status' => false,
                'message' => 'You have already submitted this enquiry.'
            ]);
        }

        // 🔥 PREPARE DATA (single clean assignment)
        $data = [
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city'  => $request->city,
            'state' => $request->state,
            'source_page'  => $request->page,
            'school_id'  => $request->page === 'school' ? $request->id : null,
            'program_id' => $request->page === 'programs' ? $request->id : null,
        ];
        //  dd($data);
        // 🔥 SAVE
        Enquiry::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Enquiry submitted successfully'
        ]);
    }

    /**
     * Admin: Display a listing of the enquiries.
     */
   public function index()
{
    $enquiries = Enquiry::with([
        'school:id,name',
        'program:id,name'
    ])
    ->latest()
    ->get();
  
    return view('admin.enquiries.index', compact('enquiries'));
}

    /**
     * Admin: Display the specified enquiry.
     */
    public function show($id)
    {
        $enquiry = Enquiry::with(['school', 'specialization'])->findOrFail($id);
        return view('admin.enquiries.show', compact('enquiry'));
    }

    /**
     * Admin: Toggle the status of an enquiry via AJAX.
     */
    public function toggleStatus($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->status = !$enquiry->status;
        $enquiry->save();

        return response()->json([
            'success' => true,
            'status' => $enquiry->status,
            'message' => 'Status updated successfully.'
        ]);
    }

    /**
     * Admin: Remove the specified enquiry from storage.
     */
    public function destroy($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();

        return back()->with('success', 'Enquiry deleted successfully.');
    }
}
