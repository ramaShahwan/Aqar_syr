@extends('layout.master')
@section('content')

	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/images/property_6.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">

										<div class="home_title tt" style="color: #365271">المحترف لتطوير وتسويق العقار</div>
										<div class="home_subtitle ttt">      بوابتك إلى العقارات الأكثر ملائمة </div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Home Search -->
	<!-- <div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_content">
							<form action="#" class="search_form d-flex flex-row align-items-start justfy-content-start">
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<div>
										<select class="search_form_select">
											<option disabled selected style="direction: rtl;">اختار المدينة</option>
											<option style="direction: rtl;">دمشق</option>
											<option style="direction: rtl;">حلب</option>
											<option style="direction: rtl;">ريف دمشق</option>
											<option style="direction: rtl;">حمص</option>
											<option style="direction: rtl;">اللاذقية</option>
											<option style="direction: rtl;">ظرظوس</option>
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
									</div>
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
	</div> -->





	<!-- Cities -->

	<div class="cities">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">المدن</div>
					<div class="section_subtitle" style="color: black;">اختيار المدينة</div>
					<div class="section_subtitle">البحث عن عقارات داخل المدينة</div>
				</div>
			</div>
		</div>

		<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between" style="direction: rtl;">

			<!-- City -->

            @foreach($cities as $call)
			<div class="city" style="border-radius: 50px;">
				<!-- <img src="images/city_2.jpg" alt="https://unsplash.com/@lachlanjdempsey"> -->
				<div class="">
					<a href="{{url('property/get_by_city',$call->name)}}" class="d-flex flex-column align-items-center justify-content-center">
						<img src="{{URL::asset('/img/city/'.$call->city_image)}}" alt="https://unsplash.com/@lachlanjdempsey">
						<div class="city_title">{{$call->name}}</div>
						<!-- <div class="city_subtitle">Rentals from $450/month</div> -->
					</a>
				</div>
			</div>

            @endforeach










			<!-- City -->


			<!-- City -->


			<!-- City -->


			<!-- City -->

		</div>
	</div>



	<!-- Footer -->
@endsection
