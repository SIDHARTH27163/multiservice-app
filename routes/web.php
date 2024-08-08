<?php
use App\Http\Controllers\ITServiceController;
use App\Http\Controllers\ITCaseStudiesController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

// Admin routes
Route::prefix('admin')->group(function () {
    // Admin dashboard route
    Route::view('/', 'admin.admin')->name('admin.dashboard');

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
