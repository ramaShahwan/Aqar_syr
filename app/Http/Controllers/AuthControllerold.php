<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Admin;
use App\Http\Requests\CreateRegisterRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\CreateLoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    //register
    public function register(CreateRegisterRequest $request)
    {

        $user_login=auth('sanctum')->user();
        $user = new User;
        $validated = $request->validated();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();


        // return response([
        //     'user'=>$user,
        //     'token'=>$user->createToken('secret')->plainTextToken
        // ],200);
        return view("pages.login");
    }

    //login
    public function login(CreateLoginRequest $request)
    {
// Validate fields and get validated data
$attrs = $request->validated();

// Attempt to authenticate using only the validated attributes
if (!Auth::attempt(['email' => $attrs['email'], 'password' => $attrs['password']])) {

   return view('pages.error');
    // return response([
    //     'message' => 'اسم المستخدم أو كلمة المرور غير صحيحة'
    // ], 422);
}

// Get authenticated user
$user = Auth::user();





    return view("admin.dashboard");


    }
public function logout(Request $request)
{
    if ($request->user()) {
        $request->user()->tokens()->delete();
    }

    // return response()->json(['message' => 'تم تسجيل الخروج بنجاح', 'code'=>200]);
    return view("pages.login");

}
 public function change_password(ChangePasswordRequest $request)
    {
        // $user = $request->user();
         $user=auth('sanctum')->user();

        // Verify the current password
        if (!Hash::check($request->current_password, $user->password))
        {
            return response()->json(['error' => 'Current password is incorrect'], 401);
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json(['message' => 'Password changed successfully']);
    }
}
