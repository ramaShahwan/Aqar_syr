<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\CityAPIController;
use App\Http\Controllers\Api\ContactAPIController;
use App\Http\Controllers\Api\PropertyAPIController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// for city
Route::get('/all_cities', [CityAPIController::class, 'index']);
   
// for contact
Route::post('/store_contact', [ContactAPIController::class, 'store']);

// for property
Route::get('/show_property/{id}', [PropertyAPIController::class, 'show']);
Route::get('/get_by_city/{cityName}', [PropertyAPIController::class, 'get_by_city']);
Route::get('get_by_city_type/{type}/{cityName}/{purpose}', [PropertyAPIController::class, 'get_by_city_type']);
Route::get('/search', [PropertyAPIController::class, 'search']);


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