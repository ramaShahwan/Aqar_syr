<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temp;
use DateTime;
class TempController extends Controller
{
    public function storeTempEstate(Request $request)
  {
    if (optional(auth()->user())->role == 'user') 
    {
    $user = auth()->user();

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
    $property = new Temp;
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
    $property->meter_price = $request->meter_price;
    $property->street_width = $request->street_width;
    $property->location = $request->location;
    $property->features = $request->features;

    $property->neighborhood_id = $request->neighborhood_id;
    $property->user_id = $user->id;
    $property->building_rank = $request->building_rank;
    $property->status_ = 'pendding';
    $property->note =$request->note;
    // $property->reason ='';

    $property->save();



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
  
  }
}
