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
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title" style="color: #FFFFFF;">عقارات مدينة </div>

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
                        <form id="searchForm" method="GET" class="search_form d-flex flex-row align-items-start justify-content-start">
    <div class="search_form_content d-flex flex-row align-items-start justify-content-start flex-wrap">
        <div>
            <select class="search_form_select serct pp" id="type" name="type" required>
                <option disabled selected style="direction: rtl;">اختار نوع العقار</option>
                <option style="direction: rtl;" value="شقة">شقة</option>
                <option style="direction: rtl;" value="فيلا">فيلا</option>
                <option style="direction: rtl;" value="أرض">أرض</option>
                <option style="direction: rtl;" value="محل">محل</option>
                <option style="direction: rtl;" value="مكتب">مكتب</option>
                <option style="direction: rtl;" value="استراحة">استراحة</option>
                <option style="direction: rtl;" value="غرفة">غرفة</option>
                <option style="direction: rtl;" value="صالة">صالة</option>
            </select>
        </div>
        <div>
            <select class="search_form_select serct pp" id="purpose" name="purpose" required>
                <option disabled selected style="direction: rtl;">اختار الغاية من العقار</option>
                <option style="direction: rtl;" value="ايجار">ايجار</option>
                <option style="direction: rtl;" value="بيع">بيع</option>
                <option style="direction: rtl;" value="رهن">رهن</option>
            </select>
        </div>
        <div>
            <input type="hidden" id="cityName" name="cityName" value="{{ session('selected_city') }}">
        </div>
    </div>
    <button type="submit" class="search_form_button ml-auto serct pp">بحث</button>
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
					<div class="section_title">العقارات المتوفرة</div>
					<div class="section_subtitle">اختر العقار الذي تريده</div>
				</div>
			</div>
			<div class="row properties_row">
            @foreach($props as $call)
				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{URL::asset('/img/estate/'.$call->estate_image)}}" alt="">
							<div class="tag_featured property_tag pp"><a href="{{url('property/show', $call->id)}}">المزيد من التفاصيل</a></div>
						</div>
						<div class="property_body text-center pp">
							<div class="property_location">{{$call->name}}</div>
							<div class="property_title"><a href="{{url('property/show', $call->id)}}">{{$call->purpose}}</a></div>
							<div class="property_title"><a href="{{url('property/show', $call->id)}}">{{$call->neighborhood->region->name}}</a></div>
							<div class="property_price">{{$call->price}}</div>
						</div>
						@if($call->type != 'غرفة' && $call->type != 'محل'  && $call->type != 'أرض')
						<div class="property_footer d-flex flex-row align-items-center justify-content-start pp">
							<div><div class="property_icon"><img src="{{asset('images/icon_1.png')}}" alt=""></div><span>{{$call->space}}</span></div>
							<div><div class="property_icon"><img src="{{asset('images/icon_2.png')}}" alt=""></div><span>{{$call->room}} Rooms</span></div>
							<div><div class="property_icon"><img src="{{asset('images/icon_3.png')}}" alt=""></div><span>{{$call->bathroom}} Bathrooms</span></div>
						</div>
                        @endif
					</div>
				</div>
                {{session(['selected_city' => $call->neighborhood->region->city->name])}}

            @endforeach





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
    <script>
document.getElementById('searchForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var type = document.getElementById('type').value;
    var purpose = document.getElementById('purpose').value;
    var cityName = document.getElementById('cityName').value;

    console.log("Type:", type);
    console.log("Purpose:", purpose);
    console.log("City Name:", cityName);

    var url = `/property/get_by_city_type/${type}/${purpose}/${cityName}`;
    window.location.href = url;
});
</script>

@endsection
