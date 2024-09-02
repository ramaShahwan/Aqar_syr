<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\Neighborhood;
use App\Models\RE_Agent;
use App\Models\City;
use Illuminate\Http\Request;



class RE_AgentAPIController extends Controller
{
    use ApiResponseTrait;

  public function show_agents()
  {
   $agents = RE_Agent::all();
   return $this->apiResponse($agents, 'ok', 200);
  }

//   public function Advancedsearch(Request $request)
//   {
//       $results = RE_Agent::query();
  
//       if ($request->city != 0) {
//           $cityId = $request->city;
//           $cityName = City::where('id', $cityId)->first()->name;
//           $results->where('city', $cityName);
//       }
  
//       if ($request->region != 0) {
//           $regionId = $request->region;
//           $regionName = Region::where('id', $regionId)->first()->name;
//           $results->where('region', $regionName);
//       }
  
//       if ($request->neighborhood != 0) {
//           $neighborhoodId = $request->neighborhood;
//           $neighborhoodName = Neighborhood::where('id', $neighborhoodId)->first()->name;
//           $results->where('name', $neighborhoodName);
//       }
  
//       $agents = $results->get();
//       $cities = City::all();
   
//        return $this->apiResponse([$agents,$cities], 'ok', 200);
//   }

public function Advancedsearch(Request $request)
{
    // ابدأ استعلام البحث من جدول RE_Agent
    $results = RE_Agent::query();

    // تحقق من وجود المدينة في الطلب وقم بتصفية النتائج حسب المدينة
    if ($request->filled('city_id')) {
        $cityId = $request->city_id;
        $results->whereHas('neighborhood.region.city', function ($query) use ($cityId) {
            $query->where('id', $cityId);
        });
    }

    // تحقق من وجود المنطقة في الطلب وقم بتصفية النتائج حسب المنطقة
    if ($request->filled('region_id')) {
        $regionId = $request->region_id;
        $results->whereHas('neighborhood.region', function ($query) use ($regionId) {
            $query->where('id', $regionId);
        });
    }

    // تحقق من وجود الحي في الطلب وقم بتصفية النتائج حسب الحي
    if ($request->filled('neighborhood_id')) {
        $neighborhoodId = $request->neighborhood_id;
        $results->whereHas('neighborhood', function ($query) use ($neighborhoodId) {
            $query->where('id', $neighborhoodId);
        });
    }

    // احصل على النتائج
    $agents = $results->get();
    $cities = City::all();

    // تحقق من وجود نتائج وإذا لم تكن هناك نتائج، قم بإعداد رسالة مناسبة
    if ($agents->isEmpty()) {
        $message = "لا توجد وكلاء عقاريين متطابقين مع معايير البحث.";
    } else {
        $message = '200';
    }

    return $this->apiResponse([$agents,$cities], $message, 200);
}

}
