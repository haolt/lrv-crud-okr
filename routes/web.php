<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OkrController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/okrs', [OkrController::class, 'index']);

// Route::get('/okr/1', function () {
//     return view('okrs');
// });

// trang view: insert dữ liệu /resources/views/admin/news_create.blade.php ta cho form khi nhấn submit sẽ thực hiện một action tới /admin/news/store, do đó ta cần tạo một Controller để xử lý lưu dữ liệu nhập, và một Route điều hướng tới Controller này

Route::get('/okr/create', [OkrController::class, 'create']);
Route::post('/okr/store', [OkrController::class, 'store'])->name('okr.store');

// Route::get('/okr/edit', function () {
//     return view('okrs');
// });

// Route::get('/okr/delete', function () {
//     return view('okrs');
// });