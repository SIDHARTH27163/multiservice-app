<?php
namespace App\Http\Controllers;

use App\Models\ITService;
use Illuminate\Http\Request;
/*
created by:Sidharth Guleria
task: performing the crud operations fot admin side it services
*/
class ITServiceController extends Controller
{
    public function index()
    {
        $itServices = ITService::all();
    return view('admin.manage-itservices', compact('itServices'));
    }

    public function create()
    {
        return view('admin.manage-itservices'); // Use the same template for create view
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        ITService::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('manageitservices.index')->with('success', 'IT Service created successfully.');

    }

    public function edit(ITService $itService)
    {
        return view('admin.manage-itservices', compact('itService')); // Use the same template for edit view
    }

    public function update(Request $request, ITService $itService)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $itService->image = $imagePath;
        }

        $itService->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $itService->image, // Keep the existing image if not changed
        ]);

        return redirect()->route('manageitservices.index')->with('success', 'IT Service updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        try {
            // Find the ITService record by ID
            $itService = ITService::findOrFail($id);

            // Delete the record
            $itService->delete();

            // Redirect with success message
            return redirect()->route('manageitservices.index')->with('success', 'IT Service deleted successfully.');
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Failed to delete IT Service: ' . $e->getMessage());

            // Redirect with error message
            return redirect()->route('manageitservices.index')->with('error', 'Failed to delete IT Service.');
        }
    }


}
