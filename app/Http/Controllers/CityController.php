<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\City;
use App\Http\Requests\CreateCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\Region;
use App\Models\Neighborhood;
use App\Models\Property;
use Illuminate\Support\Facades\File;  
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CityController extends Controller
{
  public function index()
    {
        $cities = City::all();
        return view('pages.home',compact('cities'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:cities',
            'city_image' => 'required',
          ]);

        $city = new City;
        $city->name = $request->name;
        // $city->addMedia($request->file('image'))->toMediaCollection('city_image');
        $city->save();

          // store image
        if($request->hasFile('city_image')){
        $newImage = $request->file('city_image');
        //for change image name
        $newImageName = 'image_' .  $city->id . '.' . $newImage->getClientOriginalExtension();
        $newImage->move(public_path('img/city/'), $newImageName);
        $city->city_image = $newImageName;
        $city->update();
     }

     return redirect()->back()->with('message','تم الإضافة');
    }

   public function edit($id)
   {
         $data = City::findOrFail($id);
         return view('admin.updatecities', compact('data'));
   }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            // 'city_image' => 'required',
          ]);

       $city = City::findOrFail($request->id);
       $oldImageName=$city->city_image;
       $city->name = $request->name;

      // update newImage
      if ($request->hasFile('city_image')) {
      // Delete the old image from the server
      if ($oldImageName) {
       File::delete(public_path('img/city/') . $oldImageName);
      }
       // Upload new image
       $newImage = $request->file('city_image');
       $newImageName = 'image_' . $city->id . '.' . $newImage->getClientOriginalExtension();
       $newImage->move(public_path('img/city/'), $newImageName);

       // Update the image record with the new image name
       $city->city_image = $newImageName;
      }
    
      $city->update();
     return redirect()->back()->with('message','تم التعديل');
    }

    public function all_cities(Request $request)
    {
      $cities = City::all();
        return view('admin.cities',compact('cities'));
    }
  
   
    public function destroy($id)
    {
      $regions = Region::where('city_id',$id)->get();

      foreach($regions as $region)
      {
      $neighborhoods = Neighborhood::where('region_id',$region->id)->get();
        foreach($neighborhoods as $neighborhood)
        {
        $properties = Property::where('neighborhood_id',$neighborhood->id)->get();
          foreach($properties as $property)
          {
            $oldImageEstateName =$property->estate_image;
            $oldVideoEstateName =$property->estate_video;
            if ($oldImageEstateName) {
              File::delete(public_path('img/estate/') . $oldImageEstateName);
             }
             if ($oldVideoEstateName) {
              File::delete(public_path('img/estate/') . $oldVideoEstateName);
             }
            $property->delete();
          }
          $neighborhood->delete();
        }
       $region->delete();
      }

       $city=City::whereId($id)->first();
        $oldImageName =$city->city_image;
        if ($oldImageName) {
            File::delete(public_path('img/city/') . $oldImageName);
           }
       City::findOrFail($id)->delete();
        return redirect()->back();
    }
}
