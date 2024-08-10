<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\City;
use App\Models\Region;
use App\Models\Neighborhood;
use App\Models\Owner;
use App\Models\User;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\DB;
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $search=$request->search;
        // $props = Property::with('owner','neighborhood')->
        // when($search, function ($query, $search)
        // {$query->where('name','like','%'.$search.'%')
        //        ->orWhere('type','like','%'.$search.'%')
        //        ->orWhere('purpose','like','%'.$search.'%')
        //        ->orWhere('state','like','%'.$search.'%')
        //        ->orWhere('space','like','%'.$search.'%')
        //        ->orWhere('direction','like','%'.$search.'%')
        //        ->orWhere('license','like','%'.$search.'%')
        //        ->orWhereHas('owner', function ($query) use ($search) {
        //         $query->where('name', 'like', '%'.$search.'%');})
        //        ->orWhereHas('neighborhood', function ($query) use ($search) {
        //         $query->where('name', 'like', '%'.$search.'%');});
        // })->get();


        // $props->transform(function ($prop) {
        //     $prop->setRelation('image', $prop->media->where('collection_name', 'property_image')->first());

        //         $prop->setRelation('video', $prop->media->where('collection_name', 'property_video')->first());


        //     $prop->unsetRelation('media');
        //     return $prop;
        // });

        $props = Property::all();
        return view('admin.properties',compact('props'));

    }
    public function create(Request $request)
    {
        $cities = City::all();
        $owners = User::all();
        return view('admin.addproperties')->with(['cities' => $cities,'owners'=> $owners]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required',
            'purpose' => 'required',
           'room' => 'nullable|integer|min:0',
           'bathroom'=>'nullable|integer|min:0',
          'space' => 'nullable|min:0',
          'neighborhood_id' => 'required',
          'user_id' => 'required',
          ]);
        // $validated = $request->validated();
        $property = new Property;
        $property->type = $request->type;
        $property->purpose = $request->purpose;
        $property->room = $request->room;
        $property->bathroom = $request->bathroom;
        $property->price = $request->price;
        $property->state = $request->state;
        $property->space = $request->space;
        $property->direction = $request->direction;
        $property->license = $request->license;
        $property->floor = $request->floor;
        $property->description = $request->description;
        // $property->number_show = $request->number_show;
        $property->meter_price = $request->meter_price;
        $property->street_width = $request->street_width;
        $property->location = $request->location;
        $property->features = $request->features;
        $property->neighborhood_id = $request->neighborhood_id;
        $property->user_id = $request->user_id;
        $property->building_rank = $request->building_rank;
        $property->save();


        // $property->addMedia($request->file('image'))->toMediaCollection('property_image');
        // if($request->video){
        //     $property->addMedia($request->file('video'))->toMediaCollection('property_video');
        // }

         // store image
         if($request->hasFile('estate_image')){
            $newImage = $request->file('estate_image');
            //for change image name
            $newImageName = 'image_' .  $property->id . '.' . $newImage->getClientOriginalExtension();
            $newImage->move(public_path('img/estate/'), $newImageName);
            $property->estate_image = $newImageName;
            $property->update();
         }
           // store video
         if($request->hasFile('estate_video')){
            $newVideo = $request->file('estate_video');
            //for change video name
            $newVideoName = 'video_' .  $property->id . '.' . $newVideo->getClientOriginalExtension();
            $newVideo->move(public_path('img/estate/'), $newVideoName);
            $property->estate_video = $newVideoName;
            $property->update();
         }
        return redirect()->back()->with('message','تم الإضافة');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $property = Property::with('neighborhood.region.city')->whereId($id)->first();
        $property->number_show++;
        // $property->transform(function ($prop) {
        //     $prop->setRelation('image', $prop->media->where('collection_name', 'property_image')->first());
        //      $prop->setRelation('video', $prop->media->where('collection_name', 'property_video')->first());
        //     $prop->unsetRelation('media');
        //     return $prop;
        // });
        // $property = $property[0];
        $property->save();

        return view('pages.allshowproperties', compact('property'));
    }


    public function edit($id)
    {
        // $data=Property::whereId($id)->get();
        // $data->transform(function ($property) {
        //     $property->setRelation('image', $property->media->where('collection_name', 'property_image')->first());
        //     $property->setRelation('video', $property->media->where('collection_name', 'property_video')->first());
        //     $property->unsetRelation('media');
        //     return $property;
        // });
        // $data = $data[0];
        //    dd($data);
        // $cities = City::all();

        $data = Property::findOrFail($id);
        $owners = User::all();
        // $neighborhoods = Neighborhood::all();
        return view('admin.updateproperties', compact('data','owners'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required',
            'purpose' => 'required',
           'room' => 'nullable|integer|min:0',
           'bathroom'=>'nullable|integer|min:0',
          'space' => 'nullable|min:0',
        // 'neighborhood_id' => 'required',
         'user_id' => 'required',
          ]);
        // $validated = $request->validated();
        // $property = Property::whereId($request->id)->first();

        $property = Property::findOrFail($request->id);
        $oldImageName=$property->estate_image;
        $oldVideoName=$property->estate_video;

        $property->name = $request->name;
        $property->type = $request->type;
        $property->purpose = $request->purpose;
        $property->room = $request->room;
        $property->bathroom = $request->bathroom;
        $property->price = $request->price;
        $property->state = $request->state;
        $property->space = $request->space;
        $property->direction = $request->direction;
        $property->license = $request->license;
        $property->floor = $request->floor;
        $property->description = $request->description;
        //$property->number_show = $request->number_show;
        $property->meter_price = $request->meter_price;
        $property->street_width = $request->street_width;
        $property->location = $request->location;
        $property->features = $request->features;

        if($request->neighborhood_id){
            $property->neighborhood_id = $request->neighborhood_id;
        }
        $property->user_id = $request->user_id;
        $property->building_rank = $request->building_rank;

        // if($request->image)
        // {
        //     $property->clearMediaCollection('property_image');
        //     $property->addMedia($request->file('image'))->toMediaCollection('property_image');
        // }
        // if($request->video)
        // {
        //     $property->clearMediaCollection('property_video');
        //     $property->addMedia($request->file('video'))->toMediaCollection('property_video');
        // }
        // $cities = City::all();

     // update newImage
     if ($request->hasFile('estate_image')) {
      // Delete the old image from the server
     if ($oldImageName) {
       File::delete(public_path('img/estate/') . $oldImageName);
      }
     // Upload new image
       $newImage = $request->file('estate_image');
       $newImageName = 'image_' . $property->id . '.' . $newImage->getClientOriginalExtension();
       $newImage->move(public_path('img/estate/'), $newImageName);
       // Update the image record with the new image name
       $property->estate_image = $newImageName;
      }

         // update newVideo
     if ($request->hasFile('estate_video')) {
        // Delete the old video from the server
       if ($oldVideoName) {
         File::delete(public_path('img/estate/') . $oldVideoName);
        }
       // Upload new video
         $newVideo = $request->file('estate_video');
         $newVideoName = 'video_' . $property->id . '.' . $newVideo->getClientOriginalExtension();
         $newVideo->move(public_path('img/estate/'), $newVideoName);
         // Update the image record with the new image name
         $property->estate_video = $newVideoName;
        }
      $property->update();
        // $neighborhoods = Neighborhood::all();
      //   /** */  $owners = Owner::all();
      //  return redirect()->back()->with(['owners' => $owners,'message'=>'تم التعديل']);
        return redirect()->back()->with(['message'=>'تم التعديل']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $property=Property::whereId($id)->first();
        // $property->clearMediaCollection('property_image');
        // $property->delete();

        $property=Property::whereId($id)->first();
        $oldImageName =$property->estate_image;
        if ($oldImageName) {
            File::delete(public_path('img/estate/') . $oldImageName);
           }

           $oldVideoName =$property->estate_video;
           if ($oldVideoName) {
               File::delete(public_path('img/estate/') . $oldVideoName);
            }

        Property::findOrFail($id)->delete();
        return redirect()->back();
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

    public function get_by_city($cityName)
    {
        session(['selected_city' => $cityName]);
        $props = Property::with(['neighborhood.region.city'])
        ->whereHas('neighborhood.region.city', function ($query) use ($cityName) {
            $query->where('name', 'like', '%' . $cityName . '%');
        })
        ->get();

        // $props->transform(function ($prop) {
        //     $prop->setRelation('image', $prop->media->where('collection_name', 'property_image')->first());
        //     $prop->unsetRelation('media');
        //     return $prop;
        // });
            return view('pages.alltype', compact('props'));
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

        return view('pages.flat', compact('props'));
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


        // $props->transform(function ($prop) {
        //     $prop->setRelation('image', $prop->media->where('collection_name', 'property_image')->first());

        //         $prop->setRelation('video', $prop->media->where('collection_name', 'property_video')->first());


        //     $prop->unsetRelation('media');
        //     return $prop;
        // });
     
        return view('pages.alltype',compact('props'));
    }

}
