
@extends('layouts.app')
@section('content')

<div class="d-md-flex half" style="display: flex;">
<div class="bg">
<img src="images/صور-برج-خليفة-hd-18.jpg" alt="" style="width: 400px;
    height: 500px;
    margin-top: 60px;
    margin-left: 110px;"/></div>
    <div class="contents">
        <div class="container">
            <div class="row align-items-center justify-content-center"  style="
            margin-top: 60px;
            margin-left: 100px;
            background-color: white;
            border-radius: 10px;
            height: 500px;

          ">
            <div style="width:600px;" class="form-block mx-auto">

            <div class="text-left mb-1 d-flex" style="align-items: baseline; justify-content: space-between;">
              <h3 style="color:var(--navi);margin-left: 420px;"> انشاء الحساب </h3>
              <a href="#" style="margin-right: 30px;"> <i class="fas fa-home homeicon"></i> </a>
              </div>
              <hr>
                <div class="col-md-12">
                    <form  method="POST" action="{{ url('auth/register') }}" >
                    @csrf


                        <div class="d-flex justify-content-center mb-2">
                            <span style="color: #dc3545;font-size: .875em; text-align: center;"></span>

                        </div>
                        <div class="form-group d-flex mb-3 first align-items-center">


                            <div class="d-flex  w-100" style="flex-direction: column;">
                                <input id="name" placeholder="اسم المستخدم" type="text" class="form-control " name="name" value="" required autocomplete="name"  style="background-color: var(--bs-secondary-bg); text-align: end;">


                            </div>
                            <label for="user_name"   class="col-md-4 col-form-label text-md-start register-att">{{ __('اسم المستخدم') }}</label>
                        </div>

                        <div class="form-group mb-3 d-flex align-items-center">


                            <div class="d-flex w-100" style="flex-direction: column;" >
                                <input id="email" placeholder="البريد الالكتروني" type="email" class="form-control " name="email" value="" required autocomplete="email"  style="background-color: var(--bs-secondary-bg);text-align: end;">


                            </div>
                            <label for="email" class="col-md-4 col-form-label text-md-start  register-att">{{ __('البريد الالكتروني') }}</label>


                        </div>

                        <div class="form-group mb-3 d-flex align-items-center">


                            <div class="d-flex w-100" style="flex-direction: column;" >
                                <input id="password" placeholder="كلمة المرور" type="password" class="form-control " name="password" required autocomplete="new-password"  style="background-color: var(--bs-secondary-bg);text-align: end;">


                            </div>
                            <label for="password"   class="col-md-4 col-form-label text-md-start  register-att">{{ __('كلمة المرور') }}</label>
                        </div>



                        <div class="form-group  mb-3 last d-flex align-items-center">


                                <input id="password-confirm" type="password" placeholder="تأكيد كلمة المرور" class="form-control" name="password_confirmation" required autocomplete="new-password"  style="background-color: var(--bs-secondary-bg);text-align: end;">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-start  register-att">{{ __(' تأكيد كلمة المرور') }}</label>
                        </div>

                        <!-- {{-- <div class="form-group mb-3 d-flex align-items-center">
                            <label class="col-md-4 col-form-label text-md-start">{{ __('Image') }}</label>
                            <div class="d-flex w-100" style="flex-direction: column;" >
                                <input style="padding-top:15px; padding-left:12.5%;"  type="file" class="form-control" name="image" >

                            </div>
                        </div> --}} -->

                        <div class="row mb-0 mt-3 justify-content-center">
                            <div class="col-md-6 offset-md-10">
                                <button type="submit" class="btn btn-block text-light" style=" background-color: #507cc7; width: 100px; height: 40px; margin-top: 30px; margin-left: -350px">
                                    {{ __('إنشاء') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

    </div></div>


</div>




@endsection
