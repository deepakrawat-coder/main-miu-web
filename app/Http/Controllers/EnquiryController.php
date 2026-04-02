<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Frontend: Store a newly created enquiry in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'school_id' => 'nullable|exists:schools,id',
            'specialization_id' => 'nullable|exists:specializations,id',
            'message' => 'nullable|string',
            'source_page' => 'required|string|in:index,school-details,specialization-details',
        ]);

        Enquiry::create($validated);

        return back()->with('success', 'Your enquiry has been submitted successfully! We will contact you soon.');
    }

    /**
     * Admin: Display a listing of the enquiries.
     */
    public function index()
    {
        $enquiries = Enquiry::with(['school', 'specialization'])->latest()->get();
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
