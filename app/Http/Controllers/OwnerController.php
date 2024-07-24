<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Property;
use App\Http\Requests\CreateOwnerRequest;
use App\Http\Requests\UpdateOwnerRequest;
use Illuminate\Support\Facades\File; 


class OwnerController extends Controller
{
    // public function store(CreateOwnerRequest $request)
    // {   
    //     $validated = $request->validate([
    //         'name' => 'required',
    //         'phone' => 'required|max:10|min:9',
    //         'email' => 'required|email',
    //       //  'description' => 'required',
    //       //   'owner_image'=>'required',
    //       ]);
    //     // $validated = $request->validated();
    //     $owner = new Owner;
    //     $owner->name = $request->name;
    //     $owner->email = $request->email;
    //     $owner->phone = $request->phone;
    //     $owner->description = $request->description;
    //     // $owner->addMedia($request->file('image'))->toMediaCollection('owner_image');
    //     $owner->save();

    //        // store image
    //        if($request->hasFile('owner_image')){
    //         $newImage = $request->file('owner_image');
    //         //for change image name
    //         $newImageName = 'image_' .  $owner->id . '.' . $newImage->getClientOriginalExtension();
    //         $newImage->move(public_path('img/owner/'), $newImageName);
    //         $owner->owner_image = $newImageName;
    //         $owner->update();
    //      }
    //     return redirect()->back()->with('message','تم الإضافة');
    // }
    // public function edit($owner_id)
    // {
    //     // $data=Owner::whereId($owner_id)->get();
    //     // $data->transform(function ($owner) {
    //     //         $owner->setRelation('image', $owner->media->where('collection_name', 'owner_image')->first());
    //     //         $owner->unsetRelation('media');
    //     //         return $owner;

    //     //     });
    //     //     $data = $data[0];
    //         // dd($data);

    //      $data = Owner::findOrFail($owner_id);
    //     return view('admin.updateowner', compact('data'));
    // }
    // public function update(UpdateOwnerRequest $request)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required',
    //         'phone' => 'required|max:10|min:9',
    //         'email' => 'required|email',
    //       //  'description' => 'required',
    //       // 'owner_image' =>'requiered',
    //       ]);

    //     // $validated = $request->validated();
    //     // $owner = Owner::whereId($request->id)->first();
    //    $owner = Owner::findOrFail($request->id);
    //    $oldImageName=$owner->owner_image;
    //     $owner->name = $request->name;
    //     $owner->email = $request->email;
    //     $owner->phone = $request->phone;
    //     $owner->description = $request->description;
    //     // if($request->image)
    //     // {
    //     //     $owner->clearMediaCollection('owner_image');
    //     //     $owner->addMedia($request->file('image'))->toMediaCollection('owner_image');
    //     // }

    //      // update newImage
    //       if ($request->hasFile('owner_image')) {
    //     // Delete the old image from the server
    //     if ($oldImageName) {
    //      File::delete(public_path('img/owner/') . $oldImageName);
    //     }
    //      // Upload new image
    //      $newImage = $request->file('owner_image');
    //      $newImageName = 'image_' . $owner->id . '.' . $newImage->getClientOriginalExtension();
    //      $newImage->move(public_path('img/owner/'), $newImageName);
    //      // Update the image record with the new image name
    //      $owner->owner_image = $newImageName;
    //     }
    //     $owner->update();

    //      return redirect()->back()->with('message','تم التعديل');
    // }
    // public function index(Request $request)
    // { 
    //     $owners =  Owner::all();
    //     // $search=$request->search;
    //     // $owners = Owner::when($search, function ($query, $search)
    //     // {$query->where('name','like','%'.$search.'%')
    //     // ->where('email','like','%'.$search.'%')
    //     // ->where('phone','like','%'.$search.'%');
    //     // })->get();
    //     // $owners->transform(function ($owner) {
    //     //     $owner->setRelation('image', $owner->media->where('collection_name', 'owner_image')->first());
    //     //     $owner->unsetRelation('media');
    //     //     return $owner;
    //     // });
    //     return view('admin.owner',compact('owners'));
    // }

    // public function show($id)
    // {
    //     $owners = Owner::whereId($id)->get();
    //     $owners->transform(function ($owner) {
    //         $owner->setRelation('image', $owner->media->where('collection_name','owner_image')->first());
    //         $owner->unsetRelation('media');
    //         return $owner;
    //     });
    //     return response([
    //         'owner'=>$owners[0],
    //     ],200);
    // }
    // public function destroy($id)
    // {
    //     // $owner=Owner::whereId($id)->first();
    //     // $owner->clearMediaCollection('owner_image');
    //     // $owner->delete();

    //     $properties = Property::where('owner_id',$id)->get();
    //     foreach($properties as $property)
    //     {
    //     $oldImageEstateName =$property->estate_image;
    //       $oldVideoEstateName =$property->estate_video;
    //       if ($oldImageEstateName) {
    //         File::delete(public_path('img/estate/') . $oldImageEstateName);
    //        }
    //        if ($oldVideoEstateName) {
    //         File::delete(public_path('img/estate/') . $oldVideoEstateName);
    //        }
    //       $property->delete();
    //     }

    //     $owner=Owner::whereId($id)->first();
    //     $oldImageName =$owner->owner_image;
    //     if ($oldImageName) {
    //         File::delete(public_path('img/owner/') . $oldImageName);
    //        }
    //        Owner::findOrFail($id)->delete();
    //     return redirect()->back();
    // }
}
