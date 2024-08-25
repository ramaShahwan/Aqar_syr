<style>
    .imgre {
        width: 400px;
        height: 500px;
        margin-left: 110px;
    }
    .re {
        display: flex;
        margin-top: 100px;
    }
    .btnre {
        margin-left: -350px;
    }
    .regre {
        margin-top: 60px;
        margin-left: 100px !important;
        background-color: white;
        border-radius: 10px;
        height: 500px;
    }
    .mm{
        margin-left: 420px;
    }
    .inn{
        display:block;

    }
    .textin{
        margin-left: 480px !important;
    }
    .textinn{
        margin-left: 450px !important;
    }
    @media screen and (max-width: 1145px) {
        .re {
            display: block;
            margin-left: 0px;
        }
        .btnre {
            margin-left: 120px !important;
        }
        .regre {
            width: 100%;
            margin-left: 0px !important;
            margin-top: 60px;
        }
        .imgre {
            width: 100%;
            height: auto;
            margin-top: -90px;
            margin-left: 0px;
            margin-bottom: 30px;
        }
        .mm{
            margin-left: 100px;
        }
        .inn{
        display:block;

    }
    .textin{
        margin-left: 250px !important;
    }
    }
    @media screen and (max-width: 846px) {
        .re {
            display: block;
            margin-left: 0px;
        }
        .btnre {
            margin-left: 120px !important;
        }
        .regre {
            width: 100%;
            margin-left: 0px;
            margin-top: 60px;
        }
        .imgre {
            width: 100%;
            height: auto;
            margin-top: 90px;
            margin-left: 0px;
            margin-bottom: 30px;
        }
        .mm{
            margin-left: 120px;
        }
        .inn{
        display:block;

    }
    .textin{
        margin-left: 250px !important;
    }
    }
    @media screen and (max-width: 770px) {
        .re {
            display: block;
            margin-left: 0px !important;
        }
        .btnre {
            margin-left: 120px !important;
        }
        .regre {
            width: 100%;
            margin-left: 0px !important;
            margin-top: 60px;
        }
        .imgre {
            width: 100%;
            height: auto;
            margin-top: 90px;
            margin-left: 0px;
            margin-bottom: 30px;
        }
        .mm{
            margin-left: 120px;
        }
        .inn{
        display:block;

    }
    .textin{
        margin-left: 250px !important;
    }
    .textinn{
        margin-left: 250px !important;
    }
    }
    @media screen and (max-width: 398px) {
        .re {
            display: block;
            margin-left: 0px;
        }
        .btnre {
            margin-left: 0px;
        }
        .regre {
            width: 100%;
            margin-left: 90px;
            margin-top: 60px;
        }
        .imgre {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-left: 0px;
            margin-bottom: 30px;
        }
        .mm{
            margin-left: 120px;
        }
        .inn{
        display:block;

    }
    .textin{
        margin-left: 250px !important;
    }
    .textinn{
        margin-left: 220px !important;
    }
    }
</style>

@extends('layout.app')
@section('content')

<div class="half re">
    <div class="bg">
        <img src="images/woman-sitting-at-desk-and-typing-on-laptop-free-photo.webp" alt="" class="imgre"/>
    </div>
    <div class="contents">
        <div class="container">
            <div class="row align-items-center justify-content-center regre">
                <div style="width: 600px;" class="form-block mx-auto">
                    <div class="text-left mb-1 d-flex" style="align-items: baseline; justify-content: space-between;">
                        <h3 style="color: var(--navi); " class="mm"> انشاء الحساب </h3>
                        <a href="#" style="margin-right: 30px;"> <i class="fas fa-home homeicon"></i> </a>
                    </div>
                    <hr>
                    <div class="col-md-12">
                    <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="d-flex justify-content-center mb-2">
                                <span style="color: #dc3545; font-size: .875em; text-align: center;"></span>
                            </div>
                            <div class="form-group  mb-3 first align-items-center inn">
                            <label for="user_name" style="" class="col-md-4 col-form-label text-md-start register-att textinn">{{ __('اسم المستخدم') }}</label>

                                <div class="d-flex w-100" style="flex-direction: column;">
                                    <input id="name" placeholder="اسم المستخدم" type="text" class="form-control" name="name" required autocomplete="name" style="background-color: var(--bs-secondary-bg); text-align: end;">
                                </div>
                            </div>
                            <div class="form-group mb-3 inn align-items-center">
                            <label for="phone" style="" class="col-md-4 col-form-label text-md-start register-att textin">{{ __('رقم الموبايل') }}</label>

                                <div class="d-flex w-100" style="flex-direction: column;">
                                    <input id="phone" placeholder="ادخل رقم هاتفك" type="text" class="form-control" name="phone" required autocomplete="phone" style="background-color: var(--bs-secondary-bg); text-align: end;">
                                </div>
                            </div>
                            <div class="form-group mb-3 inn align-items-center">
                            <label for="password" style="" class="col-md-4 col-form-label text-md-start register-att textin">{{ __('كلمة المرور') }}</label>

                                <div class="d-flex w-100" style="flex-direction: column;">
                                    <input id="password" placeholder="كلمة المرور" type="password" class="form-control" name="password" required autocomplete="new-password" style="background-color: var(--bs-secondary-bg); text-align: end;">
                                </div>
                            </div>
                            <div class="form-group mb-3 last inn align-items-center">
                            <label for="password-confirm" style="" class="col-md-4 col-form-label text-md-start register-att textinn">{{ __('تأكيد كلمة المرور') }}</label>

                                <input id="password-confirm" type="password" placeholder="تأكيد كلمة المرور" class="form-control" name="password_confirmation" required autocomplete="new-password" style="background-color: var(--bs-secondary-bg); text-align: end;">
                            </div>
                            <div class="row mb-0 mt-3 justify-content-center">
                                <div class="col-md-6 offset-md-10">
                                    <button type="submit" class="btn btn-block text-light btnre" style="background-color: #507cc7; width: 100px; height: 40px; margin-top: 0px;">
                                        {{ __('إنشاء') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
