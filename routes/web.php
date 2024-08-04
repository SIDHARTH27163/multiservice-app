<?php
use App\Http\Controllers\ITServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// adminroutes starts
/* admin routes starts */
Route::view('/admin', 'admin.admin');
Route::resource('admin/manageitservices', ITServiceController::class);
/*admin routes ends */
