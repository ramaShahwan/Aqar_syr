<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavController;
use App\Http\Controllers\RE_AgentController;
use App\Http\Controllers\Api\AuthController;


use Illuminate\Http\Request;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/about', function () {
    return view('pages.about');
})-> name('about');
Route::get('/contact', function () {
    return view('pages.contact');
})-> name('contact');
Route::get('/login', function () {
    return view('pages.login');
})-> name('login');
Route::get('/register', function () {
    return view('pages.register');
})-> name('register');
Route::get('/flat', function () {
    return view('pages.flat');
})-> name('flat');
Route::get('/cities', function () {
    return view('admin.cities');
})-> name('cities');
Route::get('/dashboardd', function () {
    return view('admin.dashboard');
})-> name('dashboardd');
Route::get('/properties', function () {
    return view('admin.properties');
})-> name('properties');
Route::get('/updatecities', function () {
    return view('admin.updatecities');
})-> name('updatecities');
Route::get('/addcities', function () {
    return view('admin.addcities');
})-> name('addcities');
Route::get('/addproperties', function () {
    return view('admin.addproperties');
})-> name('addproperties');
// Route::get('/owner', function () {
//     return view('admin.owner');
// })-> name('owner');
Route::get('/adduser', function () {
    return view('admin.adduser');
})-> name('adduser');
Route::get('/regions', function () {
    return view('admin.regions');
})-> name('regions');
Route::get('/addregions', function () {
    return view('admin.addregions');
})-> name('addregions');
Route::get('/neighborhoods', function () {
    return view('admin.neighborhoods');
})-> name('neighborhoods');
Route::get('/addneighborhoods', function () {
    return view('admin.addneighborhoods');
})-> name('addneighborhoods');



Route::get('/cities',[CityController::class,'all_cities'])-> name('cities');

Route::get('/',[CityController::class,'index']);

