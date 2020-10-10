<?php
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//    return view('welcome'); 
// });
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   return view('dashboard');
})->name('dashboard');
Route::get('/', 'AppMainController@index');
Route::get('/admin', 'AppMainController@index');
Route::prefix('admin')->group(function () {
Route::middleware('auth')->group(function () {
    
    //Manufacture Route
    Route::resource('manufacture','ManufactureController');
    
    });

});
