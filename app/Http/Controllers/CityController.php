<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\City;
use App\Http\Requests\CreateCityRequest;
use App\Http\Requests\UpdateCityRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CityController extends Controller
{

   
    public function store(CreateCityRequest $request)
    {
        $validated = $request->validated();
        $city = new City;
        $city->name = $request->name;
        $city->addMedia($request->file('image'))->toMediaCollection('city_image');
        $city->save();
        return redirect()->back()->with('message','تم الإضافة');
    }

    public function edit($city_id)

    {
        $data=City::whereId($city_id)->get();

            $data->transform(function ($city) {
                $city->setRelation('image', $city->media->where('collection_name', 'city_image')->first());
                $city->unsetRelation('media');
                return $city;

            });

      $data = $data[0];
        //    dd($data);
           return view('admin.updatecities', compact('data'));
    }
    public function update(UpdateCityRequest $request)
    {
        $validated = $request->validated();
        $city = City::whereId($request->id)->first();
        $city->name = $request->name;
        if($request->image)
        {
            $city->clearMediaCollection('city_image');
            $city->addMedia($request->file('image'))->toMediaCollection('city_image');
        }
        $city->save();
        return redirect()->back()->with('message','تم التعديل');
    }
    public function all_cities(Request $request)
    {
        $search=$request->search;
        $cities=City::when($search, function ($query, $search)
        {$query->where('name','like','%'.$search.'%');
        })->get();


        $cities->transform(function ($city) {
            $city->setRelation('image', $city->media->where('collection_name', 'city_image')->first());
            $city->unsetRelation('media');
            return $city;

        });

        return view('admin.cities',compact('cities'));
        // return response([
        //     'cities'=>$cities,
        // ],200);
    }
    public function index(Request $request)
    {
        $search=$request->search;
        $cities=City::when($search, function ($query, $search)
        {$query->where('name','like','%'.$search.'%');
        })->get();

        $cities->transform(function ($city) {
            $city->setRelation('image', $city->media->where('collection_name', 'city_image')->first());
            $city->unsetRelation('media');
            return $city;

        });
        return view('pages.home',compact('cities'));
        // return response([
        //     'cities'=>$cities,
        // ],200);
    }
    public function show($id)
    {
        $cities = City::whereId($id)->get();
        $cities->transform(function ($city) {
            $city->setRelation('image', $city->media->where('collection_name','city_image')->first());
            $city->unsetRelation('media');
            return $city;
        });
        return response([
            'city'=>$cities[0],
        ],200);
    }
    public function destroy($id)
    {
        $city=City::whereId($id)->first();
        $city->clearMediaCollection('city_image');
        return redirect()->back();
    }
}
