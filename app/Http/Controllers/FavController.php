<?php

namespace App\Http\Controllers;

use App\Models\Fav;
use Illuminate\Http\Request;

class FavController extends Controller
{
  public function getFav($user_id)
  {
    $favs = Fav::where('user_id',$user_id)->get();
    return view('user.fav',compact('favs'));
  }

  public function setFav($user_id)
  {
    $fav = new Fav;
    $fav->name = $request->name;
    $favs = Fav::where('user_id',$user_id)->get();
    return view('user.fav',compact('favs'));
  }
}
