<?php

namespace App\Http\Controllers;

use App\Models\RE_Agent;
use App\Models\City;
use App\Models\Region;
use App\Models\Neighborhood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RE_AgentController extends Controller
{
  public function index()
  {
   $agents = RE_Agent::all();
   return view('admin.agents',compact('agents'));
  }

  public function getRegion(Request $request)
  {
      $regions = DB::table('regions')->where('city_id', $request->city_id)->get();
      if(count($regions)>0){
          return response()->json($regions);
      }
  }

  public function getneighborhood(Request $request)
  {
      $neighborhoods = DB::table('neighborhoods')->where('region_id', $request->region_id)->get();
      if(count($neighborhoods)>0){
          return response()->json($neighborhoods);

      }
  }

  public function create()
  {
    $cities = City::all();
    return view('admin.addagents',compact('cities'));
  }

  public function store(Request $request)
  {
      $validated = $request->validate([
          'name' => 'required',
          'phone' => 'required|min:7|max:10',
         'email' => 'nullable|email',
         'mobile'=>'required|min:10|max:14',
        'address' => 'required|max:255',
        'neighborhood_id' => 'required',
        ]);
      // $validated = $request->validated();
      $agent = new RE_Agent();
      $agent->name = $request->name;
      $agent->phone = $request->phone;
      $agent->email = $request->email;
      $agent->mobile = $request->mobile;
      $agent->address = $request->address;
      $agent->neighborhood_id = $request->neighborhood_id;
      $agent->save();

       // store image
       if($request->hasFile('image')){
          $newImage = $request->file('image');
          //for change image name
          $newImageName = 'image_' .  $agent->id . '.' . $newImage->getClientOriginalExtension();
          $newImage->move(public_path('img/agent/'), $newImageName);
          $agent->image = $newImageName;
          $agent->update();
       }
      return redirect()->back()->with('message','تم الإضافة');
  }

  public function edit($id)
  {
      $data = RE_Agent::findOrFail($id);
      $my_neighborhood = Neighborhood::where('id',$data->neighborhood_id)->first();
      $my_region = Region::where('id',$my_neighborhood->region_id)->first();
      $my_city = City::where('id',$my_region->city_id)->first();
      $cities = City::all();
      return view('admin.updateagents', compact('data','cities','my_city','my_region','my_neighborhood'));
  }
  public function update(Request $request)
  {
      $validated = $request->validate([
        'name' => 'required',
        'phone' => 'required|min:7|max:10',
       'email' => 'nullable|email',
       'mobile'=>'required|min:10|max:14',
      'address' => 'required|max:255',
      'neighborhood_id' => 'required',
        ]);

      $agent = RE_Agent::findOrFail($request->id);
      $oldImageName=$agent->image;
      $agent->name = $request->name;
      $agent->phone = $request->phone;
      $agent->email = $request->email;
      $agent->mobile = $request->mobile;
      $agent->address = $request->address;
      $agent->neighborhood_id = $request->neighborhood_id;


   // update newImage
   if ($request->hasFile('image')) {
    // Delete the old image from the server
   if ($oldImageName) {
     File::delete(public_path('img/agent/') . $oldImageName);
    }
   // Upload new image
     $newImage = $request->file('image');
     $newImageName = 'image_' . $agent->id . '.' . $newImage->getClientOriginalExtension();
     $newImage->move(public_path('img/agent/'), $newImageName);
     // Update the image record with the new image name
     $agent->image = $newImageName;
    }
    $agent->update();

      return redirect()->back()->with(['message'=>'تم التعديل']);
  }

  public function destroy($id)
  {
    $agent=RE_Agent::whereId($id)->first();
    $oldImageName =$agent->image;
    if ($oldImageName) {
        File::delete(public_path('img/agent/') . $oldImageName);
       }
       RE_Agent::findOrFail($id)->delete();
       return redirect()->back();
  }

  public function show()
  {
    { if( optional(auth())){
      $agents = RE_Agent::all();
      $cities = City::all();
      return view('pages.allagents',compact('agents','cities'));
     }else{
    return redirect('login');
       }
  }
  }
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
        $message = null;
    }

    return view('pages.searchagents', [
        'agents' => $agents,
        'cities' => $cities,
        'message' => $message, // مرر الرسالة إلى العرض
    ]);
}




}
