<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temp;
use App\Models\Property;
use Illuminate\Support\Facades\File; 
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
    $property->status_ = 'pend';
    $property->note =$request->note;
    // $property->reason ='';
    $property->save();

     // store image
     if($request->hasFile('estate_image')){
        $newImage = $request->file('estate_image');
        //for change image name
        $newImageName = 'image_' .  $property->id . '.' . $newImage->getClientOriginalExtension();
        $newImage->move(public_path('img/temp/'), $newImageName);
        $property->estate_image = $newImageName;
        $property->update();
     }
       // store video
     if($request->hasFile('estate_video')){
        $newVideo = $request->file('estate_video');
        //for change video name
        $newVideoName = 'video_' .  $property->id . '.' . $newVideo->getClientOriginalExtension();
        $newVideo->move(public_path('img/temp/'), $newVideoName);
        $property->estate_video = $newVideoName;
        $property->update();
     }
    return redirect()->back()->with('message','تم الإضافة');
    }
  }

    public function getPenndEstate()
    {
    if (optional(auth()->user())->role == 'user') 
     {
      $user = auth()->user();
      $estates = Temp::where('status_','pend')->where('user_id',$user->id)->orderBy('created_at','DESC');
      return view('user.pend', compact('estates'));
     }
    }

    public function getAcceptEstate()
    {
    if (optional(auth()->user())->role == 'user') 
     {
      $user = auth()->user();
      $estates = Property::where('status_','accept')->where('user_id',$user->id)->whereNotNull('reason')->orderBy('created_at','DESC');
      return view('user.accept', compact('estates'));
     }
    }

    public function getCancleEstate()
    {
    if (optional(auth()->user())->role == 'user') 
     {
      $user = auth()->user();
      $estates = Temp::where('status_','cancle')->where('user_id',$user->id)->orderBy('created_at','DESC');
      return view('user.cancle', compact('estates'));
     }
    }


    public function getPendEstateForAdmin()
    {
        $estates = Temp::where('status_','pend')->whereNull('reason')->orderBy('created_at','DESC');
        return view('admin.pend', compact('estates'));
    }

    public function getCancleEstateForAdmin()
    {
        $estates = Temp::where('status_','cancle')->whereNotNull('reason')->orderBy('created_at','DESC');
        return view('admin.cancle', compact('estates'));
    }

    public function getAcceptEstateForAdmin()
    {
        $estates = Property::where('status_','accept')->whereNotNull('user_id')->orderBy('created_at','DESC');
        return view('admin.accept', compact('estates'));
    }

    public function updatePendToAccept(Request $request,$id)
    {
       $estate = Temp::findOrFail($id);
       if($estate)
       {
        $property = new Property();
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
        $property->user_id = $request->user_id;
        $property->building_rank = $request->building_rank;
        $property->status_ = 'accept';
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

       
         $oldImageEstateName =$estate->estate_image;
           $oldVideoEstateName =$estate->estate_video;
           if ($oldImageEstateName) {
             File::delete(public_path('img/temp/') . $oldImageEstateName);
            }
            if ($oldVideoEstateName) {
             File::delete(public_path('img/temp/') . $oldVideoEstateName);
            }
           $estate->delete();
       }
       return redirect()->back()->with('message','تم القبول');
    }
  

    public function updatePendToCancle(Request $request,$id)
    {
       $estate = Temp::findOrFail($id);
       if($estate)
       {
        $estate->status_ = 'cancle';
        $estate->reason = $request->reason;

        $estate->update();
        return redirect()->back()->with('message','تم الرفض');
       }
    }


    public function updatePend(Request $request,$id)
    {
        $validated = $request->validate([
            'type' => 'required',
            'purpose' => 'required',
           'room' => 'nullable|integer|min:0',
           'bathroom'=>'nullable|integer|min:0',
          'space' => 'nullable|min:0',
         'user_id' => 'required',
          ]);

        $property = Temp::findOrFail($id);
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
        $property->meter_price = $request->meter_price;
        $property->street_width = $request->street_width;
        $property->location = $request->location;
        $property->features = $request->features;

        if($request->neighborhood_id){
            $property->neighborhood_id = $request->neighborhood_id;
        }
        $property->user_id = $request->user_id;
        $property->building_rank = $request->building_rank;

     // update newImage
     if ($request->hasFile('estate_image')) {
      // Delete the old image from the server
     if ($oldImageName) {
       File::delete(public_path('img/temp/') . $oldImageName);
      }
     // Upload new image
       $newImage = $request->file('estate_image');
       $newImageName = 'image_' . $property->id . '.' . $newImage->getClientOriginalExtension();
       $newImage->move(public_path('img/temp/'), $newImageName);
       // Update the image record with the new image name
       $property->estate_image = $newImageName;
      }

         // update newVideo
     if ($request->hasFile('estate_video')) {
        // Delete the old video from the server
       if ($oldVideoName) {
         File::delete(public_path('img/temp/') . $oldVideoName);
        }
       // Upload new video
         $newVideo = $request->file('estate_video');
         $newVideoName = 'video_' . $property->id . '.' . $newVideo->getClientOriginalExtension();
         $newVideo->move(public_path('img/temp/'), $newVideoName);
         // Update the image record with the new image name
         $property->estate_video = $newVideoName;
        }
      $property->update();

        return redirect()->back()->with(['message'=>'تم التعديل']);
    }


    public function getPendDetails($id)
    {
            $estate = Temp::where('id',$id)->first();
            return view('admin.details',compact('estate'));
   }

    public function destroy($id)
    {
      $estate = Temp::findOrFail($id);
      if($estate)
      {
        $oldImageEstateName =$estate->estate_image;
        $oldVideoEstateName =$estate->estate_video;
        if ($oldImageEstateName) {
          File::delete(public_path('img/temp/') . $oldImageEstateName);
         }
         if ($oldVideoEstateName) {
          File::delete(public_path('img/temp/') . $oldVideoEstateName);
         }
        $estate->delete();
     }
    }  
 }

