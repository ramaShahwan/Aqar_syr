<?php
   namespace App\Http\Controllers\Api;

   use App\Http\Controllers\Controller;
   use Illuminate\Http\Request;
//    use App\Traits\ApiResponseTrait;
   use App\Models\City;

   class CityAPIController extends Controller
   {
       use ApiResponseTrait;

       public function index(Request $request)
       {
           $search = $request->search;
           $cities = City::when($search, function ($query, $search) {
               $query->where('name', 'like', '%' . $search . '%');
           })->get();

           $cities->transform(function ($city) {
               $city->setRelation('image', $city->media->where('collection_name', 'city_image')->first());
               $city->unsetRelation('media');
               return $city;
           });

           return $this->apiResponse($cities, 'ok', 200);
       }
   

    // public function index(){

    //     $cities=City::orderBy('created_at','Desc')->get();
    //     return $this->apiResponse($cities, 'ok', 200);
    // }

}
