<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Temp;
use App\Models\Property;
use App\Models\Region;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TempAPIController extends Controller
{
    use ApiResponseTrait;

    //    public function getRegion($city_id)
    // {
    //     $regions = DB::table('regions')->where('city_id',$city_id)->get();
    //     if(count($regions)>0){
    //         return $this->apiResponse($regions, 'ok', 200);
    //     }


    //     $regions = Region::where('city_id',$city_id)->get();
    //     if($regions){
    //         return $this->apiResponse($regions, 'ok', 200);
    //         }
    // }

    // public function get_region($city_id)
    // {
    //     // $regions = Region::where('city_id', $city_id)->get();
    //     // if ($regions) {
    //     //     return $this->apiResponse($regions, 'ok', 200);
    //     // } else {
    //     //     return $this->apiResponse([], 'No regions found', 404);
    //     // }

    //     return $this->apiResponse([], 'No regions found', 404);
    // }


    public function getneighborhood($id)
    {
        $neighborhoods = DB::table('neighborhoods')->where('region_id', $id)->get();
        if (count($neighborhoods) > 0) {
            return $this->apiResponse($neighborhoods, 'ok', 200);
            // return response()->json($neighborhoods);
        }
    }

    public function get_region($id)
    {
        $regions = Region::where('city_id', $id)->get();

        if ($regions) {
            return $this->apiResponse($regions, 'ok', 200);
        } else {
            return $this->apiResponse([], 'No regions found', 404);
        }
    }

    public function storeTempEstate(Request $request)
    {
        //   if (optional(auth()->user())->role == 'user')
        //   {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'purpose' => 'required',
            'room' => 'nullable|integer|min:0',
            'bathroom' => 'nullable|integer|min:0',
            'space' => 'nullable|min:0',
            'neighborhood_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->apiResponse(null, $validator->errors(), 400);
        }

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
        $property->note = $request->note;
        // $property->reason ='';
        $property->save();

        // store image
        if ($request->hasFile('estate_image')) {
            $newImage = $request->file('estate_image');
            //for change image name
            $newImageName = 'image_' .  $property->id . '.' . $newImage->getClientOriginalExtension();
            $newImage->move(public_path('img/temp/'), $newImageName);
            $property->estate_image = $newImageName;
            $property->update();
        }
        // store video
        if ($request->hasFile('estate_video')) {
            $newVideo = $request->file('estate_video');
            //for change video name
            $newVideoName = 'video_' .  $property->id . '.' . $newVideo->getClientOriginalExtension();
            $newVideo->move(public_path('img/temp/'), $newVideoName);
            $property->estate_video = $newVideoName;
            $property->update();
        }
        if ($property) {
            return $this->apiResponse($property, 'The property is saved', 201);
        }
        return $this->apiResponse(null, 'This property not save', 400);
        //   }
    }

    public function getMyEstate()
    {
        $user = auth()->user();

        if (!$user) {
            return $this->apiResponse(null, 'Unauthorized', 401);
        }

        $pended = Temp::where('status_', 'pend')->where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();
        $accepted = Property::where('status_', 'accept')->where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();
        $canceled = Temp::where('status_', 'cancle')->where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();

        return $this->apiResponse([
            'pended' => $pended,
            'accepted' => $accepted,
            'canceled' => $canceled
        ], 'ok', 200);
    }
}
