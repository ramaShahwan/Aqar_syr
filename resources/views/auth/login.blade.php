@extends('layout.app')
@section('content')
<style>
    .citie{

background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url(../images/property_6.jpg);
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;

    }
    .logre{
        display: flex;
        /* margin-left: 200px; */

    }
    .imgre{
        width: 700px;
    height: 500px;
    margin-top: 60px;

    }
    .llogre{
        margin-top: 60px;
            margin-left: 100px;
            background-color: #f8f8f8;
            border-radius: 10px;
            width: 400px;
            height: 500px;
    }
    @media screen and (max-width: 770px ){
            .logre{
                display: block;
                margin-left: 0px;
            }
            .imgre{
        width: 410px;
        height: 400px;
        margin-top: 60px;

    }
    .llogre{

            margin-left: 0px;


    }


    }
    @media screen and (max-width: 398px ){
        .logre{
                display: block;
                margin-left: 0px;
            }
            .imgre{
        width: 410px;
        height: 400px;
        margin-top: 60px;

    }
    .llogre{

            margin-left: 0px;


    }


    }
    @media screen and (max-width: 846px ){
        .logre{
                display: block;
                margin-left: 0px;
            }
            .imgre{
        width: 410px;
        height: 400px;
        margin-top: 60px;

    }
    .llogre{

            margin-left: 0px;


    }

    }
    @media screen and (max-width: 1145px){
        .logre{
                display: block;
                margin-left: 0px;
            }
            .imgre{
        width: 410px;
        height: 400px;
        margin-top: 60px;

    }
    .llogre{

            margin-left: 0px;


    }

    }
</style>
<div class="d-md-flex half  logre" id="app" style="">
    <div class="bg" >
    <img src="images/woman-sitting-at-desk-and-typing-on-laptop-free-photo.webp" alt="" style="" class="imgre"/></div>
      <div class="contents">
          <div class="container">
             <div class="row align-items-center justify-content-center llogre" style="

          ">

           <div class="col-md-12">
            <div style="max-width:400px" class="form-block mx-auto">
            <div class="text-center mb-2">
            <h3 style="color: var(--navi); margin-left: 10px;
    padding-top: 20px;">
                  تسجيل دخول
                </h3>
              </div>
                    <hr>
                    <form method="POST" action="{{ route('login') }}">
                     @csrf

                        <div class="form-group  first mb-3" style="text-align: end;">
                            <label for="phone" >{{ __('رقم الموبايل') }}</label>


                                <input id="phone" type="text" style="text-align: end;" placeholder="ادخل رقم هاتفك" class="form-control " name="phone" value="" required   style="background-color: #cdeef5">
                        </div>

                        <div class="form-group last mb-3" style="text-align: end;">
                            <label for="password" >{{ __('كلمة المرور') }}</label>


                                <input id="password" type="password" style="text-align: end;" placeholder="ادخل كلمة السر" class="form-control " name="password" required  style="background-color: #cdeef5">



                        </div>

                        <!-- <div class=" mb-5 " style="text-align:end;">

                                    <span class="ml-auto">
                                        <a class="forgot-pass" href="#" style="color: #888e93; font-size: 14px">
                                        {{ __('تغيير كلمة السر؟') }}
                                    </a>
                                    </span>
                        </div> -->
                        <div class="flex items-center justify-end mt-4" style="float: right;">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('تغيير كلمة السر؟') }}
                </a>
            @endif

            <!-- <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button> -->
        </div>


                                <button type="submit" class="btn btn-block text-light w-100 " style="  background-color: #507cc7;">
                                    {{ __('تسجيل دخول') }}
                                </button>
                                <span class="d-flex justify-content-center mt-3">
                                        <a class="forgot-pass " href="{{ url('register') }}"  style="color: #888e93; font-size: 14px; margin-right: 30px">
                                        {{ __('إنشاء حساب ؟') }}
                                    </a>
                                    <a class="forgot-pass "  href="{{ route('home') }}" style="color: #888e93; font-size: 14px;margin-left: 10px;">
                                        {{ __('العودة إلى الرئيسية ') }}
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



