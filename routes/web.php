<?php

use App\Http\Controllers\Depart;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\EmpleController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/error', function () {
    return response('hola', '404')->red;
});

Route::get('/prueba', function () {
    return view('prueba', [
        'titulo' => 'El diablo sobre ruedas'
    ]);
});

Route::get('/depart', [DepartController::class, 'index']);

Route::get('/emple', [EmpleController::class, 'index']);

Route::get('/depart/create', [DepartController::class, 'create']);
