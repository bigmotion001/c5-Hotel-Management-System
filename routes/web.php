<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\ProfileController;
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
