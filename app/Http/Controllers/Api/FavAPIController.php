<?php
   namespace App\Http\Controllers\Api;

   use App\Http\Controllers\Controller;
   use Illuminate\Http\Request;
   use App\Models\Fav;
   use App\Models\Property;

   class FavAPIController extends Controller
   {
       use ApiResponseTrait;

      //  public function getFav()
      //  {
      //   $estates[]=null;
      //    $user_id = auth()->user()->id;
      //    $favs = Fav::where('user_id',$user_id)->get();
      //    foreach($favs as $fav)
      //    {
      //     $estates[]=Property::where('id',$fav->property_id)->get();
      //    }
      //    return $this->apiResponse($estates[], 'ok', 200);
      //  }

    public function getFav()
   {
    $user_id = auth()->user()->id;

    $estates = Property::whereIn('id', function($query) use ($user_id) {
        $query->select('property_id')
              ->from('favs')
              ->where('user_id', $user_id);
    })->get();

    return $this->apiResponse($estates, 'ok', 200);
  }
     
       public function setFav($id)
       {
         $user = auth()->user();
         $favs = Fav::all();
         foreach($favs as $fav)
         {
        if( $fav->property_id == $id && $fav->user_id == $user->id)
        {
         $fav->delete();
         return $this->apiResponse('', 'the favorite unset', 200);
        }
         }
     
         $fav = new Fav;
     
         $fav->property_id = $id;
         $fav->user_id = $user->id;
         $fav->save();
         return $this->apiResponse($fav, 'the favorite set', 200);

       }
   

   

}
