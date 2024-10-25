<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::delete('', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});
