@extends('layouts.master')
@section('content')
<div class="card" style="width: 30rem; margin-left: 30%; margin-top: 140px;">
@if(session()->has('message'))
        <div class="alert alert-info" role="alert" style="text-align:end;font-size: 20px; ">
          {{session()->get('message')}}
        </div>
@endif

<label for="" class="form-label" style="color: blue; font-size: 20px; text-align: center;">تعديل الحي</label>

<form action="  {{url('neighborhood/update',$data->id)}}"  method="post" enctype="multipart/form-data">

 @csrf

	<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الاسم</label>
        <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> name}}">
        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>




     <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">المنطقة</label>
        <select class="form-select @error('region_id') is-invalid @enderror" name="region_id" id="region_id" aria-label="Default select example" style="background-color: white; color:black; text-align: end; width: 450px;
    height: 30px;
    border-color: #c3c8cd;" value="">
        <option selected></option>



        @foreach ($regions as $region)
  <option value="{{ $region->id }}" {{$region ->id == $data-> region_id ? 'selected' : ''}}>{{ $region->name }}</option>
  @endforeach



</select>
@error('region_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>

	<button type="submit" class="btn btn-sm btn-primary" style=" background-color:#406a98;margin-left: 20%; margin-bottom: 20px; font-size: 20px;">تعديل الحي</button>
                  <a  href="{{url('dashboardd')}}"class="btn btn-light" style=" margin-bottom: 20px; font-size: 20px;color: #918686;">العودة إلى لوحة التحكم </a>

</form>
</div>
@endsection
