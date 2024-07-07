<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Http\Requests\CreateOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;

class OwnerController extends Controller
{
    public function store(CreateOwnerRequest $request)
    {


        $validated = $request->validated();
        $owner = new Owner;
        $owner->name = $request->name;
        $owner->email = $request->email;
        $owner->phone = $request->phone;
        $owner->description = $request->description;
        $owner->addMedia($request->file('image'))->toMediaCollection('owner_image');
        $owner->save();
        return redirect()->back()->with('message','تم الإضافة');
        // return response([
        //     'owner'=>$owner,
        // ],200);
    }
    public function edit($owner_id)
    {
        $data=Owner::whereId($owner_id)->get();
        $data->transform(function ($owner) {
                $owner->setRelation('image', $owner->media->where('collection_name', 'owner_image')->first());
                $owner->unsetRelation('media');
                return $owner;

            });
            $data = $data[0];
            // dd($data);

        return view('admin.updateowner', compact('data'));
    }
    public function update(UpdateOwnerRequest $request)
    {
        $validated = $request->validated();
        $owner = Owner::whereId($request->id)->first();
        $owner->name = $request->name;
        $owner->email = $request->email;
        $owner->phone = $request->phone;
        $owner->description = $request->description;
        if($request->image)
        {
            $owner->clearMediaCollection('owner_image');
            $owner->addMedia($request->file('image'))->toMediaCollection('owner_image');
        }
        $owner->save();
        return redirect()->back()->with('message','تم التعديل');
        // return response([
        //     'owner'=>$owner,
        // ],200);
    }
    public function index(Request $request)
    {
        $search=$request->search;
        $owners = Owner::when($search, function ($query, $search)
        {$query->where('name','like','%'.$search.'%')
        ->where('email','like','%'.$search.'%')
        ->where('phone','like','%'.$search.'%');
        })->get();
        $owners->transform(function ($owner) {
            $owner->setRelation('image', $owner->media->where('collection_name', 'owner_image')->first());
            $owner->unsetRelation('media');
            return $owner;
        });
        return view('admin.owner',compact('owners'));
        // return response([
        //     'cities'=>$owners,
        // ],200);
    }
    public function show($id)
    {
        $owners = Owner::whereId($id)->get();
        $owners->transform(function ($owner) {
            $owner->setRelation('image', $owner->media->where('collection_name','owner_image')->first());
            $owner->unsetRelation('media');
            return $owner;
        });
        return response([
            'owner'=>$owners[0],
        ],200);
    }
    public function destroy($id)
    {
        $owner=Owner::whereId($id)->first();
        $owner->clearMediaCollection('owner_image');
        $owner->delete();
        return redirect()->back();
    }
}
