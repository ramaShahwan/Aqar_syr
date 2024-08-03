<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Models\City;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search=$request->search;

        $regions=Region::with('city')->when($search, function ($query, $search)
        {$query->where('name','like','%'.$search.'%')
            ->orWhereHas('city', function ($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%');});
        })->get();
        // return redirect()->back();

        return view('admin.regions',compact('regions'));
        // return response([
        //     'cities'=>$cities,
        // ],200);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        return view('admin.addregions',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'city_id' => 'required',
          ]);
        // $validated = $request->validated();
        $region = new Region;
        $region->name = $request->name;
        $region->city_id = $request->city_id;
        $region->save();
        return redirect()->back()->with('message','تم الإضافة');
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $data=Region::whereId($id)->get();
        // $data = $data[0];
        //    dd($data);

        $data = Region::findOrFail($id);
        $cities = City::all();
        return view('admin.updateregions', compact('data','cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Region $region)
    {
        $validated = $request->validate([
            'name' => 'required',
            'city_id' => 'required',
          ]);
        // $validated = $request->validated();
        // $region = Region::whereId($request->id)->first();

        $region = Region::findOrFail($request->id);
        $region->name = $request->name;
        $region->city_id = $request->city_id;
        $region->save();
        // $cities = City::all();
        // return redirect()->back()->with(['cities' => $cities,'message'=>'تم التعديل']);
        return redirect()->back()->with(['message'=>'تم التعديل']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $region= Region::whereId($id)->first();
        // $region->delete();
        Region::findOrFail($id)->delete();
        return redirect()->back();
    }
}
