<?php
use App\Http\Controllers\ITServiceController;
use App\Http\Controllers\ITCaseStudiesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TouristPlaceController;
use App\Http\Controllers\LocationController;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

// Admin routes
Route::prefix('admin')->group(function () {
    // Admin dashboard route
    Route::view('/', 'admin.admin')->name('admin.dashboard');
    // Route::view('manage-categories', 'admin.categories');
    Route::resource('manage-categories', CategoryController::class);
    Route::post('/categories/{id}/toggle-status', [CategoryController::class, 'changeStatus'])->name('categories.toggle-status');

    Route::resource('touristplaces', TouristPlaceController::class)->except(['show']);
    Route::resource('managelocations', LocationController::class)->except(['show']);

    // Resource routes for managing IT services
    Route::resource('manageitservices', ITServiceController::class)->except(['show']);
    Route::prefix('manageitservices/{id}')->group(function () {
        Route::get('gallery', [ITServiceController::class, 'gallery'])->name('manageitservices.gallery');
        Route::post('gallery', [ITServiceController::class, 'addImageToGallery'])->name('manageitservices.addImageToGallery');
        Route::delete('gallery/{imageId}', [ITServiceController::class, 'deleteImageFromGallery'])->name('manageitservices.deleteImageFromGallery');
    });
    // Resource routes for managing case studies
    Route::resource('managecasestudies', ITCaseStudiesController::class)->except(['show']);

    // Additional routes for gallery management within ITCaseStudiesController
    Route::prefix('managecasestudies/{id}')->group(function () {
        Route::get('gallery', [ITCaseStudiesController::class, 'gallery'])->name('managecasestudies.gallery');
        Route::post('gallery', [ITCaseStudiesController::class, 'addImageToGallery'])->name('managecasestudies.addImageToGallery');
        Route::delete('gallery/{imageId}', [ITCaseStudiesController::class, 'deleteImageFromGallery'])->name('managecasestudies.deleteImageFromGallery');
    });

});
// routes/for upload immages from text editor quill.js used
// routes/for upload images from text editor quill.js used

Route::post('/upload', [ImageUploadController::class, 'upload']);
Route::view('/touristplaces', 'touristplaces.touristplaces');
Route::view('/popularplaces', 'touristplaces.popularplaces');
