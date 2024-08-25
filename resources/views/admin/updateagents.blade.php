
@extends('layouts.master')
@section('content')
<div class="card" style="width: 30rem; margin-left: 30%; margin-top: 140px;">
@if(session()->has('message'))
        <div class="alert alert-info" role="alert" style="text-align:end;font-size: 20px; ">
          {{session()->get('message')}}
        </div>
@endif
<label for="" class="form-label" style="color: blue; font-size: 20px; text-align: center;"> تعديل الوكيل العقاري </label>
<form action="  {{url('update',$data->id)}}" method="post" enctype="multipart/form-data">
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
     <div class="row mb-3">
                            <label for="image" class="form-label" style="margin-left: 400px;font-size: 20px;">الصورة</label>

                            <div class="col-md-6">
                                <img src="{{URL::asset('/img/agent/'.$data->image)}}" width="200px" style="margin-left: 120px;">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" style="background-color: white; margin-left: 120px;" >
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>
                            </div>
                            <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الهاتف الارضي</label>
        <input type="text" name="phone"  class="form-control @error('phone') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> phone}}">
        @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>
     <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">البريد الالكتروني </label>
        <input type="email" name="email"  class="form-control @error('email') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> email}}">
        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>
     <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">الموبايل  </label>
        <input type="text" name="mobile"  class="form-control @error('mobile') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> mobile}}">
        @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>
     <div class="mb-3" style="margin-left: 10px; margin-right: 10px;">
        <label for="" class="form-label" style="margin-left: 400px;font-size: 20px;">العنوان بالتفصيل  </label>
        <input type="text" name="address"  class="form-control @error('address') is-invalid @enderror" style="background-color: white; color:black; text-align: end;" value="{{$data-> address}}">
        @error('address')
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











  <button type="submit" class="btn btn-sm btn-primary" style=" background-color:#406a98;margin-left: 20%; margin-bottom: 20px; font-size: 20px;">تعديل الوكيل العقاري</button>
    <a  href="{{url('dashboardd')}}"class="btn btn-light" style=" margin-bottom: 20px; font-size: 20px;color: #918686;">العودة إلى لوحة التحكم </a>


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
