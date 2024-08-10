<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\TouristPlace;
use App\Models\TimeToVisit;
use App\Models\Activity;
use App\Models\Accommodation;
use App\Models\Tip;
use App\Models\Transportation;
use App\Models\PlacesGallery;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function create()
    {
        $locations = Location::all();
        $touristPlaces = TouristPlace::all();
        return view('admin.manageplaces', compact('locations', 'touristPlaces'));
    }


    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'location.status' => 'required|in:active,inactive',
            'location.name' => 'required|string',
            'location.address' => 'required|string',
            'location.image' => 'nullable|image',

            'tourist_place.status' => 'required|in:active,inactive',
            'tourist_place.title' => 'required|string',
            'tourist_place.about' => 'required|string',

            'time_to_visit.time_to_visit' => 'required|string',

            'activity.activity' => 'required|string',

            'accommodation.accommodation' => 'required|string',

            'tip.tip' => 'required|string',

            'transportation.transportation' => 'required|string',

            'places_gallery.gallery' => 'required|string',
        ]);

        // Handle Location
        $location = Location::create([
            'status' => $request->input('location.status'),
            'name' => $request->input('location.name'),
            'address' => $request->input('location.address'),
            'image' => $request->file('location.image') ? $request->file('location.image')->store('images') : null,
        ]);

        // Handle TouristPlace
        $touristPlace = TouristPlace::create([
            'location_id' => $location->id,
            'status' => $request->input('tourist_place.status'),
            'title' => $request->input('tourist_place.title'),
            'about' => $request->input('tourist_place.about'),
        ]);

        // Handle TimeToVisit
        TimeToVisit::create([
            'tourist_place_id' => $touristPlace->id,
            'time_to_visit' => $request->input('time_to_visit.time_to_visit'),
        ]);

        // Handle Activity
        Activity::create([
            'tourist_place_id' => $touristPlace->id,
            'activity' => $request->input('activity.activity'),
        ]);

        // Handle Accommodation
        Accommodation::create([
            'tourist_place_id' => $touristPlace->id,
            'accommodation' => $request->input('accommodation.accommodation'),
        ]);

        // Handle Tip
        Tip::create([
            'tourist_place_id' => $touristPlace->id,
            'tip' => $request->input('tip.tip'),
        ]);

        // Handle Transportation
        Transportation::create([
            'tourist_place_id' => $touristPlace->id,
            'transportation' => $request->input('transportation.transportation'),
        ]);

        // Handle PlacesGallery
        PlacesGallery::create([
            'tourist_place_id' => $touristPlace->id,
            'gallery' => $request->input('places_gallery.gallery'),
        ]);

        return redirect()->route('resources.create')->with('success', 'Resources created successfully');
    }
}
