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
    @media screen and (max-width: 1145px) {
        .re {
            display: block;
            margin-left: 0px;
        }
        .btnre {
            margin-left: 0px;
        }
        .regre {
            width: 100%;
            margin-left: 0px !important;
            margin-top: 60px;
        }
        .imgre {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-left: 0px;
            margin-bottom: 30px;
        }
    }
    @media screen and (max-width: 846px) {
        .re {
            display: block;
            margin-left: 0px;
        }
        .btnre {
            margin-left: 0px;
        }
        .regre {
            width: 100%;
            margin-left: 0px;
            margin-top: 60px;
        }
        .imgre {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-left: 0px;
            margin-bottom: 30px;
        }
    }
    @media screen and (max-width: 770px) {
        .re {
            display: block;
            margin-left: 0px !important;
        }
        .btnre {
            margin-left: 0px;
        }
        .regre {
            width: 100%;
            margin-left: 0px !important;
            margin-top: 60px;
        }
        .imgre {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-left: 0px;
            margin-bottom: 30px;
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
            margin-left: 0px;
            margin-top: 60px;
        }
        .imgre {
            width: 100%;
            height: auto;
            margin-top: 0px;
            margin-left: 0px;
            margin-bottom: 30px;
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
                        <h3 style="color: var(--navi); margin-left: 420px;"> انشاء الحساب </h3>
                        <a href="#" style="margin-right: 30px;"> <i class="fas fa-home homeicon"></i> </a>
                    </div>
                    <hr>
                    <div class="col-md-12">
                    <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="d-flex justify-content-center mb-2">
                                <span style="color: #dc3545; font-size: .875em; text-align: center;"></span>
                            </div>
                            <div class="form-group d-flex mb-3 first align-items-center">
                                <div class="d-flex w-100" style="flex-direction: column;">
                                    <input id="name" placeholder="اسم المستخدم" type="text" class="form-control" name="name" required autocomplete="name" style="background-color: var(--bs-secondary-bg); text-align: end;">
                                </div>
                                <label for="user_name" style="text-align: end;" class="col-md-4 col-form-label text-md-start register-att">{{ __('اسم المستخدم') }}</label>
                            </div>
                            <div class="form-group mb-3 d-flex align-items-center">
                                <div class="d-flex w-100" style="flex-direction: column;">
                                    <input id="phone" placeholder="ادخل رقم هاتفك" type="text" class="form-control" name="phone" required autocomplete="phone" style="background-color: var(--bs-secondary-bg); text-align: end;">
                                </div>
                                <label for="phone" style="text-align: end;" class="col-md-4 col-form-label text-md-start register-att">{{ __('رقم الموبايل') }}</label>
                            </div>
                            <div class="form-group mb-3 d-flex align-items-center">
                                <div class="d-flex w-100" style="flex-direction: column;">
                                    <input id="password" placeholder="كلمة المرور" type="password" class="form-control" name="password" required autocomplete="new-password" style="background-color: var(--bs-secondary-bg); text-align: end;">
                                </div>
                                <label for="password" style="text-align: end;" class="col-md-4 col-form-label text-md-start register-att">{{ __('كلمة المرور') }}</label>
                            </div>
                            <div class="form-group mb-3 last d-flex align-items-center">
                                <input id="password-confirm" type="password" placeholder="تأكيد كلمة المرور" class="form-control" name="password_confirmation" required autocomplete="new-password" style="background-color: var(--bs-secondary-bg); text-align: end;">
                                <label for="password-confirm" style="text-align: end;" class="col-md-4 col-form-label text-md-start register-att">{{ __('تأكيد كلمة المرور') }}</label>
                            </div>
                            <div class="row mb-0 mt-3 justify-content-center">
                                <div class="col-md-6 offset-md-10">
                                    <button type="submit" class="btn btn-block text-light btnre" style="background-color: #507cc7; width: 100px; height: 40px; margin-top: 30px;">
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