Route::get('/home',[CityController::class,'index'])-> name('home');
// Route::post('/store', [OwnerController::class, 'store'])->name('store');
// Route::get('/edit/{owner_id}',[OwnerController::class,'edit'])->name('edit');
// Route::post('/update/{id}',[OwnerController::class,'update']);
// Route::get('/create',[RegionController::class,'create']);
// Route::get('/create',[NeighborhoodController::class,'create']);
// Route::get('/create',[PropertyController::class,'create']);
Route::get('/users',[UserController::class,'index'])-> name('users');
Route::get('/regions',[RegionController::class,'index'])-> name('regions');
Route::get('/properties',[PropertyController::class,'index'])-> name('properties');
Route::get('/neighborhoods',[NeighborhoodController::class,'index'])-> name('neighborhoods');
Route::get('/contectadmin',[ContactController::class,'index'])-> name('contectadmin');
// Route::get('/agents',[RE_AgentController::class,'index'])-> name('agents');
Route::prefix('city')->controller(CityController::class)->group(function(){
    Route::get('/create', 'create');
    Route::post('/store', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::post('/update/{id}', 'update');
    Route::get('/cities', 'all_cities');
    Route::get('/show/{id}', 'show');
    Route::get('/destroy/{id}', 'destroy');

});
Route::prefix('user')->controller(UserController::class)->group(function(){
    Route::post('/store', 'store');
    Route::get('/create', 'create');
    Route::get('edit/{user_id}', 'edit');
    Route::post('update/{id}', 'update');
    Route::get('/user', 'index');
    Route::get('show/{id}', 'show');
    Route::get('destroy/{id}', 'destroy');

});

Route::prefix('neighborhood')->controller(NeighborhoodController::class)->group(function(){
    Route::post('/store', 'store');
    Route::get('/create', 'create');
    Route::get('edit/{id}', 'edit');
    Route::post('update/{id}', 'update');
    Route::get('/neighborhoods', 'index');
    Route::get('show/{id}', 'show');
    Route::get('destroy/{id}', 'destroy');
});
Route::prefix('region')->controller(RegionController::class)->group(function(){
    Route::post('/store', 'store');
    Route::get('/create', 'create');
    Route::get('edit/{id}', 'edit');
    Route::post('update/{id}', 'update');
    Route::get('/regions', 'index');
    Route::get('show/{id}', 'show');
    Route::get('destroy/{id}', 'destroy');
});
Route::prefix('property')->controller(PropertyController::class)->group(function(){
    Route::post('/store', 'store');
    Route::get('/create', 'create');
    Route::get('edit/{id}', 'edit');
    Route::post('update/{id}', 'update');
    Route::get('/properties', 'index');
    // Route::get('show/{id}', 'show');
    Route::get('destroy/{id}', 'destroy');
    Route::get('regions_for_city', 'regions_for_city');
    Route::get('neighborhoods_for_region', 'neighborhoods_for_region');
    Route::get('get_by_city/{cityName}', 'get_by_city');
    Route::get('get_by_city_type/{type}/{purpose}/{cityName}', 'get_by_city_type');
    Route::get('search', 'search');

});

Route::get('getregion', [PropertyController::class, 'getRegion'])->name('getRegion');
Route::get('getneighborhood', [PropertyController::class, 'getneighborhood'])->name('getneighborhood');
// Route::get('/alltype', function () {
//     return view('pages.alltype');
// })-> name('alltype');
// Route::get('/allshowproperties', function () {
//     return view('pages.allshowproperties');
// })-> name('allshowproperties');
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::group(['middleware'=> ['auth:sanctum']],function(){
//     Route::prefix('auth')->controller(AuthController::class)->group(function(){
//         Route::post('logout', 'logout');
// });
// });

// Route::prefix('auth')->controller(AuthController::class)->group(function(){

//     Route::post('login', 'login');

// });
Route::prefix('contact')->controller(ContactController::class)->group(function(){
    Route::post('store', 'store');
    Route::get('/contectadmin', 'index');
    Route::get('destroy/{id}', 'destroy');
});


// user dashboard Routes

// Route::middleware(['auth', 'verified', 'user'])->group(function () {
//     //for user_dashboard
//         Route::get('getMyEstate', [TempController::class, 'getMyEstate']);
//         Route::get('addmyproperties', [TempController::class, 'create'])->name('addmyproperties');
//         Route::post('storeTempEstate', [TempController::class, 'storeTempEstate'])->name('storeTempEstate');
//         Route::get('property/show/{id}', [PropertyController::class, 'show']);
//         Route::get('getFav', [FavController::class, 'getFav'])->name('getFav');
//         Route::post('setFav/{id}', [FavController::class, 'setFav'])->name('setFav');

    //for estate
        // Route::get('getPenndEstate', [TempController::class, 'getPenndEstate']);
        // Route::get('getAcceptEstate', [TempController::class, 'getAcceptEstate']);
        // Route::get('getCancleEstate', [TempController::class, 'getCancleEstate']);

     //for agents
    //     Route::get('show', [RE_AgentController::class, 'show'])->name('show');
    //     Route::get('Advancedsearch', [RE_AgentController::class, 'Advancedsearch']);

    // });

    // admin dashboard Routes
    Route::middleware(['auth', 'verified', 'admin'])->group(function () {

        Route::post('updatePendToAccept/{id}', [TempController::class, 'updatePendToAccept'])->name('updatePendToAccept');
        Route::post('updatePendToCancle/{id}', [TempController::class, 'updatePendToCancle'])->name('updatePendToCancle');
        Route::get('editPend/{id}', [TempController::class, 'editPend'])->name('editPend');
        Route::post('updatePend/{id}', [TempController::class, 'updatePend']);
        Route::get('getPendDetails/{id}', [TempController::class, 'getPendDetails'])->name('getPendDetails');
        Route::delete('destroy/{id}', [TempController::class, 'destroy']);

        Route::get('getAcceptEstateForAdmin', [TempController::class, 'getAcceptEstateForAdmin'])->name('getAcceptEstateForAdmin');
        Route::get('getCancleEstateForAdmin', [TempController::class, 'getCancleEstateForAdmin'])->name('getCancleEstateForAdmin');
        Route::get('getPendEstateForAdmin', [TempController::class, 'getPendEstateForAdmin'])->name('getPendEstateForAdmin');

      Route::get('agents', [RE_AgentController::class, 'index'])->name('agents');
        Route::get('create', [RE_AgentController::class, 'create']);
        Route::post('store', [RE_AgentController::class, 'store']);
        Route::get('edit/{id}', [RE_AgentController::class, 'edit']);
        Route::post('update/{id}', [RE_AgentController::class, 'update']);
        Route::get('destroy/{id}', [RE_AgentController::class, 'destroy']);
        // Route::get('show', [RE_AgentController::class, 'show'])->name('show');
        // Route::get('Advancedsearch', [RE_AgentController::class, 'Advancedsearch']);

    });
    Route::middleware(['auth', 'verified'])->group(function () {
//for agents
Route::get('show', [RE_AgentController::class,'show']);
Route::get('Advancedsearch', [RE_AgentController::class, 'Advancedsearch']);

//for estate request
Route::get('getMyEstate', [TempController::class, 'getMyEstate']);
Route::get('create', [TempController::class, 'create'])->name('addmyproperties');
Route::post('storeTempEstate', [TempController::class, 'storeTempEstate'])->name('storeTempEstate');
Route::get('property/show/{id}', [PropertyController::class, 'show']);
Route::get('getFav', [FavController::class, 'getFav'])->name('getFav');
Route::post('setFav/{id}', [FavController::class, 'setFav'])->name('setFav');
});


//fatima routes
// Route::get('/getMyEstate', function () {
//     return view('pages.myproperties');
// })-> name('getMyEstate');
Route::get('/favoriteproperties', function () {
    return view('pages.favoriteproperties');
})-> name('favoriteproperties');

Route::get('/pending_requests', function () {
    return view('admin.pending_requests');
})-> name('pending_requests');
Route::get('/requests_accepted', function () {
    return view('admin.requests_accepted');
})-> name('requests_accepted');
Route::get('/requests_rejected', function () {
    return view('admin.requests_rejected');
})-> name('requests_rejected');
Route::get('/allshowpending_requ', function () {
    return view('admin.allshowpending_requ');
})-> name('allshowpending_requ');


Route::get('/{any}', function() {
    return redirect('/');
  })->where('any', '.*');



require __DIR__.'/auth.php';
