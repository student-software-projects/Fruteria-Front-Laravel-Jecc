<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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
Route::get('/',[LandingController::class, 'index']);
Route::get('Acerca_de',[LandingController::class, 'Acerca_de']);
Route::get('domicilio',[LandingController::class, 'domicilio']);
Route::get('banano',[LandingController::class, 'banano']);
Route::get('fresa',[LandingController::class, 'fresa']);
Route::get('kiwi',[LandingController::class, 'kiwi']);
Route::get('mango',[LandingController::class, 'mango']);
Route::get('manzana',[LandingController::class, 'manzana']);
Route::get('mora',[LandingController::class, 'mora']);
Route::get('sandia',[LandingController::class, 'sandia']);
