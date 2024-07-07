@extends('layouts.app')
@section('content')
<style>
    .citie{

background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url(../images/property_6.jpg);
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;

    }
</style>
<div class="d-md-flex half " id="app" style="display: flex;margin-left: 50px;">
    <div class="bg" >
    <img src="images/woman-sitting-at-desk-and-typing-on-laptop-free-photo.webp" alt="" style="width: 700px;
    height: 500px;
    margin-top: 60px;
    "/></div>
      <div class="contents">
          <div class="container">
             <div class="row align-items-center justify-content-center" style="
            margin-top: 60px;
            margin-left: 100px;
            background-color: #f8f8f8;
            border-radius: 10px;
            width: 400px;
            height: 500px;
          ">

           <div class="col-md-12">
            <div style="max-width:400px" class="form-block mx-auto">
            <div class="text-center mb-2">
            <h3 style="color: var(--navi); margin-left: 10px;
    padding-top: 20px;">
                  Login
                </h3>
              </div>
                    <hr>
                    <form method="POST" action="{{ url('auth/login') }}" >
                     @csrf

                        <div class="form-group  first mb-3">
                            <label for="email">{{ __('email') }}</label>


                                <input id="email" type="email" placeholder="email" class="form-control " name="email" value="" required   style="background-color: #cdeef5">



                        </div>

                        <div class="form-group last mb-3">
                            <label for="password">{{ __('Password') }}</label>


                                <input id="password" type="password" placeholder="Your Password" class="form-control " name="password" required  style="background-color: #cdeef5">



                        </div>

                        <div class="d-sm-flex mb-5 align-items-center" style="justify-content:space-between;">


                        <input class="form-check-input" type="checkbox" name="remember" id="remember" style="background-color: var(--bs-gray-500)">
                                    <label class="control control--checkbox mb-3 mb-sm-0" for="remember" style="margin-right: 140px; font-size: 16px">
                                        {{ __('Remember Me') }}

                                    <div class="control__indicator"></div>

                                    </label>



                                    <span class="ml-auto">
                                        <a class="forgot-pass" href="#" style="color: #888e93; font-size: 14px">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                    </span>


                        </div>


                                <button type="submit" class="btn btn-block text-light w-100 " style="  background-color: #507cc7;">
                                    {{ __('Login') }}
                                </button>
                                <span class="d-flex justify-content-center mt-3">
                                        <!-- <a class="forgot-pass " href="{{ url('register') }}"  style="color: #888e93; font-size: 14px; margin-right: 30px">
                                        {{ __('Not Register yet ? ') }}
                                    </a> -->
                                    <a class="forgot-pass "  href="{{ route('home') }}" style="color: #888e93; font-size: 14px;margin-left: 10px;">
                                        {{ __('back to home ') }}
                                    </a>
                                    </span>


                    </form>

            </div>
         </div>
        </div>
     </div>
   </div>
</div>
@endsection



