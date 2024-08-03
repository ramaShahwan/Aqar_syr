<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::get('/addowner', function () {
    return view('admin.addowner');
})-> name('addowner');
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
Route::get('/owner',[OwnerController::class,'index'])-> name('owner');
Route::get('/regions',[RegionController::class,'index'])-> name('regions');
Route::get('/properties',[PropertyController::class,'index'])-> name('properties');
Route::get('/neighborhoods',[NeighborhoodController::class,'index'])-> name('neighborhoods');
Route::get('/contectadmin',[ContactController::class,'index'])-> name('contectadmin');
Route::prefix('city')->controller(CityController::class)->group(function(){
    Route::get('/create', 'create');
    Route::post('/store', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::post('/update/{id}', 'update');
    Route::get('/cities', 'all_cities');
    Route::get('/show/{id}', 'show');
    Route::get('/destroy/{id}', 'destroy');
   
});
Route::prefix('owner')->controller(OwnerController::class)->group(function(){
    Route::post('/store', 'store');
    Route::get('/create', 'create');
    Route::get('edit/{owner_id}', 'edit');
    Route::post('update/{id}', 'update');
    Route::get('/owner', 'index');
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
    Route::get('show/{id}', 'show');
    Route::get('destroy/{id}', 'destroy');
    Route::get('regions_for_city', 'regions_for_city');
    Route::get('neighborhoods_for_region', 'neighborhoods_for_region');
    Route::get('get_by_city/{cityName}', 'get_by_city');
    Route::get('get_by_city_type/{type}/{cityName}/{purpose}', 'get_by_city_type');
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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware'=> ['auth:sanctum']],function(){
    Route::prefix('auth')->controller(AuthController::class)->group(function(){
        Route::post('logout', 'logout');
});
});

Route::prefix('auth')->controller(AuthController::class)->group(function(){

    Route::post('login', 'login');

});
Route::prefix('contact')->controller(ContactController::class)->group(function(){
    Route::post('store', 'store');
    Route::get('/contectadmin', 'index');
    Route::get('destroy/{id}', 'destroy');
});

Route::get('/{any}', function() {
    return redirect('/');
  })->where('any', '.*');
  
  

require __DIR__.'/auth.php';
