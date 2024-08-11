<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\TouristPlace;
use App\Models\TimeToVisit;
use App\Models\Activity;
use App\Models\Accommodation;
use App\Models\Tip;
use App\Models\Transportation;
use App\Models\PlacesGallery;
use App\Models\Location; // Assuming Location is a model
use Illuminate\Http\Request;

class TouristPlaceController extends Controller
{
    public function index()
    {
        // Retrieve all tourist places
        $touristPlaces = TouristPlace::with('location')->get(); // Eager load location
        $locations = Location::all(); // Fetch all locations for the dropdown
        return view('admin.manageplaces', compact('touristPlaces', 'locations'));
    }

    public function create()
    {
        $locations = Location::all(); // Fetch locations for the dropdown
        return view('admin.manageplaces', compact('locations'));
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'location_id' => 'required|exists:locations,id',
            'title' => 'required|string|max:255',
            'about' => 'required|string',
            'time_to_visit' => 'required|string',
            'activity' => 'required|string',
            'accommodation' => 'required|string',
            'tip' => 'required|string',
            'transportation' => 'required|string',
            'gallery' => 'required|array', // Ensure gallery is an array
            'gallery.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate each image
        ]);

        // Handle creation within a transaction for data consistency
        \DB::transaction(function () use ($request) {
            // Handle TouristPlace
            $touristPlace = TouristPlace::create([
                'location_id' => $request->input('location_id'),
                'title' => $request->input('title'),
                'about' => $request->input('about'),
            ]);

            // Handle related models (TimeToVisit, Activity, etc.)
            TimeToVisit::create([
                'tourist_place_id' => $touristPlace->id,
                'time_to_visit' => $request->input('time_to_visit'),
            ]);

            Activity::create([
                'tourist_place_id' => $touristPlace->id,
                'activity' => $request->input('activity'),
            ]);

            Accommodation::create([
                'tourist_place_id' => $touristPlace->id,
                'accommodation' => $request->input('accommodation'),
            ]);

            Tip::create([
                'tourist_place_id' => $touristPlace->id,
                'tip' => $request->input('tip'),
            ]);

            Transportation::create([
                'tourist_place_id' => $touristPlace->id,
                'transportation' => $request->input('transportation'),
            ]);

            // Handle gallery images
            foreach ($request->file('gallery') as $image) {
                $imagePath = $image->store('places_galleries', 'public'); // Save image to the 'public/galleries' directory

                PlacesGallery::create([
                    'tourist_place_id' => $touristPlace->id,
                    'gallery' => $imagePath,
                ]);
            }
        });

        // Redirect to the appropriate route with a success message
        return redirect()->route('touristplaces.index')->with('success', 'Tourist Place and related resources created successfully');
    }


    public function edit($id)
    {
        // Find the TouristPlace by ID
        $touristPlace = TouristPlace::findOrFail($id);

        // Fetch locations for the dropdown
        $locations = Location::all();

        // Fetch additional data specific to the TouristPlace
        $activities = $touristPlace->activities; // Assuming a 'activities' relationship exists
        $accommodations = $touristPlace->accommodations; // Assuming a 'accommodations' relationship exists
        $tips = $touristPlace->tips; // Assuming a 'tips' relationship exists
        $transportations = $touristPlace->transportations; // Assuming a 'transportations' relationship exists
        $time_to_visit= $touristPlace->time_to_visit;
        // Pass all data to the view
        return view('admin.manageplaces', compact('touristPlace', 'locations', 'activities', 'accommodations', 'tips', 'transportations' , 'time_to_visit'));
    }


    public function update(Request $request, $id)
    {


        \DB::transaction(function () use ($request, $id) {
            // Update TouristPlace
            $touristPlace = TouristPlace::findOrFail($id);
            $touristPlace->update([
                'location_id' => $request->input('location_id'),
                'title' => $request->input('title'),
                'about' => $request->input('about'),
            ]);

            // Update related models (TimeToVisit, Activity, etc.)
            $touristPlace->timeToVisits()->update([
                'time_to_visit' => $request->input('time_to_visit'),
            ]);

            $touristPlace->activities()->update([
                'activity' => $request->input('activity'),
            ]);

            $touristPlace->accommodations()->update([
                'accommodation' => $request->input('accommodation'),
            ]);

            $touristPlace->tips()->update([
                'tip' => $request->input('tip'),
            ]);

            $touristPlace->transportations()->update([
                'transportation' => $request->input('transportation'),
            ]);


                   // Delete old gallery images
        $oldImages = PlacesGallery::where('tourist_place_id', $touristPlace->id)->get();
        foreach ($oldImages as $oldImage) {
            // Delete the file from the storage
            Storage::disk('public')->delete($oldImage->gallery);
            // Delete the record from the database
            $oldImage->delete();
        }

        // Save the new gallery images
        foreach ($request->file('gallery') as $image) {
            $imagePath = $image->store('places_galleries', 'public'); // Save image to the 'public/places_galleries' directory

            PlacesGallery::create([
                'tourist_place_id' => $touristPlace->id,
                'gallery' => $imagePath,
            ]);
        }
        });

        // Redirect to the appropriate route with a success message
        return redirect()->route('touristplaces.index')->with('success', 'Tourist Place and related resources updated successfully');
    }

    public function destroy($id)
    {
        $touristPlace = TouristPlace::findOrFail($id);

        \DB::transaction(function () use ($touristPlace) {
            // Delete related models
            $touristPlace->timeToVisits()->delete();
            $touristPlace->activities()->delete();
            $touristPlace->accommodations()->delete();
            $touristPlace->tips()->delete();
            $touristPlace->transportations()->delete();
            $touristPlace->gallery()->delete();

            // Delete the TouristPlace itself
            $touristPlace->delete();
        });

        // Redirect to the appropriate route with a success message
        return redirect()->route('touristplaces.index')->with('success', 'Tourist Place and related resources deleted successfully');
    }

}
