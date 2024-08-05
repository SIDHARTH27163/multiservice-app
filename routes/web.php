<?php
use App\Http\Controllers\ITServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// adminroutes starts
/* admin routes starts */
Route::view('/admin', 'admin.admin');
// Resource routes for ITServiceController
// This will create routes for index, create, store, show, edit, update, and destroy methods
Route::resource('admin/manageitservices', ITServiceController::class)->except(['show']);

/*admin routes ends */
