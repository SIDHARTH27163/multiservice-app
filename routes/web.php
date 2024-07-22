<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/admin', 'admin.admin');
Route::view('/admin/manageitservices', 'admin.manage-itservices');
