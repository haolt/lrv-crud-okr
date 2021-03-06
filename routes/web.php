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

Route::get('/okr/edit/{id}', [OkrController::class, 'edit'])->name('okr.edit');
Route::patch('/okr/update/{id}', [OkrController::class, 'update'])->name('okr.update');

Route::delete('/okr/delete/{id}', [OkrController::class, 'destroy'])->name('okr.delete');

Route::any('/404', function() {
    return view('404');
});
