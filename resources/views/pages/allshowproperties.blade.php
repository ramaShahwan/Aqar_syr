@extends('layout.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Intro -->
<style>
        .favorite-button {
    display: flex;
    align-items: center;
    padding: 7px;
    border: none;
    background-color: #f1f1f1;
    color: #333;
    cursor: pointer;
    font-size: 1rem;
    font-family: Arial, sans-serif;
}

.favorite-button i {
    margin-right: 5px; /* تباعد بين الأيقونة والنص */
    font-size: 1.2rem; /* حجم الأيقونة */
    color: red; /* لون الأيقونة */
}

    </style>
<div class="intro" style="    margin-top: 30px;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_content d-flex flex-lg-row flex-column align-items-start justify-content-start">

						<div class="intro_title_container">
							<div class="intro_title"> {{$property->type}}</div>
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
							<div class="intro_price">{{$property->price}}</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="intro_slider_container">

			<!-- Intro Slider -->
			<div class="owl-carousel owl-theme intro_slider">
				<!-- Slide -->
				<div class="owl-item"><img src="{{URL::asset('/img/estate/'.$property->estate_image)}}" alt=""></div>
				<!-- Slide -->
				<div class="owl-item"><img src="{{URL::asset('/img/estate/'.$property->estate_image)}}"alt=""></div>
				<!-- Slide -->
				<div class="owl-item"><img src="{{URL::asset('/img/estate/'.$property->estate_image)}}" alt=""></div>
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
                                @if($property->type != 'غرفة' && $property->type != 'محل'  && $property->type != 'أرض')
								<div class="property_room">
									<div class="property_room_title">عدد الغرف</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_1.png')}}" alt=""></div>
										<div class="room_num">{{$property->room}}</div>
									</div>
								</div>

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">عدد الحمامات</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_2.png')}}" alt=""></div>
										<div class="room_num">{{$property->bathroom}}</div>
									</div>
								</div>
                                @endif

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">المساحة</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_3.png')}}" alt=""></div>
										<div class="room_num">{{$property->space}}</div>
									</div>
								</div>
                                <!-- Property Room Item -->
                                @if(  $property->type == 'أرض')
								<div class="property_room">
									<div class="property_room_title">سعر المتر</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_3.png')}}" alt=""></div>
										<div class="room_num">{{$property->meter_price}}</div>
									</div>
								</div>
                                @endif

								<!-- Property Room Item -->
                                @if(  $property->type == 'شقة')
								<div class="property_room">
									<div class="property_room_title">الطابق</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_4.png')}}" alt=""></div>
										<div class="room_num">{{$property->floor}}</div>
									</div>
								</div>
                                @endif

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">عرض الشارع</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_5.png')}}" alt=""></div>
										<div class="room_num"> {{$property->street_width}} </div>
									</div>
								</div>
								<div class="property_room">
									<div class="property_room_title">عدد المشاهدات</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_5.png')}}" alt=""></div>
										<div class="room_num"> {{$property->number_show}}</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Description -->

						<div class="property_description">
							<div class="property_title">الوصف</div>
							<div class="property_text property_text_2">
								<p> {{$property->description}} </p>
							</div>
						</div>

						<!-- Additional Details -->

						<div class="additional_details">
							<div class="property_title">مواصفات اضافية</div>
							<div class="details_container">
								<ul>
                                <li><span>حالة البناء :</span> {{$property->state}}</li>
                                @if(  $property->purpose == 'بيع')
									<li><span>الرخصة :</span> {{$property->license}} </li>
                                    @endif
									<li><span>اتجاه :</span>{{$property->location}}</li>
									<li><span>الوجهة :</span>{{$property->direction}}</li>
                                    @if(  $property->building_rank === 0)
									<li><img src="{{asset('images/Untitled-1.png')}}" alt="" style="    width: 80px;"><span>الامان :</span>العقار مفحوص من قبل شركة بيلدينغ رانك

                                </li>
                                    @endif
									<li><span>موقع العقار :</span>{{$property->neighborhood->region->name}} - {{$property->neighborhood->name}}</li>
									<li><span>مميزات العقار :</span> {{$property->features}}</li>
									<li><span> الهاتف :</span> 0966333221</li>
									<li><span>info@proengaqar.com :</span> البريد الالكتروني </li>
                                    <!-- <li style="display: inline;">
    <a id="favorite-icon" class="btn btn-sm btn-primary" href="javascript:void(0);" style="width: 90px; background-color:#28a745">
        <i id="heart-icon" class="fa fa-heart-o"></i>

    </a>
</li> -->
<li><form action='{{ url("setFav", $property->id) }}' method="post">
    @csrf
    <!-- <input type="submit" value="اضافة للمفضلة" style="    padding: 7px;"> -->
    <button id="favorite-button" class="favorite-button" type="submit" >
        <i id="heart-icon" class="fa-heart far"></i>
        <span>اضافة للمفضلة</span>
    </button>
</form></li>
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
											<video src="{{URL::asset('/img/estate/'.$property->estate_video)}}"    controls muted style="" class="video"></video>

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
    <script>
    document.addEventListener('DOMContentLoaded', () => {
    const heartIcon = document.getElementById('heart-icon');
    const favoriteButton = document.getElementById('favorite-button');

    favoriteButton.addEventListener('click', () => {
        if (heartIcon.classList.contains('far')) {
            heartIcon.classList.remove('far');
            heartIcon.classList.add('fas');
            // قم بتخزين الحالة في localStorage أو في متغير لجعل التغيير دائم حتى يتم الضغط مرة أخرى
            localStorage.setItem('favorited', 'true');
        } else {
            heartIcon.classList.remove('fas');
            heartIcon.classList.add('far');
            localStorage.setItem('favorited', 'false');
        }
    });

    // تعيين الحالة الأولية عند تحميل الصفحة
    if (localStorage.getItem('favorited') === 'true') {
        heartIcon.classList.remove('far');
        heartIcon.classList.add('fas');
    } else {
        heartIcon.classList.remove('fas');
        heartIcon.classList.add('far');
    }
});

</script>
@endsection


<!--  -->
