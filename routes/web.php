<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

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
    return view('cover');
});

Route::get('/main/{name}', function ($name) {
    return view('main', ['name' => $name]);
});

Route::post('/main', [ReservationController::class,'store']);
Route::get('/reservations', [ReservationController::class, 'index']);
