@extends('admin.layout.layout')

@section('content')
<div class="p-4 bg-gray-100 h-screen overflow-y-auto rounded-lg font-Robotomedium">
@include('components.heading', ['headingText' => 'Add Gellery To Case Study Article', 'headingClass' => 'text-2xl font-normal font-Robotomedium text-rose-950 whitespace-nowrap leading-relaxed'])
<div class="container">
    <h1>Create or Update Resources</h1>
    <form action="{{ route('resources.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
        @csrf

        <!-- Location -->
        <div class="mb-4">
            <h2 class="text-xl font-semibold mb-2">Location</h2>
            <label for="location-status" class="block text-gray-700">Status</label>
            <select id="location-status" name="location[status]" class="form-select mt-1 block w-full" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            <label for="location-name" class="block text-gray-700 mt-4">Name</label>
            <input id="location-name" type="text" name="location[name]" class="form-input mt-1 block w-full" required>
            <label for="location-address" class="block text-gray-700 mt-4">Address</label>
            <input id="location-address" type="text" name="location[address]" class="form-input mt-1 block w-full" required>
            <label for="location-image" class="block text-gray-700 mt-4">Image</label>
            <input id="location-image" type="file" name="location[image]" class="form-input mt-1 block w-full">
        </div>

        <!-- Tourist Place -->
        <div class="mb-4">
            <h2 class="text-xl font-semibold mb-2">Tourist Place</h2>
            <label for="tourist-place-status" class="block text-gray-700">Status</label>
            <select id="tourist-place-status" name="tourist_place[status]" class="form-select mt-1 block w-full" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            <label for="tourist-place-title" class="block text-gray-700 mt-4">Title</label>
            <input id="tourist-place-title" type="text" name="tourist_place[title]" class="form-input mt-1 block w-full" required>
            <label for="tourist-place-about" class="block text-gray-700 mt-4">About</label>
            <textarea id="tourist-place-about" name="tourist_place[about]" class="form-textarea mt-1 block w-full" required></textarea>
        </div>

        <!-- Time To Visit -->
        <div class="mb-4">
            <h2 class="text-xl font-semibold mb-2">Time to Visit</h2>
            <label for="time-to-visit" class="block text-gray-700">Time to Visit</label>
            <input id="time-to-visit" type="text" name="time_to_visit[time_to_visit]" class="form-input mt-1 block w-full" required>
        </div>

        <!-- Activity -->
        <div class="mb-4">
            <h2 class="text-xl font-semibold mb-2">Activity</h2>
            <label for="activity" class="block text-gray-700">Activity</label>
            <input id="activity" type="text" name="activity[activity]" class="form-input mt-1 block w-full" required>
        </div>

        <!-- Accommodation -->
        <div class="mb-4">
            <h2 class="text-xl font-semibold mb-2">Accommodation</h2>
            <label for="accommodation" class="block text-gray-700">Accommodation</label>
            <input id="accommodation" type="text" name="accommodation[accommodation]" class="form-input mt-1 block w-full" required>
        </div>

        <!-- Tip -->
        <div class="mb-4">
            <h2 class="text-xl font-semibold mb-2">Tip</h2>
            <label for="tip" class="block text-gray-700">Tip</label>
            <input id="tip" type="text" name="tip[tip]" class="form-input mt-1 block w-full" required>
        </div>

        <!-- Transportation -->
        <div class="mb-4">
            <h2 class="text-xl font-semibold mb-2">Transportation</h2>
            <label for="transportation" class="block text-gray-700">Transportation</label>
            <input id="transportation" type="text" name="transportation[transportation]" class="form-input mt-1 block w-full" required>
        </div>

        <!-- Places Gallery -->
        <div class="mb-4">
            <h2 class="text-xl font-semibold mb-2">Places Gallery</h2>
            <label for="places-gallery" class="block text-gray-700">Gallery</label>
            <input id="places-gallery" type="text" name="places_gallery[gallery]" class="form-input mt-1 block w-full" required>
        </div>

        <!-- Submit Button -->
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Submit</button>
        </div>
    </form>
</div>
</div>
@endsection
