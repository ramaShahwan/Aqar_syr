@extends('layouts.master')
@section('content')
<div class="card" style="width: 30rem; margin-left: 30%; margin-top: 140px;">
@if(session()->has('message'))
        <div class="alert alert-info" role="alert" style="text-align:end;font-size: 20px; ">
          {{session()->get('message')}}
        </div>
@endif
<label for="" class="form-label" style="color: blue; font-size: 20px; text-align: center;"> تعديل العقار </label>
<form action="  {{url('updatePend',$data->id)}}" method="post" enctype="multipart/form-data">
 @csrf

     <div class="row mb-3">
                            <label for="estate_image" class="form-label" style="margin-left: 400px;font-size: 20px;">الصورة</label>

                            <div class="col-md-6">
                                <img src="{{URL::asset('/img/temp/'.$data->estate_image)}}" width="200px" style="margin-left: 120px;">
                                <input id="estate_image" type="file" class="form-control @error('estate_image') is-invalid @enderror" name="estate_image" style="background-color: white; margin-left: 120px;" >
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
                            <video src="{{URL::asset('/img/temp/'.$data->estate_video)}}" width="200px" style="margin-left: 120px;"  controls muted ></video>

                                <input id="estate_video" type="file" class="form-control @error('estate_video') is-invalid @enderror" name="estate_video" style="background-color: white; margin-left: 120px;" >
                                @error('estate_video')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>
                        </div>
                        <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">النوع</label>
        <input type="text" name="type"  class="form-control @error('type') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> type}}" >
        @error('type')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الغاية</label>
        <input type="text" name="purpose"  class="form-control @error('purpose') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> purpose}}" >
        @error('purpose')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <fieldset class="row mb-3" style="margin-left: 30px;">
    <legend class="col-form-label col-sm-2 pt-0" style="text-align: right; max-width: 100%;">البناء مفحوص</legend>
    <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="building_rank" id="gridRadios1" value="0" {{ old('building_rank', $data-> building_rank ) == 0 ? 'checked' : '' }}>
            <label class="form-check-label" for="gridRadios1">
                نعم
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="building_rank" id="gridRadios2" value="1" {{ old('building_rank', $data-> building_rank ) == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="gridRadios2">
                لا
            </label>
        </div>
    </div>
</fieldset>

<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">عدد الغرف</label>
        <input type="number" name="room"  class="form-control @error('room') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> room}}" >
        @error('room')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 360px;font-size: 20px;">عدد الحمامات</label>
        <input type="number" name="bathroom"  class="form-control @error('bathroom') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> bathroom}}"  >
        @error('bathroom')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">السعر</label>
        <input type="text" name="price"  class="form-control @error('price') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  value="{{$data-> price}}">
        @error('price')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">حالة البناء</label>
        <input type="text" name="state"  class="form-control @error('state') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  value="{{$data-> state}}">
        @error('state')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">فضاء البناء</label>
        <input type="text" name="space"  class="form-control @error('space') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  value="{{$data-> space}}">
        @error('space')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الوجهة</label>
        <input type="text" name="direction"  class="form-control @error('direction') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> direction}}" >
        @error('direction')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الرخصة</label>
        <input type="text" name="license"  class="form-control @error('license') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> license}}" >
        @error('license')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
<div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الطابق</label>
        <input type="text" name="floor"  class="form-control @error('floor') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> floor}}" >
        @error('floor')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الوصف</label>
        <input type="text" name="description"  class="form-control @error('description') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> description}}" >
        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <!-- <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 360px;font-size: 20px;">عدد المشاهدات</label>
        <input type="number" name="number_show"  class="form-control @error('number_show') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> number_show}}" >

    </div> -->
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">سعر المتر</label>
        <input type="text" name="meter_price"  class="form-control @error('meter_price') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> meter_price}}" >
        @error('meter_price')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 360px;font-size: 20px;">عرض الشارع</label>
        <input type="text" name="street_width"  class="form-control @error('street_width') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> street_width}}"  >
        @error('street_width')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 380px;font-size: 20px;">اتجاه المنزل</label>
        <input type="text" name="location"  class="form-control @error('location') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> location}}"  >
        @error('location')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 360px;font-size: 20px;">مميزات العقار </label>
        <input type="text" name="features"  class="form-control @error('features') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> features}}" >
        @error('features')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>

    <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">المدينة</label>
        <select class="form-select @error('city_id') is-invalid @enderror" name="city_id" id="city" aria-label="Default select example" style="background-color: white; color:black; text-align: end;width: 450px;height: 35px;border-color: #ddd7d7;font-size: 20px;">
            {{-- <option value="">-- اختر المدينة --</option> --}}
  <option value="{{ $my_city->id }}" {{$my_city->id == $my_city->city_id ? 'selected' : ''}}>{{ $my_city->name }}</option>

            @foreach ($cities as $city)
                <option value="{{ $city->id }}" {{ $city->id == $data->city_id ? 'selected' : '' }}>{{ $city->name }}</option>
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
            {{-- <option value="">-- اختر المنطقة --</option> --}}
  <option value="{{ $my_region->id }}" {{$my_region->id == $my_region->region_id ? 'selected' : ''}}>{{ $my_region->name }}</option>


<!-- سيتم تحميل الخيارات هنا باستخدام AJAX -->
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
            {{-- <option value="">-- اختر الحي --</option> --}}
  <option value="{{ $my_neighborhood->id }}" {{$my_neighborhood->id == $my_neighborhood->neighborhood_id ? 'selected' : ''}}>{{ $my_neighborhood->name }}</option>

            <!-- سيتم تحميل الخيارات هنا باستخدام AJAX -->
        </select>
        @error('neighborhood_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>



                    <!-- <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">المستخدم</label> -->
        <input type="hidden" name="user_id"  class="form-control @error('user_id') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> user_id}}" >
        <!-- @error('user_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div> -->
















	<button type="submit" class="btn btn-sm btn-primary" style=" background-color:#406a98;margin-left: 20%; margin-bottom: 20px; font-size: 20px;">إضافة عقار</button>
    <!-- <a  href="{{url('dashboardd')}}"class="btn btn-light" style=" margin-bottom: 20px; font-size: 20px;color: #918686;">العودة إلى لوحة التحكم </a> -->


</form>
<form action="{{ url('updatePendToAccept', $data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
                         <input type="hidden" name="type" value="{{$data->type}}">
                        <input type="hidden" class="form-control" id="purpose" name="purpose"
                        value="{{$data->purpose}}" readonly>
                        <input type="hidden" name="price" value="{{$data->price}}">
                        <!-- <img src="{{URL::asset('/img/temp/'.$data->estate_image)}}" alt="" style="      visibility: hidden;     width: 4px;
    height: 4px;" > -->

                        <input type="hidden" name="room" value="{{$data->room}}">
                        <input type="hidden" class="form-control" id="bathroom" name="bathroom"
                        value="{{$data->bathroom}}" readonly>
                        <input type="hidden" name="space" value="{{$data->space}}">
                        <input type="hidden" class="form-control" id="meter_price" name="meter_price"
                        value="{{$data->meter_price}}" readonly>
                        <input type="hidden" name="floor" value="{{$data->floor}}">
                        <input type="hidden" class="form-control" id="street_width" name="street_width"
                        value="{{$data->street_width}} " readonly>
                        <input type="hidden" name="number_show" value="{{$data->number_show}}">
                        <input type="hidden" class="form-control" id="description" name="description"
                        value=" {{$data->description}}" readonly>
                        <input type="hidden" class="form-control" id="building_rank" name="building_rank"
                        value=" {{$data->building_rank}}" readonly>
                        <input type="hidden" name="state" value="{{$data->state}}">
                        <input type="hidden" class="form-control" id="license" name="license"
                        value="{{$data->license}}" readonly>
                        <input type="hidden" name="location" value="{{$data->location}}">
                        <input type="hidden" class="form-control" id="direction" name="direction"
                        value="{{$data->direction}}" readonly>
                        <input type="hidden" name="neighborhood_id" value=" {{$data->neighborhood_id}}">
                        <input type="hidden" class="form-control" id="features" name="features"
                        value="{{$data->features}}" readonly>
                        <input type="hidden" class="form-control" id="user_id" name="user_id"
                        value="{{$data->user_id}}" readonly>
                     <!-- <video src="{{URL::asset('/img/temp/'.$data->estate_video)}}"    controls muted style="visibility: hidden;     width: 4px;
    height: 4px;" class="video" ></video> -->



          <div class="center" style="text-align: center;">

            <button type="submit" class="btn btn-success" style="align-items: center; display: inline-block;">قبول <i class="fa fa-check"></i></button> &nbsp;

          </div>

          </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        function loadRegions(cityid, selectedRegionId = null) {
            $.ajax({
                url: "{{ route('getRegion') }}?city_id=" + cityid,
                type: "get",
                success: function (result) {
                    $('#region').html('<option value="">-- اختر المنطقة --</option>');
                    $.each(result, function (key, value) {
                        let selected = (value.id == selectedRegionId) ? 'selected' : '';
                        $('#region').append('<option value="' + value.id + '" ' + selected + '>' + value.name + '</option>');
                    });
                    if (selectedRegionId) {
                        $('#region').trigger('change');
                    }
                }
            });
        }

        function loadNeighborhoods(regionid, selectedNeighborhoodId = null) {
            $.ajax({
                url: "{{ route('getneighborhood') }}?region_id=" + regionid,
                type: "get",
                success: function (res) {
                    $('#neighborhood').html('<option value="">-- اختر الحي --</option>');
                    $.each(res, function (key, value) {
                        let selected = (value.id == selectedNeighborhoodId) ? 'selected' : '';
                        $('#neighborhood').append('<option value="' + value.id + '" ' + selected + '>' + value.name + '</option>');
                    });
                }
            });
        }


// تحميل البيانات عند فتح الصفحة
        let cityId = "{{ $data->city_id }}";
        let regionId = "{{ $data->region_id }}";
        let neighborhoodId = "{{ $data->neighborhood_id }}";

        if (cityId) {
            loadRegions(cityId, regionId);
        }

        if (regionId) {
            loadNeighborhoods(regionId, neighborhoodId);
        }

        // تحميل البيانات عند تغيير المدينة
        $('#city').on('change', function () {
            var cityid = this.value;
            loadRegions(cityid);
        });

        // تحميل البيانات عند تغيير المنطقة
        $('#region').on('change', function () {
            var regionid = this.value;
            loadNeighborhoods(regionid);
        });
    });
</script>
@endsection
