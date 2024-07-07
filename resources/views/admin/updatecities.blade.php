@extends('layouts.master')
@section('content')
<div class="card" style="width: 30rem; margin-left: 30%; margin-top: 140px;">
@if(session()->has('message'))
        <div class="alert alert-info" role="alert" style="text-align:end;font-size: 20px; ">
          {{session()->get('message')}}
        </div>
@endif

<label for="" class="form-label" style="color: blue; font-size: 20px; text-align: center;">تعديل المدينة</label>

<form action=" {{url('city/update',$data->id)}}" method="post" enctype="multipart/form-data">

 @csrf

	<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الاسم</label>
        <input type="text" name="name"  class="form-control" style="background-color: white; color:black; text-align: end;" value="{{$data-> name}}">
     </div>




     <div class="row mb-3">
                            <label for="image" class="form-label" style="margin-left: 400px;font-size: 20px;">الصورة</label>

                            <div class="col-md-6">
                            <img src="{{ $data->image->original_url }}" width="200px" style="margin-left: 120px;">
                                <input id="image" type="file" class="form-control " name="image" style="background-color: white; margin-left: 120px;" >


                            </div>
                        </div>

	<button type="submit" class="btn btn-sm btn-primary" style=" background-color:#406a98;margin-left: 20%; margin-bottom: 20px; font-size: 20px;">تعديل المدينة</button>
                  <a  href="{{url('dashboardd')}}"class="btn btn-light" style=" margin-bottom: 20px; font-size: 20px;color: #918686;">العودة إلى لوحة التحكم </a>

</form>
</div>
@endsection
