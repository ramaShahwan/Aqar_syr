@extends('layout.master')
@section('content')
<!-- Home -->

<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/elements.jpg')}}" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">عقارات مدينة </div>

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
							<form action="#" class="search_form d-flex flex-row align-items-start justfy-content-start">
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<!-- <div>
										<select class="search_form_select">
											<option disabled selected>اختار المدينة</option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>اختار المنطقة</option>
											<option>Type 1</option>
											<option>Type 2</option>
											<option>Type 3</option>
											<option>Type 4</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>اختار الحي</option>
											<option>New York</option>
											<option>Paris</option>
											<option>Amsterdam</option>
											<option>Rome</option>
										</select>
									</div> -->
									<div>
										<select class="search_form_select">
											<option disabled selected style="direction: rtl;">اختار نوع العقار</option>
											<option style="direction: rtl;">شقة</option>
											<option style="direction: rtl;">فيلا</option>
											<option style="direction: rtl;">أرض</option>
											<option style="direction: rtl;">محل</option>
											<option style="direction: rtl;">مكتب</option>
											<option style="direction: rtl;">(شاليه - مزرعة ) استراحة</option>
											<option style="direction: rtl;">غرفة</option>
											<option style="direction: rtl;">صالة</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected style="direction: rtl;">اختار الغاية من العقار</option>
											<option style="direction: rtl;">ايجار</option>
											<option style="direction: rtl;">بيع</option>
											<option >رهن</option>
										</select>
									</div>
								</div>
								<button class="search_form_button ml-auto">بحث</button>
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
							<div class="tag_featured property_tag"><a href="{{url('property/show', $call->id)}}">المزيد من التفاصيل</a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location">{{$call->name}}</div>
							<div class="property_title"><a href="property.html">{{$call->purpose}}</a></div>
							<div class="property_title"><a href="property.html">{{$call->neighborhood->region->name}}</a></div>
							<div class="property_price">{{$call->price}}</div>
						</div>
						@if($call->type != 'غرفة' && $call->type != 'محل'  && $call->type != 'أرض')
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
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

@endsection
