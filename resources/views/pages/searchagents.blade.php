@extends('layout.master')
@section('content')
<!-- Home -->
{{$cityName = session('selected_city')}}
<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/elements.jpg')}}" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start" style="direction: rtl;">
                        <div class="home_title" style="color: #FFFFFF;"> الوكلاء العقاريين </div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Search -->
	<div class="home_search">


		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_content">
                        <!-- <p>المدينة المختارة: {{ session('selected_city') }}</p> -->
                        <form action="{{url('Advancedsearch')}}"  method="GET" class="search_form d-flex flex-row align-items-start justify-content-start">
                        <div class="search_form_content d-flex flex-row align-items-start justify-content-start flex-wrap">
        <div>
        <select class="search_form_select serct @error('city_id') is-invalid @enderror addwa addwac" name="city_id" id="city" aria-label="Default select example" style="background-color: white; color:black; border-color: #ddd7d7;font-size: 20px;" >
        <option selected>اختر المدينة</option>
        <!-- <option value="1">حلب</option> -->

        @foreach ($cities as $city)
  <option value="{{ $city->id }}">{{ $city->name }}</option>
  @endforeach
</select>
        </div>
        <div>
        <select id="region" name="region_id" class="search_form_select serct @error('region_id') is-invalid @enderror addwa" style="background-color: white; color:black; border-color: #ddd7d7;font-size: 20px;">
                        <option value="">-- اختر المنطقة --</option>
                        <option value="1">الحمدانية</option>

                        </select>
        </div>
        <div>
        <select id="neighborhood" name="neighborhood_id" class="search_form_select serct @error('neighborhood_id') is-invalid @enderror addwa" style="background-color: white; color:black; border-color: #ddd7d7;font-size: 20px;">
                        <option value="">-- اختر الحي --</option>
                        <option value="1">الحي الاول</option>

                        </select>
        </div>
    </div>
    <button type="submit" class="search_form_button ml-auto serct">بحث</button>
</form>






						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Properties -->

	<div class="properties">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">الوكلاء العقاريين المتوفرة</div>
					<!-- <div class="section_subtitle">اختر الوكيل العقاري الذي تريده</div> -->
				</div>
			</div>
			<div class="row properties_row">
            @if($message)
    <div style="direction: rtl;"> <p style="" class="ff">{{ $message }}</p></div>
@else
            @foreach($agents as $call)
				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{URL::asset('/img/agent/'.$call->image)}}" alt="">
							<div class="tag_featured property_tag"><a href="#">المزيد من التفاصيل</a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location">{{$call->name}}</div>
							<div class="property_title"><a href="#">{{$call->phone}}</a></div>
							<div class="property_title"><a href="#">{{$call->email}}</a></div>
                            <div class="property_title"><a href="#">{{$call->mobile}}</a></div>
                            <div class="property_title"><a href="#">{{$call->address}}</a></div>
							<div class="property_price">{{$call->neighborhood->region->name}} - {{$call->neighborhood->name}}</div>
						</div>
						<!-- @if($call->type != 'غرفة' && $call->type != 'محل'  && $call->type != 'أرض')
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="{{asset('images/icon_1.png')}}" alt=""></div><span>{{$call->space}}</span></div>
							<div><div class="property_icon"><img src="{{asset('images/icon_2.png')}}" alt=""></div><span>{{$call->room}} Rooms</span></div>
							<div><div class="property_icon"><img src="{{asset('images/icon_3.png')}}" alt=""></div><span>{{$call->bathroom}} Bathrooms</span></div>
						</div>
                        @endif -->
					</div>
				</div>
                {{session(['selected_city' => $call->neighborhood->region->city->name])}}

            @endforeach


@endif





			</div>
			<!-- <div class="row">
				<div class="col">
					<div class="pagination">
						<ul>
							<li class="active"><a href="#">01.</a></li>
							<li><a href="#">02.</a></li>
							<li><a href="#">03.</a></li>
							<li><a href="#">04.</a></li>
						</ul>
					</div>
				</div>
			</div> -->
		</div>
	</div>

	<!-- Newsletter -->

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

@endsection
