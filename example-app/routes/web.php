<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    echo 'lu asik ngab';
});

Route::get('/', function () {
    echo 'pinjem dulu seratus';
});

Route::get('/show', [NewsController::class, 'show']);
Route::get('/create', [NewsController::class, 'create']);