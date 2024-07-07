<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\Api\CityAPIController;

use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PropertyController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// for city
Route::get('/all_cities', [CityAPIController::class, 'index']);
   


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware'=> ['auth:sanctum']],function(){
    Route::prefix('auth')->controller(AuthController::class)->group(function(){
        Route::post('logout', 'logout');
});
});


Route::prefix('auth')->controller(AuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');

});
Route::prefix('city')->controller(CityController::class)->group(function(){
    Route::post('create', 'store');
    Route::post('update', 'edit');
    Route::get('get', 'index');
    Route::get('show/{id}', 'show');
    Route::get('delete/{id}', 'destroy');
});
Route::prefix('owner')->controller(OwnerController::class)->group(function(){
    Route::post('create', 'store');
    Route::post('update', 'edit');
    Route::get('get', 'index');
    Route::get('show/{id}', 'show');
    Route::get('delete/{id}', 'destroy');
});
Route::prefix('property')->controller(PropertyController::class)->group(function(){
    Route::post('create', 'store');
    Route::post('update', 'edit');
    Route::get('get', 'index');
    Route::get('show/{id}', 'show');
    Route::get('delete/{id}', 'destroy');
});


