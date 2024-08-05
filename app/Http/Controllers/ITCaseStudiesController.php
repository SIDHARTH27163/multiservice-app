<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\ITCaseStudy; // Assuming you have a model named ITCaseStudy
use Illuminate\Http\Request;

class ITCaseStudiesController extends Controller
{
    public function index()
    {
        $casestudies = ITCaseStudy::all();
        return view('admin.managecasestudies', compact('casestudies'));

    }

    public function create()
    {
        return view('admin.managecasestudies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('casestudy', 'public');

        ITCaseStudy::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('managecasestudies.index')
                        ->with('success', 'Case study created successfully.');
    }

    public function edit(ITCaseStudy $casestudy ,$id)
    {

        $casestudy = ITCaseStudy::find($id);

        // Check if the record exists
        if (!$casestudy) {
            // Handle the case where the record is not found
            return redirect()->route('managecasestudies.index')->with('error', 'casestudy not found.');
        }

        // Pass the ITService model to the view
        return view('admin.managecasestudies', compact('casestudy'));
    }

    public function update(Request $request, ITCaseStudy $casestudy , $id)
    {
        $casestudy = $casestudy::find($id);

    // Check if the record exists
    if (!$casestudy) {
        return redirect()->route('managecasestudies.index')->with('error', 'IT Service not found.');
    }

    // Validate the request data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:2048', // Optional image validation
    ]);

    // Update the record's attributes
    $casestudy->title = $request->input('title');
    $casestudy->description = $request->input('description');

    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($casestudy->image) {
            Storage::disk('public')->delete($casestudy->image);
        }

        // Store the new image
        $imagePath = $request->file('image')->store('casestudy', 'public');
        $casestudy->image = $imagePath;
    }

    // Save the record
    $casestudy->save();

    // Redirect with a success message


        return redirect()->route('managecasestudies.index')
                        ->with('success', 'Case study updated successfully.');
    }

    public function destroy(ITCaseStudy $casestudy , $id)
    {



                        try {
                            // Find the ITService record by ID
                            $casestudy = ITCaseStudy::findOrFail($id);

                            // Delete the record
                            $casestudy->delete();

                            // Redirect with success message
                            return redirect()->route('managecasestudies.index')
                        ->with('success', 'Case study deleted successfully.');
                        } catch (\Exception $e) {
                            // Log the error for debugging
                            \Log::error('Failed to delete IT Service: ' . $e->getMessage());

                            // Redirect with error message
                            return redirect()->route('managecasestudies.index')->with('error', 'Failed to delete IT Service.');
                        }
    }
}