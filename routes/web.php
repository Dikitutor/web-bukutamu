<?php

use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/', [TamuController::class, 'index']);
Route::get('/tambah', [TamuController::class, 'create']);
Route::post('/store', [TamuController::class, 'store']);
Route::get('/edit/{id}', [TamuController::class, 'edit']);
Route::put('/edit/{id}', [TamuController::class, 'update']); // Pastikan ini sesuai dengan action pada form
Route::get('/delete/{id}', [TamuController::class, 'delete']);
