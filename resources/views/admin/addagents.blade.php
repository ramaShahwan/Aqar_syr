@extends('layouts.master')
@section('content')
<div class="card" style="width: 30rem; margin-left: 30%; margin-top: 140px;">
@if(session()->has('message'))
        <div class="alert alert-info" role="alert" style="text-align:end;font-size: 20px; ">
          {{session()->get('message')}}
        </div>
@endif
<label for="" class="form-label" style="color: blue; font-size: 20px; text-align: center;"> وكيل عقاري جديد</label>
<form action="{{url('store')}}" method="post" enctype="multipart/form-data">
 @csrf
	<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="    margin-left: 400px;font-size: 20px;">الاسم</label>
        <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" >
        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>
     <div class="row mb-3">
                            <label for="image" class="form-label" style="    margin-left: 400px;font-size: 20px;">الصورة</label>

                            <div class="col-md-6">
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image"  style="background-color: white; margin-left: 120px;" >
                            @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>
                        </div>
     <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="    margin-left: 340px;font-size: 20px;">الهاتف الارضي</label>
        <input type="text" name="phone"  class="form-control @error('phone') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" >
        @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>
     <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="    margin-left: 340px;font-size: 20px;">البريد الالكتروني </label>
        <input type="email" name="email"  class="form-control @error('email') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" >
        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>
     <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="    margin-left: 400px;font-size: 20px;">الموبايل  </label>
        <input type="text" name="mobile"  class="form-control @error('mobile') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" >
        @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>
     <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="    margin-left: 340px;font-size: 20px;">العنوان بالتفصيل  </label>
        <input type="text" name="address"  class="form-control @error('address') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" >
        @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="    margin-left: 400px;font-size: 20px;">المدينة</label>
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



	<button type="submit" class="btn btn-sm btn-primary" style=" background-color:#406a98;margin-left: 20%; margin-bottom: 20px; font-size: 20px;">إضافة وكيل عقاري</button>
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
