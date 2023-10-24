<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\PetBoardingController;
use App\Http\Controllers\GroomingServiceController;

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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/', function(){
    return view('auth.login');
});

// routes for products table
Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/', [ProductController::class, 'create']);
Route::get('/product/{id}/edit',[ProductController::class,'edit']);

Route::post('/product',[ProductController::class,'store']);
Route::put('/product/{id}/edit',[ProductController::class,'update']);
Route::delete('/product/{id}',[ProductController::class,('destroy')]);

Route::get('/consultations', [ConsultationController::class, 'index']);
Route::get('/grooming_services', [GroomingServiceController::class, 'index']);
Route::get('/pet_boardings', [PetBoardingController::class, 'index']);

