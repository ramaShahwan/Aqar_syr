@extends('layouts.master')
@section('content')
<div class="card" style="width: 30rem; margin-left: 30%; margin-top: 140px;">
@if(session()->has('message'))
        <div class="alert alert-info" role="alert" style="text-align:end;font-size: 20px; ">
          {{session()->get('message')}}
        </div>
@endif
<label for="" class="form-label" style="color: blue; font-size: 20px; text-align: center;"> تعديل العقار </label>
<form action="  {{url('property/update',$data->id)}}" method="post" enctype="multipart/form-data">
 @csrf
	<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الاسم</label>
        <input type="text" name="name"  class="form-control" style="background-color: white; color:black; text-align: end;" value="{{$data-> name}}" >
     </div>
     <div class="row mb-3">
                            <label for="estate_image" class="form-label" style="margin-left: 400px;font-size: 20px;">الصورة</label>

                            <div class="col-md-6">
                                <img src="{{URL::asset('/img/estate/'.$data->estate_image)}}" width="200px" style="margin-left: 120px;">
                                <input id="estate_image" type="file" class="form-control " name="estate_image" style="background-color: white; margin-left: 120px;" >


                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="estate_video" class="form-label" style="margin-left: 400px;font-size: 20px;">الفيديو</label>

                            <div class="col-md-6">
                            <video src="{{URL::asset('/img/estate/'.$data->estate_video)}}" width="200px" style="margin-left: 120px;"></video>

                                <input id="estate_video" type="file" class="form-control " name="estate_video" style="background-color: white; margin-left: 120px;" >


                            </div>
                        </div>
                        <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">النوع</label>
        <input type="text" name="type"  class="form-control @error('type') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> type}}" >

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الغاية</label>
        <input type="text" name="purpose"  class="form-control @error('purpose') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> purpose}}" >

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">عدد الغرف</label>
        <input type="number" name="room"  class="form-control @error('room') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> room}}" >

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 360px;font-size: 20px;">عدد الحمامات</label>
        <input type="number" name="bathroom"  class="form-control @error('bathroom') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> bathroom}}"  >

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">السعر</label>
        <input type="text" name="price"  class="form-control @error('price') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  value="{{$data-> price}}">

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">حالة البناء</label>
        <input type="text" name="state"  class="form-control @error('state') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  value="{{$data-> state}}">

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">فضاء البناء</label>
        <input type="text" name="space"  class="form-control @error('space') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  value="{{$data-> space}}">

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الوجهة</label>
        <input type="text" name="direction"  class="form-control @error('direction') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> direction}}" >

    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الرخصة</label>
        <input type="text" name="license"  class="form-control @error('license') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> license}}" >

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الطابق</label>
        <input type="text" name="floor"  class="form-control @error('floor') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> floor}}" >

    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الوصف</label>
        <input type="text" name="description"  class="form-control @error('description') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> description}}" >

    </div>
    <!-- <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 360px;font-size: 20px;">عدد المشاهدات</label>
        <input type="number" name="number_show"  class="form-control @error('number_show') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> number_show}}" >

    </div> -->
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">سعر المتر</label>
        <input type="text" name="meter_price"  class="form-control @error('meter_price') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> meter_price}}" >

    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 360px;font-size: 20px;">عرض الشارع</label>
        <input type="text" name="street_width"  class="form-control @error('street_width') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> street_width}}"  >

    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">اتجاه المنزل</label>
        <input type="text" name="location"  class="form-control @error('location') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> location}}"  >

    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 360px;font-size: 20px;">مميزات العقار </label>
        <input type="text" name="features"  class="form-control @error('features') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> features}}" >

    </div>



<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">المالك</label>
        <select class="form-select" name="owner_id" id="owner_id" aria-label="Default select example" style="background-color: white; color:black; text-align: end;width: 450px;height: 35px;border-color: #ddd7d7;font-size: 20px;" >
        <option selected></option>
        @foreach ($owners as $owner)
  <option value="{{ $owner->id }}" {{$owner ->id == $data-> owner_id ? 'selected' : ''}}>{{ $owner->name }}</option>
  @endforeach


</select>
     </div>






	<button type="submit" class="btn btn-sm btn-primary" style=" background-color:#406a98;margin-left: 20%; margin-bottom: 20px; font-size: 20px;">تعديل عقار</button>
    <a  href="{{url('dashboardd')}}"class="btn btn-light" style=" margin-bottom: 20px; font-size: 20px;color: #918686;">العودة إلى لوحة التحكم </a>


</form>
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {


            $('#city').on('change', function () {
                var cityid = this.value;
                $("#region").html('');
                $.ajax({
                    url: "{{route('getRegion')}}?city_id="+cityid,
                    type: "get",

                    success: function (result) {
                        $('#region').html('<option value="">-- اختر المنطقة --</option>');
                        $.each(result, function (key, value) {
                            $("#region").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#neighborhood').html('<option value="">-- اختر الحي --</option>');
                    }
                });
            });


            $('#region').on('change', function () {
                var regionid = this.value;
                $("#neighborhood").html('');
                $.ajax({
                    url:  "{{route('getneighborhood')}}?region_id="+regionid,
                    type: "get",

                    success: function (res) {
                        $('#neighborhood').html('<option value="">-- اختر الحي --</option>');
                        $.each(res, function (key, value) {
                            $("#neighborhood").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });

        });
    </script> -->



@endsection
