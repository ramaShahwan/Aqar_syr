@extends('layouts.master')
@section('content')
<div class="card" style="width: 30rem; margin-left: 30%; margin-top: 120px;">
@if(session()->has('message'))
        <div class="alert alert-info" role="alert" style="text-align:end;font-size: 20px; ">
          {{session()->get('message')}}
        </div>
@endif
<label for="" class="form-label" style="color: blue; font-size: 20px; text-align: center;">  تعديل المستخدم</label>
<form action="{{url('user/update',$data->id)}}" method="POST" enctype="multipart/form-data">
 @csrf
	<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الاسم</label>
        <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data->name}}"  >
        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>




    <!-- <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 350px;font-size: 20px;">البريد الالكتروني</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" style="background-color: white; color:black; text-align: end;" value="{{$data->email}}" >
                             @error('email')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div> -->
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الهاتف </label>
        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"   autocomplete="phone" style="background-color: white; color:black; text-align: end;" value="{{$data->phone}}" >
                             @error('phone')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الصلاحية</label>
        <select class="form-select @error('role') is-invalid @enderror addwa addwac" name="role" id="role" aria-label="Default select example" style="background-color: white; color:black; text-align: end;border-color: #ddd7d7;font-size: 20px;" >
        <option selected>{{$data->role}}</option>
        <option value="admin">admin</option>
        <option value="user">user</option>


</select>
                               @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>

	<button type="submit" class="btn btn-sm btn-primary" style=" background-color:#406a98;margin-left: 20%; margin-bottom: 20px; font-size: 20px;">تعديل المستخدم</button>
    <a  href="{{url('dashboardd')}}"class="btn btn-light" style=" margin-bottom: 20px; font-size: 20px;color: #918686;">العودة إلى لوحة التحكم </a>

</form>
</div>
@endsection
