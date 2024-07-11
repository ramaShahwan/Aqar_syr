<?php
   namespace App\Http\Controllers\Api;

   use App\Http\Controllers\Controller;
   use Illuminate\Http\Request;
//    use App\Traits\ApiResponseTrait;
   use App\Models\City;

   class CityAPIController extends Controller
   {
       use ApiResponseTrait;

       public function index()
       {
           $cities = City::all();
           return $this->apiResponse($cities, 'ok', 200);
       }
   

    // public function index(){

    //     $cities=City::orderBy('created_at','Desc')->get();
    //     return $this->apiResponse($cities, 'ok', 200);
    // }

}
