<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;
use App\Models\Temp;

use Illuminate\Support\Facades\File; 

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $usrs = User::all();
         // $search=$request->search;
         // $users = User::when($search, function ($query, $search)
         // {$query->where('name','like','%'.$search.'%')
         // ->where('email','like','%'.$search.'%')
         // ->where('phone','like','%'.$search.'%');
         // })->get();
        return view('admin.user',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.adduser',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'name' => 'required',
            'phone' => ['required',' min:10 ','max:14', 'unique:'.User::class],
            'role'=>'required',
            'password'=>'required',
          ]);
        $user = new User;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect()->back()->with('message','تم الإضافة');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
              $users = User::whereId($id)->get();
        //      $users->transform(function ($user) {
        //     $user->unsetRelation('media');
        //     return $user;
        // });
        // return response([
        //     'user'=>$users[0],
        // ],200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $user_id)
    {
         $data = User::findOrFail($user_id);
        return view('admin.updateuser', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => ['required',' min:10 ','max:14'],
            'password'=>'required',
            'role'=>'required',
          ]);
        
               $user = User::findOrFail($request->id);
                $user->name = $request->name;
                $user->password = $request->password;
                $user->phone = $request->phone;
                $user->role = $request->role;
                $user->update();
                return redirect()->back()->with('message','تم التعديل');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $properties = Property::where('user_id',$id)->get();
        foreach($properties as $property)
        {
        $oldImageEstateName =$property->estate_image;
          $oldVideoEstateName =$property->estate_video;
          if ($oldImageEstateName) {
            File::delete(public_path('img/estate/') . $oldImageEstateName);
           }
           if ($oldVideoEstateName) {
            File::delete(public_path('img/estate/') . $oldVideoEstateName);
           }
          $property->delete();
        }


        $temps = Temp::where('user_id',$id)->get();
        foreach($temps as $temp)
        {
        $oldImageEstateName =$temp->estate_image;
          $oldVideoEstateName =$temp->estate_video;
          if ($oldImageEstateName) {
            File::delete(public_path('img/temp/') . $oldImageEstateName);
           }
           if ($oldVideoEstateName) {
            File::delete(public_path('img/temp/') . $oldVideoEstateName);
           }
          $temp->delete();
        }

         User::findOrFail($id)->delete();
        return redirect()->back();
    }
}
