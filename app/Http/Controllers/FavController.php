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

  public function setFav($id)
  {
    $user = auth()->user();
    $favs = Fav::all();
    foreach($favs as $fav)
    {
   if( $fav->property_id == $id && $fav->user_id == $user->id)
   {
    $fav->delete();
    return redirect()->back();
   }
    }

    $fav = new Fav;

    $fav->property_id = $id;
    $fav->user_id = $user->id;
    $fav->save();
    return redirect()->back();
  }
}
