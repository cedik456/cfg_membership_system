<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
 
Route::controller(App\Http\Controllers\MembershipController::class)->group(function () {

    Route::get('/memberships', 'index');
    Route::get('/add-membership', 'create');
    Route::post('/add-membership', 'store');
    Route::get('/edit-membership/{membership_id}', 'edit');
    Route::put('/update-membership/{membership_id}','update');
    Route::delete('/delete-membership/{membership_id}', 'destroy');
});
