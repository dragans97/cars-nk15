<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
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
    $name = "Dragan";
    $age = 24;
    return view('welcome', compact('name', 'age'));
})->name('home');

Route::get('/about', function(){ return view('about'); })->name('about');

Route::get('/cars', [CarsController::class, 'index'])->name('cars');
Route::get('/cars/{car}', [CarsController::class, 'show'])->name('single-car');