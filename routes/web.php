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
    //Category Route
    Route::resource('category','CategoryController');
    Route::get('allCategory','CategoryController@allCategory');
    Route::get('category/show/{id}','CategoryController@show');
    //Generic Route
    Route::resource('generic','GenericController');
    //Type Route
    Route::resource('/type','TypeController');

    //Unit Route
    Route::resource('unit','UnitController');
    Route::get('unit/show/{id}','UnitController@show');
    
    //Customer Route
    Route::resource('customar','CustomarController');
    Route::get('customar/status/{id}','CustomarController@status');
    Route::get('admin/customar/invoice/{id}','CustomarController@invoice')->name('admin.customar.invoice');
    Route::get('customar/view','CustomarController@show')->name('customar_view');

    //Supplier Route
    Route::resource('supplier','SupplierController');
    Route::get('supplier/show/{id}','SupplierController@show');

    // Medicine Route

    Route::resource('medicine','MedicineController');
    Route::get('medicine/subCategory/{id}','MedicineController@subCatFind')->name('medicine_subCategory');
    });

});
