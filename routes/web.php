<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\RegisterController;

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
    return view('wellcome');
});

Route::get('info', function () {
    echo 'info';
});

Route::get('register', function () {
echo 'register';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    echo 'bersyandaa';
});

Route::get('/', function () {
    echo 'pinjem dulu seratus';
});

Route::get('/show', [NewsController::class, 'show']);
Route::get('/create', [NewsController::class, 'create']);

Route::get('RegisterController',[RegisterController::class,'index']);