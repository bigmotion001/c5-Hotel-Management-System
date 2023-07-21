<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\UtilitiesController;
use Illuminate\Support\Facades\Route;

//===============FRONTEND ROUTES======================
Route::get('/contact', [FrontendController::class, 'Contact'])->name('contact_us');

Route::get('/about', [FrontendController::class, 'About'])->name('about_us');

Route::get('/gallery', [FrontendController::class, 'Gallery'])->name('gallery');


//===============ADMIN ROUTES======================
Route::prefix('management')->group(function () {
    //admin login
    Route::get('login', [AdminController::class, 'Index'])->name('admin_login');
    Route::post('/login/owner', [AdminController::class, 'AdminLogin'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');



    //==================== Utility Routes ===================
});
//===============END  ROUTES======================


//===============reception ROUTES======================
Route::prefix('reception')->group(function () {
    //admin login
    Route::get('login', [ReceptionController::class, 'Index'])->name('reception_login');
    Route::post('/login/owner', [ReceptionController::class, 'ReceptionLogin'])->name('reception.login');
    Route::get('/dashboard', [ReceptionController::class, 'Dashboard'])->name('reception.dashboard')->middleware('reception');
});
//===============END reception ROUTES======================


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

//admin protected routes

Route::middleware('admin')->group(function () {
    //====================>>>>amenities routes
    Route::get('/amenities', [UtilitiesController::class, 'amenities'])->name('amenities');

    Route::get('/add_amenities', [UtilitiesController::class, 'Add_amenities'])->name('add_amenities');

    Route::Post('/save_amenities', [UtilitiesController::class, 'Save_amenities'])->name('save_amenities');

    Route::get('/edit_amenity/{id}', [UtilitiesController::class, 'Edit_amenity'])->name('edit_amenity');

    Route::post('/updated_amenities/{id}', [UtilitiesController::class, 'updated_amenity'])->name('updated_amenity');

    Route::get('/delete_amenities/{id}', [UtilitiesController::class, 'Delete_amenity'])->name('delete_amenity');


    //====================>>>>complement routes
    Route::get('/complement', [UtilitiesController::class, 'complement'])->name('complement');

    Route::get('/add_complement', [UtilitiesController::class, 'Add_complement'])->name('add_complement');

    Route::post('/save_complement', [UtilitiesController::class, 'Save_complement'])->name('save_complement');

    Route::get('/edit_complement/{id}', [UtilitiesController::class, 'Edit_complement'])->name('edit_complement');

    Route::post('/updated_complement/{id}', [UtilitiesController::class, 'Updated_complement'])->name('updated_complement');

    Route::get('/delete_complement/{id}', [UtilitiesController::class, 'Delete_complement'])->name('delete_complement');

    //====================>>>>bedtype routes
    Route::get('/bedtype', [UtilitiesController::class, 'Bedtype'])->name('bedtype');

    Route::get('/add_bedtype', [UtilitiesController::class, 'Add_bedtype'])->name('add_bedtype');

    Route::post('/save_bedtype', [UtilitiesController::class, 'Save_bedtype'])->name('save_bedtype');

    Route::get('/edit_bedtype/{id}', [UtilitiesController::class, 'Edit_bedtype'])->name('edit_bedtype');

    Route::post('/updated_bedtype/{id}', [UtilitiesController::class, 'Updated_bedtype'])->name('updated_bedtype');

    Route::get('/delete_bedtype/{id}', [UtilitiesController::class, 'Delete_bedtype'])->name('delete_bedtype');

    //====================>>>>Room routes
    Route::get('/room', [UtilitiesController::class, 'Room'])->name('room');

    Route::get('/add_room', [UtilitiesController::class, 'Add_room'])->name('add_room');

    Route::post('/save_room', [UtilitiesController::class, 'Save_room'])->name('save_room');

    Route::get('/edit_room/{id}', [UtilitiesController::class, 'Edit_room'])->name('edit_room');

    Route::post('/updated_room/{id}', [UtilitiesController::class, 'Updated_room'])->name('updated_room');

    Route::get('/delete_room/{id}', [UtilitiesController::class, 'Delete_room'])->name('delete_room');

    Route::get('/enable/{id}', [UtilitiesController::class, 'Enable'])->name('enable');

    Route::get('/disable/{id}', [UtilitiesController::class, 'Disable'])->name('disable');

    //====================>>>>Room Types routes
    Route::get('/roomtype', [UtilitiesController::class, 'Roomtype'])->name('roomtype');

    Route::get('/add_roomtype', [UtilitiesController::class, 'Add_roomtype'])->name('add_roomtype');

    Route::post('/save_roomtype', [UtilitiesController::class, 'Save_roomtype'])->name('save_roomtype');

    Route::get('/edit_roomtype/{id}', [UtilitiesController::class, 'Edit_roomtype'])->name('edit_roomtype');

    Route::post('/updated_roomtype/{id}', [UtilitiesController::class, 'Updated_roomtype'])->name('updated_roomtype');

    Route::get('/delete_roomtype/{id}', [UtilitiesController::class, 'Delete_roomtype'])->name('delete_roomtype');

    //====================>>>>Create Gallery routes
    Route::get('/create_gallery', [UtilitiesController::class, 'Create_gallery'])->name('create_gallery');

    Route::get('/add_gallery', [UtilitiesController::class, 'Add_gallery'])->name('add_gallery');

    Route::post('/save_gallery', [UtilitiesController::class, 'Save_gallery'])->name('save_gallery');

    Route::get('/edit_gallery/{id}', [UtilitiesController::class, 'Edit_gallery'])->name('edit_gallery');

    Route::post('/updated_gallery/{id}', [UtilitiesController::class, 'Updated_gallery'])->name('updated_gallery');

    Route::get('/delete_gallery/{id}', [UtilitiesController::class, 'Delete_gallery'])->name('delete_gallery');

});

require __DIR__ . '/auth.php';


//==================== Utility Routes ===================

//amenities routes
Route::get('/amenities', [UtilitiesController::class, 'amenities'])->name('amenities');

Route::get('/add_amenities', [UtilitiesController::class, 'Add_amenities'])->name('add_amenities');

Route::Post('/save_amenities', [UtilitiesController::class, 'Save_amenities'])->name('save_amenities');

Route::get('/edit_amenity/{id}', [UtilitiesController::class, 'Edit_amenity'])->name('edit_amenity');

Route::post('/updated_amenities/{id}', [UtilitiesController::class, 'updated_amenity'])->name('updated_amenity');

Route::get('/delete_amenities/{id}', [UtilitiesController::class, 'Delete_amenity'])->name('delete_amenity');


//complement routes
Route::get('/complement', [UtilitiesController::class, 'complement'])->name('complement');

Route::get('/add_complement', [UtilitiesController::class, 'Add_complement'])->name('add_complement');

Route::post('/save_complement', [UtilitiesController::class, 'Save_complement'])->name('save_complement');

Route::get('/edit_complement/{id}', [UtilitiesController::class, 'Edit_complement'])->name('edit_complement');

Route::post('/updated_complement/{id}', [UtilitiesController::class, 'Updated_complement'])->name('updated_complement');

Route::get('/delete_complement/{id}', [UtilitiesController::class, 'Delete_complement'])->name('delete_complement');

//bedtype routes
Route::get('/bedtype', [UtilitiesController::class, 'Bedtype'])->name('bedtype');

Route::get('/add_bedtype', [UtilitiesController::class, 'Add_bedtype'])->name('add_bedtype');

Route::post('/save_bedtype', [UtilitiesController::class, 'Save_bedtype'])->name('save_bedtype');

Route::get('/edit_bedtype/{id}', [UtilitiesController::class, 'Edit_bedtype'])->name('edit_bedtype');

Route::post('/updated_bedtype/{id}', [UtilitiesController::class, 'Updated_bedtype'])->name('updated_bedtype');

Route::get('/delete_bedtype/{id}', [UtilitiesController::class, 'Delete_bedtype'])->name('delete_bedtype');

//Room routes
Route::get('/room', [UtilitiesController::class, 'Room'])->name('room');

Route::get('/add_room', [UtilitiesController::class, 'Add_room'])->name('add_room');

Route::post('/save_room', [UtilitiesController::class, 'Save_room'])->name('save_room');

Route::get('/edit_room/{id}', [UtilitiesController::class, 'Edit_room'])->name('edit_room');

Route::post('/updated_room/{id}', [UtilitiesController::class, 'Updated_room'])->name('updated_room');

Route::get('/delete_room/{id}', [UtilitiesController::class, 'Delete_room'])->name('delete_room');

Route::get('/enable/{id}', [UtilitiesController::class, 'Enable'])->name('enable');

Route::get('/disable/{id}', [UtilitiesController::class, 'Disable'])->name('disable');

//Room Types routes
Route::get('/roomtype', [UtilitiesController::class, 'Roomtype'])->name('roomtype');

Route::get('/add_roomtype', [UtilitiesController::class, 'Add_roomtype'])->name('add_roomtype');

Route::post('/save_roomtype', [UtilitiesController::class, 'Save_roomtype'])->name('save_roomtype');

Route::get('/edit_roomtype/{id}', [UtilitiesController::class, 'Edit_roomtype'])->name('edit_roomtype');

Route::post('/updated_roomtype/{id}', [UtilitiesController::class, 'Updated_roomtype'])->name('updated_roomtype');

Route::get('/delete_roomtype/{id}', [UtilitiesController::class, 'Delete_roomtype'])->name('delete_roomtype');

//Create Gallery routes
Route::get('/create_gallery', [UtilitiesController::class, 'Create_gallery'])->name('create_gallery');

Route::get('/add_gallery', [UtilitiesController::class, 'Add_gallery'])->name('add_gallery');

Route::post('/save_gallery', [UtilitiesController::class, 'Save_gallery'])->name('save_gallery');

Route::get('/edit_gallery/{id}', [UtilitiesController::class, 'Edit_gallery'])->name('edit_gallery');

Route::post('/updated_gallery/{id}', [UtilitiesController::class, 'Updated_gallery'])->name('updated_gallery');

Route::get('/delete_gallery/{id}', [UtilitiesController::class, 'Delete_gallery'])->name('delete_gallery');
