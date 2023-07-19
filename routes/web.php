<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UtilitiesController;
use Illuminate\Support\Facades\Route;

//===============ADMIN ROUTES======================
Route::prefix('management')->group(function (){
   //admin login
   Route::get('login', [AdminController::class, 'Index'])->name('admin_login');
   Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');
   Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard');
});
//===============END ADMIN ROUTES======================


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//==================== Utility Routes ===================

Route::get('/amenities', [UtilitiesController::class, 'amenities'])->name('amenities');

Route::get('/add_amenities', [UtilitiesController::class, 'Add_amenities'])->name('add_amenities');

Route::Post('/save_amenities', [UtilitiesController::class, 'Save_amenities'])->name('save_amenities');

Route::get('/edit_amenity/{id}', [UtilitiesController::class, 'Edit_amenity'])->name('edit_amenity');

Route::post('/updated_amenities/{id}', [UtilitiesController::class, 'updated_amenity'])->name('updated_amenity');

Route::get('/delete_amenities/{id}', [UtilitiesController::class, 'Delete_amenity'])->name('delete_amenity');