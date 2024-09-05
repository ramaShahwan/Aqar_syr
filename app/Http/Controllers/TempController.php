<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temp;
use App\Models\City;
use App\Models\Property;
use App\Models\Region;
use App\Models\Neighborhood;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

use DateTime;

class TempController extends Controller
{
    public function create()
    {
        $cities = City::all();
        return view('pages.addmyproperties')->with(['cities' => $cities]);
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
    //  'user_id' => 'required',
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
    public function getMyEstate()
    {
        if( !auth()->check()){

            return redirect('login');

        }
    else{

        $user = auth()->user();
         $pended = Temp::where('status_','pend')->where('user_id',$user->id)->orderBy('created_at','DESC')->get();
        //  dd($pended);
         $accepted = Property::where('status_','accept')->where('user_id',$user->id)->orderBy('created_at','DESC')->get();
         $cancled = Temp::where('status_','cancle')->where('user_id',$user->id)->orderBy('created_at','DESC')->get();

         return view('pages.myproperties', compact('accepted','pended','cancled'));

    }
    }
//for admin

    public function getPendEstateForAdmin()
    {
        $estates = Temp::where('status_','pend')->orderBy('created_at','DESC')->get();

        return view('admin.pending_requests', compact('estates'));
    }

    public function getCancleEstateForAdmin()
    {
        $estates = Temp::where('status_','cancle')->whereNotNull('reason')->orderBy('created_at','DESC')->get();
        return view('admin.requests_rejected', compact('estates'));
    }

    public function getAcceptEstateForAdmin()
    {
        $estates = Property::where('status_','accept')->whereNotNull('user_id')->orderBy('created_at','DESC')->get();
        // dd($estates );
        return view('admin.requests_accepted', compact('estates'));
    }

    public function updatePendToAccept(Request $request,$id)
    {
       $estate = Temp::findOrFail($id);
       $temp_image=$estate->estate_image;
       $temp_video=$estate->estate_video;

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
        // $property->note =$request->note;
        // $property->reason ='';
        $property->save();

         // store image
         if ($temp_image) {
            // تحديد المسار الكامل للصورة في مجلد temp
            $oldImagePath = public_path('img/temp/') . $temp_image;

            // تحديد اسم جديد للصورة
            $newImageName = 'image_' . $property->id . '.' . pathinfo($temp_image, PATHINFO_EXTENSION);

            // تحديد المسار الجديد للصورة في مجلد estate
            $newImagePath = public_path('img/estate/') . $newImageName;

            // نسخ الصورة من المسار القديم إلى المسار الجديد
            if (File::copy($oldImagePath, $newImagePath)) {
                // تحديث مسار الصورة في الـproperty
                $property->estate_image = $newImageName;
                $property->update();
            }

         }
           // store video

                if ($temp_video) {
                    // تحديد المسار الكامل للصورة في مجلد temp
                    $oldVideoPath = public_path('img/temp/') . $temp_video;

                    // تحديد اسم جديد للصورة
                    $newVideoName = 'video_' . $property->id . '.' . pathinfo($temp_video, PATHINFO_EXTENSION);

                    // تحديد المسار الجديد للصورة في مجلد estate
                    $newVideoPath = public_path('img/estate/') . $newVideoName;

                    // نسخ الصورة من المسار القديم إلى المسار الجديد
                    if (File::copy($oldVideoPath, $newVideoPath)) {
                        // تحديث مسار الصورة في الـproperty
                        $property->estate_video = $newVideoName;
                        $property->update();
                    }

         }


        //  $oldImageEstateName =$estate->estate_image;
        //    $oldVideoEstateName =$estate->estate_video;
           if ($temp_image) {
             File::delete(public_path('img/temp/') . $temp_image);
            }
            if ($temp_video) {
             File::delete(public_path('img/temp/') . $temp_video);
            }
           $estate->delete();
       }
      //    return redirect()->back()->with('message','تم القبول');
      $estates = Temp::where('status_','pend')->orderBy('created_at','DESC')->get();

      return view('admin.pending_requests', compact('estates'));
    }


    public function updatePendToCancle(Request $request,$id)
    {
       $estate = Temp::findOrFail($id);
       if($estate)
       {
        $estate->status_ = 'cancle';
        $estate->reason = $request->reason;

        $estate->update();

        return redirect()->route('getPendEstateForAdmin')->with(['message'=>'تم الرفض']);
       }
    }


    public function updatePend(Request $request,$id)
    {
        // $validated = $request->validate([
        //     'type' => 'required',
        //     'purpose' => 'required',
        //    'room' => 'nullable|integer|min:0',
        //    'bathroom'=>'nullable|integer|min:0',
        //   'space' => 'nullable|min:0',
        //  'user_id' => 'required',
        //   ]);
        //   dd('rr');
        $property = Temp::findOrFail($id);
        $oldImageName=$property->estate_image;
        $oldVideoName=$property->estate_video;
        // $property->name = $request->name;
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
            return view('admin.allshowpending_requ',compact('estate'));
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
    public function editPend($id){
        $cities = City::all();

        // return view('admin.addproperties')->with(['cities' => $cities,'users'=> $users]);
        $data = Temp::findOrFail($id);
        $my_neighborhood = Neighborhood::where('id',$data->neighborhood_id)->first();
        $my_region = Region::where('id',$my_neighborhood->region_id)->first();
        $my_city = City::where('id',$my_region->city_id)->first();
        // $users = User::all();
        // $neighborhoods = Neighborhood::all();
        return view('admin.updatepending_requests', compact('data','cities','my_city','my_region','my_neighborhood'));
    }
 }

