<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OkrController;

Route::get('/', function () {
    return view('home');
})->name('home');;


Route::get('/okrs', [OkrController::class, 'index'])->name('okrs');

Route::get('/okr/create', [OkrController::class, 'create'])->name('okr.create');
Route::post('/okr/store', [OkrController::class, 'store'])->name('okr.store');

Route::get('/okr/{id}', [OkrController::class, 'show'])->name('okr.show');

// Route::get('/okr/edit', function () {
//     return view('okrs');
// });

// Route::get('/okr/delete', function () {
//     return view('okrs');
// });
