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
    return view('user.fav',compact('favs'));
  }

  public function setFav($estate_id)
  {
    $user = auth()->user();
    $fav = new Fav;
    $fav->estate_id = $estate_id;
    $fav->user_id = $user->id;
    return redirect()->back();
  }
}
