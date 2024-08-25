<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\Neighborhood;
use App\Models\RE_Agent;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class RE_AgentAPIController extends Controller
{
  public function show()
  {
   $agents = RE_Agent::all();
   return $this->apiResponse($agents, 'ok', 200);
  }

  public function Advancedsearch(Request $request)
  {
      $results = RE_Agent::query();
  
      if ($request->city != 0) {
          $cityId = $request->city;
          $cityName = City::where('id', $cityId)->first()->name;
          $results->where('city', $cityName);
      }
  
      if ($request->region != 0) {
          $regionId = $request->region;
          $regionName = Region::where('id', $regionId)->first()->name;
          $results->where('region', $regionName);
      }
  
      if ($request->neighborhood != 0) {
          $neighborhoodId = $request->neighborhood;
          $neighborhoodName = Neighborhood::where('id', $neighborhoodId)->first()->name;
          $results->where('name', $neighborhoodName);
      }
  
      $agents = $results->get();
      $cities = City::all();
   
       return $this->apiResponse([$agents,$cities], 'ok', 200);
  }

}
