<?php

namespace App\Http\Controllers;

use App\Models\Neighborhood;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Property;
use Illuminate\Support\Facades\File; 


class NeighborhoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search=$request->search;
        $neighborhoods=Neighborhood::with('region')->when($search, function ($query, $search)
        {$query->where('name','like','%'.$search.'%')
            ->orWhereHas('region', function ($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%');});
        })->get();

        return view('admin.neighborhoods',compact('neighborhoods'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $regions = Region::all();
        return view('admin.addneighborhoods',compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'region_id' => 'required',
          ]);
        // $validated = $request->validated();
        $neighborhood = new Neighborhood;
        $neighborhood->name = $request->name;
        $neighborhood->region_id = $request->region_id;
        $neighborhood->save();
        return redirect()->back()->with('message','تم الإضافة');
    }

    /**
     * Display the specified resource.
     */
    public function show(Neighborhood $neighborhood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Neighborhood::findOrFail($id);

        // $data=Neighborhood::whereId($id)->get();
        // $data = $data[0];
        //    dd($data);

        $regions = Region::all();
        return view('admin.updateneighborhoods', compact('data','regions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Neighborhood $neighborhood)
    {
        $validated = $request->validate([
            'name' => 'required',
            'region_id' => 'required',
          ]);

        // $neighborhood = Neighborhood::whereId($request->id)->first();
        $neighborhood = Neighborhood::findOrFail($request->id);
        $neighborhood->name = $request->name;
        $neighborhood->region_id = $request->region_id;
        $neighborhood->update();

        // $regions = Region::all();
        return redirect()->back()->with(['message'=>'تم التعديل']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $neighborhood= Neighborhood::whereId($id)->first();
        // $neighborhood->delete();

        $properties = Property::where('neighborhood_id',$id)->get();
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

        Neighborhood::findOrFail($id)->delete();
        return redirect()->back();
    }
}
