<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// for city
Route::get('/all_cities', [CityAPIController::class, 'index']);

// for contact
Route::post('/store_contact', [ContactAPIController::class, 'store']);

// for property
Route::get('/show_property/{id}', [PropertyAPIController::class, 'show']);
Route::get('/get_by_city/{cityName}', [PropertyAPIController::class, 'get_by_city']);
Route::get('get_by_city_type/{type}/{cityName}/{purpose}', [PropertyAPIController::class, 'get_by_city_type']);
Route::get('/search', [PropertyAPIController::class, 'search']);





Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});

//send with token
Route::group(['middleware' => ['jwt.verify']], function() {

    Route::get('/show_property/{id}', [PropertyAPIController::class, 'show']);

    Route::get('/get_region/{id}', [TempAPIController::class, 'get_region']);
    Route::get('/getneighborhood/{id}', [TempAPIController::class, 'getneighborhood']);

    Route::post('/storeTempEstate', [TempAPIController::class, 'storeTempEstate']);
    Route::get('/getMyEstate', [TempAPIController::class, 'getMyEstate']);

    Route::post('/setFav/{id}', [FavAPIController::class, 'setFav']);
    Route::get('/getFav', [FavAPIController::class, 'getFav']);

    Route::post('/show', [RE_AgentAPIController::class, 'show']);
    Route::get('/Advancedsearch', [RE_AgentAPIController::class, 'getFav']);
    });

