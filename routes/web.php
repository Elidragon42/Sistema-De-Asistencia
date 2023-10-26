<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

route::view('/','welcome')->name('welcome');





Route::middleware('auth')->group(function () {
    route::view('/dashboard','dashboard')->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/chirps', function () {
    return 'welcome to our chirps page';
})->name('chirps.index');

});

require __DIR__.'/auth.php';
