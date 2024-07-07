<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\City;
use App\Models\Region;
use App\Models\Neighborhood;
use App\Models\Owner;
use Illuminate\Support\Facades\DB;
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search=$request->search;
        $props = Property::with('owner','neighborhood')->
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
                $query->where('name', 'like', '%'.$search.'%');});
        })->get();


        $props->transform(function ($prop) {
            $prop->setRelation('image', $prop->media->where('collection_name', 'property_image')->first());

                $prop->setRelation('video', $prop->media->where('collection_name', 'property_video')->first());


            $prop->unsetRelation('media');
            return $prop;
        });

        return view('admin.properties',compact('props'));

    }
    public function create(Request $request)
    {
        $cities = City::all();
        // $regions = Region::where('city_id',$request->city_id)->get();
        // $neighborhoods = Neighborhood::all();
        $owners = Owner::all();
        return view('admin.addproperties')->with(['cities' => $cities,'owners'=> $owners]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validated();
        $property = new Property;
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
        $property->number_show = $request->number_show;
        $property->meter_price = $request->meter_price;
        $property->street_width = $request->street_width;
        $property->location = $request->location;
        $property->features = $request->features;

        $property->neighborhood_id = $request->neighborhood_id;
        $property->owner_id = $request->owner_id;
        $property->addMedia($request->file('image'))->toMediaCollection('property_image');
        if($request->video){
            $property->addMedia($request->file('video'))->toMediaCollection('property_video');

        }

        $property->save();
        return redirect()->back()->with('message','تم الإضافة');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $property = Property::with('neighborhood.region.city')->whereId($id)->get();

        $property[0]->number_show++;
        $property->transform(function ($prop) {
            $prop->setRelation('image', $prop->media->where('collection_name', 'property_image')->first());

                $prop->setRelation('video', $prop->media->where('collection_name', 'property_video')->first());


            $prop->unsetRelation('media');
            return $prop;

        });
    //     if($property[0]->video){
    //   dd($property->video);
    // }
        $property = $property[0];
        $property->save();
        return view('pages.allshowproperties', compact('property'));
        // return response([
        //     'property'=>$property,
        // ],200);

    }


    public function edit($id)
    {
        $data=Property::whereId($id)->get();
        $data->transform(function ($property) {
            $property->setRelation('image', $property->media->where('collection_name', 'property_image')->first());
            $property->setRelation('video', $property->media->where('collection_name', 'property_video')->first());
            $property->unsetRelation('media');
            return $property;

        });


        $data = $data[0];
        //    dd($data);
        // $cities = City::all();
        $owners = Owner::all();
        // $neighborhoods = Neighborhood::all();
        return view('admin.updateproperties', compact('data','owners'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request)
    {
        // $validated = $request->validated();
        $property = Property::whereId($request->id)->first();
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
        $property->number_show = $request->number_show;
        $property->meter_price = $request->meter_price;
        $property->street_width = $request->street_width;
        $property->location = $request->location;
        $property->features = $request->features;

        if($request->neighborhood_id){
            $property->neighborhood_id = $request->neighborhood_id;
        }
        $property->owner_id = $request->owner_id;
        if($request->image)
        {
            $property->clearMediaCollection('property_image');
            $property->addMedia($request->file('image'))->toMediaCollection('property_image');
        }
        if($request->video)
        {
            $property->clearMediaCollection('property_video');
            $property->addMedia($request->file('video'))->toMediaCollection('property_video');
        }
        $property->save();
        // $cities = City::all();
        $owners = Owner::all();
        // $neighborhoods = Neighborhood::all();
        return redirect()->back()->with(['owners' => $owners,'message'=>'تم التعديل']);
        // return response([
        //     'property'=>$property,
        // ],200);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $property=Property::whereId($id)->first();
        $property->clearMediaCollection('property_image');
        $property->delete();
        // return response(200);
        return redirect()->back();
    }
    public function regions_for_city(Request $request)
    {
        $regions = Region::where('city_id',$request->city_id)->get();
        // $regions = Region::where('city_id',$request->id)->get();
        return response([
            'regions'=>$regions,
        ],200);
    }
    public function neighborhoods_for_region(Request $request)
    {
        $neighborhoods = Neighborhood::where('region_id',$request->city_id)->get();
        // $neighborhoods = Region::where('city_id',$request->id)->get();
        return response([
            'neighborhoods'=>$neighborhoods,
        ],200);
    }

    public function getRegion(Request $request)
    {
        // $data['regions'] = Region::where("city_id", $request->city_id)
        //                         ->get(["name", "id"]);
        $regions = DB::table('regions')->where('city_id', $request->city_id)->get();
        if(count($regions)>0){
            return response()->json($regions);

        }


    }
    public function getneighborhood(Request $request)
    {
        // $data['neighborhoods'] = Neighborhood::where("region_id", $request->region_id)
        //                             ->get(["name", "id"]);

        // return response()->json($data);
        $neighborhoods = DB::table('neighborhoods')->where('region_id', $request->region_id)->get();
        if(count($neighborhoods)>0){
            return response()->json($neighborhoods);

        }


    }
    public function get_by_city($cityName)
    {
        // $cityName=$request->cityName;
        session(['selected_city' => $cityName]);
        $props = Property::with(['neighborhood.region.city'])
        ->whereHas('neighborhood.region.city', function ($query) use ($cityName) {
            $query->where('name', 'like', '%' . $cityName . '%');
        })
        ->get();

        $props->transform(function ($prop) {
            $prop->setRelation('image', $prop->media->where('collection_name', 'property_image')->first());
            $prop->unsetRelation('media');
            return $prop;
        });

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

        $props->transform(function ($prop) {
            $prop->setRelation('image', $prop->media->where('collection_name', 'property_image')->first());
            $prop->unsetRelation('media');
            return $prop;
        });
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


        $props->transform(function ($prop) {
            $prop->setRelation('image', $prop->media->where('collection_name', 'property_image')->first());

                $prop->setRelation('video', $prop->media->where('collection_name', 'property_video')->first());


            $prop->unsetRelation('media');
            return $prop;
        });
        // return response([
        //     'props'=>$props,
        // ],200);
        return view('pages.alltype',compact('props'));

    }

}
