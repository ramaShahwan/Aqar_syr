@extends('layouts.master')
@section('content')
<div class="card" style="width: 30rem; margin-left: 30%; margin-top: 140px;">
@if(session()->has('message'))
        <div class="alert alert-info" role="alert" style="text-align:end;font-size: 20px; ">
          {{session()->get('message')}}
        </div>
@endif
<label for="" class="form-label" style="color: blue; font-size: 20px; text-align: center;"> عقار جديد</label>
<form action="{{url('property/store')}}" method="post" enctype="multipart/form-data">
 @csrf
	<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الاسم</label>
        <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" >
        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>
     <div class="row mb-3">
                            <label for="estate_image" class="form-label" style="margin-left: 400px;font-size: 20px;">الصورة</label>

                            <div class="col-md-6">
                            <input id="estate_image" type="file" class="form-control @error('estate_image') is-invalid @enderror" name="estate_image"  style="background-color: white; margin-left: 120px;" >
                            @error('estate_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="estate_video" class="form-label" style="margin-left: 400px;font-size: 20px;">الفيديو</label>

                            <div class="col-md-6">
                            <input id="estate_video" type="file" class="form-control @error('estate_video') is-invalid @enderror " name="estate_video"  style="background-color: white; margin-left: 120px;" >
                            @error('estate_video')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>
                        </div>

                        <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">النوع</label>
        <input type="text" name="type"  class="form-control @error('type') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الغاية</label>
        <input type="text" name="purpose"  class="form-control @error('purpose') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('purpose')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">عدد الغرف</label>
        <input type="number" name="room"  class="form-control @error('room') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('room')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 360px;font-size: 20px;">عدد الحمامات</label>
        <input type="number" name="bathroom"  class="form-control @error('bathroom') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('bathroom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">السعر</label>
        <input type="text" name="price"  class="form-control @error('price') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">حالة البناء</label>
        <input type="text" name="state"  class="form-control @error('state') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">مساحة البناء</label>
        <input type="text" name="space"  class="form-control @error('space') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('space')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الوجهة</label>
        <input type="text" name="direction"  class="form-control @error('direction') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('direction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الرخصة</label>
        <input type="text" name="license"  class="form-control @error('license') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('license')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الطابق</label>
        <input type="text" name="floor"  class="form-control @error('floor') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('floor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الوصف</label>
        <input type="text" name="description"  class="form-control @error('description') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
    <!-- <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 360px;font-size: 20px;">عدد المشاهدات</label>
        <input type="number" name="number_show"  class="form-control @error('number_show') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >

    </div> -->
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">سعر المتر</label>
        <input type="text" name="meter_price"  class="form-control @error('meter_price') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('meter_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 360px;font-size: 20px;">عرض الشارع</label>
        <input type="text" name="street_width"  class="form-control @error('street_width') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('street_width')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">اتجاه المنزل</label>
        <input type="text" name="location"  class="form-control @error('location') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 360px;font-size: 20px;">مميزات العقار </label>
        <input type="text" name="features"  class="form-control @error('features') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
        @error('features')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

    </div>


<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">المدينة</label>
        <select class="form-select @error('city_id') is-invalid @enderror" name="city_id" id="city" aria-label="Default select example" style="background-color: white; color:black; text-align: end;width: 450px;height: 35px;border-color: #ddd7d7;font-size: 20px;" >
        <option selected></option>
        @foreach ($cities as $city)
  <option value="{{ $city->id }}">{{ $city->name }}</option>
  @endforeach
</select>
                               @error('city_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>
                     <div class="form-group mb-3" style="margin-left: 10px; margin-right: 10px;">
                     <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">المنطقة</label>
                        <select id="region" name="region_id" class="form-control @error('region_id') is-invalid @enderror" style="background-color: white; color:black; text-align: end;width: 450px;height: 35px;border-color: #ddd7d7;font-size: 20px;">
                        <option value="">-- اختر المنطقة --</option>
                        </select>
                        @error('region_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                    <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الحي</label>
                        <select id="neighborhood" name="neighborhood_id" class="form-control @error('neighborhood_id') is-invalid @enderror" style="background-color: white; color:black; text-align: end;width: 450px;height: 35px;border-color: #ddd7d7;font-size: 20px;">
                        <option value="">-- اختر الحي --</option>
                        </select>
                        @error('neighborhood_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>














<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">المالك</label>
        <select class="form-select @error('owner_id') is-invalid @enderror" name="owner_id" id="owner_id" aria-label="Default select example" style="background-color: white; color:black; text-align: end;width: 450px;height: 35px;border-color: #ddd7d7;font-size: 20px;" >
        <option selected></option>



        @foreach ($owners as $owner)
  <option value="{{ $owner->id }}">{{ $owner->name }}</option>
  @endforeach



</select>
@error('owner_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>






	<button type="submit" class="btn btn-sm btn-primary" style=" background-color:#406a98;margin-left: 20%; margin-bottom: 20px; font-size: 20px;">إضافة عقار</button>
    <a  href="{{url('dashboardd')}}"class="btn btn-light" style=" margin-bottom: 20px; font-size: 20px;color: #918686;">العودة إلى لوحة التحكم </a>


</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#city').on('change', function () {
                var cityid = this.value;
                $("#region").html('');
                $.ajax({
                    url: "{{route('getRegion')}}?city_id="+cityid,
                    type: "get",
                    // data: {
                    //     country_id: idCountry,
                    //     _token: '{{csrf_token()}}'
                    // },
                    // dataType: 'json',
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

            /*------------------------------------------
            --------------------------------------------
            State Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#region').on('change', function () {
                var regionid = this.value;
                $("#neighborhood").html('');
                $.ajax({
                    url:  "{{route('getneighborhood')}}?region_id="+regionid,
                    type: "get",
                    // data: {
                    //     state_id: idState,
                    //     _token: '{{csrf_token()}}'
                    // },
                    // dataType: 'json',
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
    </script>
<!-- <script src="cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<script type="text/javascript">

    $(document).ready(function () {
        $('#city_dd').change(function (event) {
            var idCity=this.value;
            $('#region_dd').html('');
            jQuery.ajax({
                url:'/getregion/region',
                type:'POST',
                dataType:'json',
                data:{city_id:idCity,_token:"{{csrf_token()}}"},
                success:function(response){
                    $('#region_dd').html('<option value="">اختر منطقة </option>');
                    $each(response.regions,function(index,val){
                        $('#region_dd').append('<option value="'+val.id+'">'+val.name+'</option>')
                    });
                    $('#neighborhood_dd').html('<option value="">اختر حي </option>');
                }
            });
        });
    });



</script> -->
@endsection
