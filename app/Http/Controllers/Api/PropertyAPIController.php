<?php
   namespace App\Http\Controllers\Api;

   use App\Http\Controllers\Controller;
   use Illuminate\Http\Request;
   use App\Models\Property;

   class PropertyAPIController extends Controller
   {
       use ApiResponseTrait;

  public function show($id)
 {
           $property = Property::with('neighborhood.region.city')->whereId($id)->first();
           $property->number_show++;
           $property->save();
   
           return $this->apiResponse($property, 'ok', 200);

 }

     public function get_by_city($cityName)
   {
           session(['selected_city' => $cityName]);
           $props = Property::with(['neighborhood.region.city'])
           ->whereHas('neighborhood.region.city', function ($query) use ($cityName) {
               $query->where('name', 'like', '%' . $cityName . '%');
           })
           ->get();
   
           return $this->apiResponse($props, 'ok', 200);
 }
   
       public function get_by_city_type($type, $cityName,$purpose)
    {
   
           $props = Property::with(['neighborhood.region.city'])
           ->whereHas('neighborhood.region.city', function ($query) use ($cityName,$type,$purpose) {
               $query->where('name', 'like', '%' . $cityName . '%')
                  ->where('type', 'like', '%' . $type . '%')
                  ->where('purpose', 'like', '%' . $purpose . '%')
               ;
           })
           ->get();
   
           return $this->apiResponse($props, 'ok', 200);
    }
   
       public function search(Request $request)
     {
           $search=$request->search;
           $props = Property::with('owner','neighborhood','neighborhood.region.city','neighborhood.region')->
           when($search, function ($query, $search)
           {$query->where('name','like','%'.$search.'%')
                  ->orWhere('type','like','%'.$search.'%')
                  ->orWhere('purpose','like','%'.$search.'%')
                  ->orWhere('state','like','%'.$search.'%')
                  ->orWhere('space','like','%'.$search.'%')
                  ->orWhere('direction','like','%'.$search.'%')
                  ->orWhere('license','like','%'.$search.'%')
                  ->orWhereHas('owner', function ($query) use ($search) {
                   $query->where('name', 'like', '%'.$search.'%');})
                  ->orWhereHas('neighborhood', function ($query) use ($search) {
                   $query->where('name', 'like', '%'.$search.'%');})
                  ->orWhereHas('neighborhood.region', function ($query) use ($search) {
                   $query->where('name', 'like', '%'.$search.'%');})
                  ->orWhereHas('neighborhood.region.city', function ($query) use ($search) {
                   $query->where('name', 'like', '%'.$search.'%');});
           })->get();
   
           return $this->apiResponse($props, 'ok', 200);

    }
   

}
