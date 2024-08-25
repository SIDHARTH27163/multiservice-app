<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TouristPlace;
use App\Models\Location;
use App\Models\Activity;
use App\Models\Accommodation;
use App\Models\Tip;
use App\Models\Transportation;
use App\Models\TimeToVisit;
use App\Models\PlacesGallery;
use Illuminate\Support\Facades\DB;

class TouristPlaceSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks to avoid constraint issues
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear the tables before seeding
        TouristPlace::truncate();
        Location::truncate();
        Activity::truncate();
        Accommodation::truncate();
        Tip::truncate();
        Transportation::truncate();
        TimeToVisit::truncate();
        PlacesGallery::truncate();

        // Enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Create 5 locations
        $locations = Location::factory()->count(10)->create();

        // Create 10 tourist places and associated data
        foreach (range(1, 100) as $index) {
            $location = $locations->random();

            // Create the TouristPlace
            $touristPlace = TouristPlace::create([
                'location_id' => $location->id,
                'title' => 'Tourist Place ' . $index,
                'about' => 'About Tourist Place ' . $index,
                'category' => 'Category1' ,
            ]);

            // Create related models for each TouristPlace
            TimeToVisit::create([
                'tourist_place_id' => $touristPlace->id,
                'time_to_visit' => 'Best time to visit place ' . $index,
            ]);

            Activity::create([
                'tourist_place_id' => $touristPlace->id,
                'activity' => 'Activity ' . $index,
            ]);

            Accommodation::create([
                'tourist_place_id' => $touristPlace->id,
                'accommodation' => 'Accommodation ' . $index,
            ]);

            Tip::create([
                'tourist_place_id' => $touristPlace->id,
                'tip' => 'Tip ' . $index,
            ]);

            Transportation::create([
                'tourist_place_id' => $touristPlace->id,
                'transportation' => 'Transportation ' . $index,
            ]);
            $imageUrls = [
                'places_galleries/XpM7r9aposWc8I334AOdW0aS2COfNVXQLrDwmjet.jpg',
                'places_galleries/WT7ZGxFKcz8G9FANHrdPAVrpH2LxaokElC4q6VBN.jpg',
                'places_galleries/Vz9yBuh8s4vwth4f0MeweaTg6Y5vo12xFFmbvmaa.jpg',
                'places_galleries/GGaDFBl3hXyYJgAKgpkN5KdZKa1nWipM1DtpjxSR.jpg'
            ];

            // Create a gallery with 3 images for each TouristPlace
            foreach ($imageUrls as $url) {
                PlacesGallery::create([
                    'tourist_place_id' => $touristPlace->id,
                    'gallery' => $url,
                ]);
            }
        }
    }
}
