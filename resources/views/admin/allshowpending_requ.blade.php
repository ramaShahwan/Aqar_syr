@extends('layout.master')
@section('content')
<!-- Intro -->

<div class="intro" style="    margin-top: 30px;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_content d-flex flex-lg-row flex-column align-items-start justify-content-start">

						<div class="intro_title_container">
							<div class="intro_title"> شقة</div>
							<!-- <div class="intro_tags">
								<ul>
									<li><a href="#">Hottub</a></li>
									<li><a href="#">Swimming Pool</a></li>
									<li><a href="#">Garden</a></li>
									<li><a href="#">Patio</a></li>
									<li><a href="#">Hard Wood Floor</a></li>
								</ul>
							</div> -->
						</div>
						<div class="intro_price_container ml-lg-auto d-flex flex-column align-items-start justify-content-center">
							<div>السعر</div>
							<div class="intro_price">1999</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="intro_slider_container">

			<!-- Intro Slider -->
			<div class="owl-carousel owl-theme intro_slider">
				<!-- Slide -->
				<div class="owl-item"><img src="images/city_1.jpg"  alt=""></div>
				<!-- Slide -->
				<div class="owl-item"><img src="images/city_1.jpg" alt=""></div>
				<!-- Slide -->
				<div class="owl-item"><img src="images/city_1.jpg" alt=""></div>
			</div>

			<!-- Intro Slider Nav -->
			<div class="intro_slider_nav_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="intro_slider_nav_content d-flex flex-row align-items-start justify-content-end">
								<div class="intro_slider_nav intro_slider_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
								<div class="intro_slider_nav intro_slider_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Property -->

	<div class="property">
		<div class="container">
			<div class="row">

				<!-- Sidebar -->



				<!-- Property Content -->
				<div class="col-lg-10 offset-lg-1" style="text-align: end;">
					<div class="property_content">
						<div class="property_icons">
							<!-- <div class="property_title">لسنا مجرد سمسمار عقارات</div>
							<div class="property_text property_text_1">
								<p>نحن نوصف العقارات التي نسوقها بكل ما فيها من محاسن ومساوئ</p>
							</div> -->
							<div class="property_rooms d-flex flex-sm-row flex-column align-items-start justify-content-start" style="    text-align: center;">

								<!-- Property Room Item -->

								<div class="property_room">
									<div class="property_room_title">عدد الغرف</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_1.png')}}" alt=""></div>
										<div class="room_num">5</div>
									</div>
								</div>

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">عدد الحمامات</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_2.png')}}" alt=""></div>
										<div class="room_num">3</div>
									</div>
								</div>


								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">المساحة</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_3.png')}}" alt=""></div>
										<div class="room_num">100</div>
									</div>
								</div>
                                <!-- Property Room Item -->

								<div class="property_room">
									<div class="property_room_title">سعر المتر</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_3.png')}}" alt=""></div>
										<div class="room_num">77</div>
									</div>
								</div>


								<!-- Property Room Item -->

								<div class="property_room">
									<div class="property_room_title">الطابق</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_4.png')}}" alt=""></div>
										<div class="room_num">اول</div>
									</div>
								</div>


								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">عرض الشارع</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_5.png')}}" alt=""></div>
										<div class="room_num"> 5م</div>
									</div>
								</div>
								<div class="property_room">
									<div class="property_room_title">عدد المشاهدات</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_5.png')}}" alt=""></div>
										<div class="room_num"> 1</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Description -->

						<div class="property_description">
							<div class="property_title">الوصف</div>
							<div class="property_text property_text_2">
								<p> يحوي اربع غرف</p>
							</div>
						</div>

						<!-- Additional Details -->

						<div class="additional_details">
							<div class="property_title">مواصفات اضافية</div>
							<div class="details_container">
								<ul>
                                <li><span>حالة البناء :</span> سوبر ديلوكس</li>

									<li><span>الرخصة :</span> طابو اخضر</li>

									<li><span>اتجاه :</span>شرقي</li>
									<li><span>الوجهة :</span>امامي</li>
									<li><span>الامان :</span>العقار مفحوص من قبل شركة بيلدينغ رانك</li>
									<li><span>موقع العقار :</span>داريا</li>
									<li><span>مميزات العقار :</span> جانب مدرسة</li>
									<li style=" display: inline;"><a class="btn btn-sm btn-primary" href="" style="width: 90px;    background-color:#28a745">قبول</a></li>
									<li style=" display: inline;"><a class="btn btn-sm btn-primary" href="" style="width: 90px;    background-color:#28a745">رفض</a></li>
                                    <li style=" display: inline;"><a class="btn btn-sm btn-primary" href="" style="width: 90px;    background-color:#28a745">تعديل</a></li>
								</ul>
							</div>
						</div>

						<!-- Property On Map -->

						<div class="property_map">
							<div class="property_title">فيديو للعقار</div>
							<div class="property_map_container">

								<!-- Google Map -->
								<div id="google_map" class="google_map">
									<div class="map_container">
										<div >
											<video src="images/VID-20240507-WA0000.mp4"    controls muted style="" class="video"></video>

										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->
@endsection
