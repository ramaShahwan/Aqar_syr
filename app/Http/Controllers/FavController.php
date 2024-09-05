<?php

namespace App\Http\Controllers;

use App\Models\Fav;
use Illuminate\Http\Request;

class FavController extends Controller
{
  public function getFav()
  {
    $user_id = auth()->user()->id;
    $favs = Fav::where('user_id',$user_id)->get();
    return view('pages.favoriteproperties',compact('favs'));
  }

  // public function setFav($id)
  // {
  //   $user = auth()->user();
  //   $favs = Fav::all();
  //   foreach($favs as $fav)
  //   {
  //  if( $fav->property_id == $id && $fav->user_id == $user->id)
  //  {
  //   $fav->delete();
  //   return redirect()->back();
  //  }
  //   }

  //   $fav = new Fav;

  //   $fav->property_id = $id;
  //   $fav->user_id = $user->id;
  //   $fav->save();
  //   return redirect()->back();
  // }

  public function setFav($id)
{
    $user = auth()->user();
    $fav = Fav::where('property_id', $id)->where('user_id', $user->id)->first();

    if ($fav) {
        // إذا كان العقار موجودًا في المفضلة، قم بحذفه
        $fav->delete();
        return response()->json(['isFavorited' => false]);
    } else {
        // إذا لم يكن موجودًا، قم بإضافته
        $newFav = new Fav;
        $newFav->property_id = $id;
        $newFav->user_id = $user->id;
        $newFav->save();
        return response()->json(['isFavorited' => true]);
    }
}
public function isFavorited($propertyId)
{
    $userId = auth()->id();
    $isFavorited = Fav::where('property_id', $propertyId)->where('user_id', $userId)->exists();
    return response()->json(['isFavorited' => $isFavorited]);
}
}
