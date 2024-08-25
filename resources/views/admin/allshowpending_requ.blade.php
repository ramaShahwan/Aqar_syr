@extends('layout.master')
@section('content')
<style>
        .popup .overlay{
            position: fixed;
            top: 0px;
            left: 0px;
            width: 100vw;
            height: 100vw;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
            display: none;
        }
        .popup .content{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%) scale(0);
            background: #fff;
            width: 450px;
            height: 220px;
            z-index: 2;
            text-align: center;
            padding: 20px;
            box-sizing: border-box;
        }
        .popup .close-btn{
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 20px;
            width: 30px;
            height: 30px;
            background: #222;
            color: #fff;
            font-size: 25px;
            font-weight: 600;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
        }
        .popup.active .overlay{
            display: block;
        }
        .popup.active .content{
            transition: all 300ms ease-in-out;
            transform: translate(-50%,-50%) scale(1);

        }
    </style>
<!-- Intro -->


<div class="intro" style="    margin-top: 30px;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_content d-flex flex-lg-row flex-column align-items-start justify-content-start">

						<div class="intro_title_container">
							<div class="intro_title"> {{$estate->type}}</div>
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
							<div class="intro_price">{{$estate->price}}</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="intro_slider_container">

			<!-- Intro Slider -->
			<div class="owl-carousel owl-theme intro_slider">
				<!-- Slide -->
				<div class="owl-item"><img src="{{URL::asset('/img/temp/'.$estate->estate_image)}}" alt=""></div>
				<!-- Slide -->
				<div class="owl-item"><img src="{{URL::asset('/img/temp/'.$estate->estate_image)}}"alt=""></div>
				<!-- Slide -->
				<div class="owl-item"><img src="{{URL::asset('/img/temp/'.$estate->estate_image)}}" alt=""></div>
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
                                @if($estate->type != 'غرفة' && $estate->type != 'محل'  && $estate->type != 'أرض')
								<div class="property_room">
									<div class="property_room_title">عدد الغرف</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_1.png')}}" alt=""></div>
										<div class="room_num">{{$estate->room}}</div>
									</div>
								</div>

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">عدد الحمامات</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_2.png')}}" alt=""></div>
										<div class="room_num">{{$estate->bathroom}}</div>
									</div>
								</div>
                                @endif

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">المساحة</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_3.png')}}" alt=""></div>
										<div class="room_num">{{$estate->space}}</div>
									</div>
								</div>
                                <!-- Property Room Item -->
                                @if(  $estate->type == 'أرض')
								<div class="property_room">
									<div class="property_room_title">سعر المتر</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_3.png')}}" alt=""></div>
										<div class="room_num">{{$estate->meter_price}}</div>
									</div>
								</div>
                                @endif

								<!-- Property Room Item -->
                                @if(  $estate->type == 'شقة')
								<div class="property_room">
									<div class="property_room_title">الطابق</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_4.png')}}" alt=""></div>
										<div class="room_num">{{$estate->floor}}</div>
									</div>
								</div>
                                @endif

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">عرض الشارع</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_5.png')}}" alt=""></div>
										<div class="room_num"> {{$estate->street_width}} </div>
									</div>
								</div>
								<div class="property_room">
									<div class="property_room_title">عدد المشاهدات</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="{{asset('images/room_5.png')}}" alt=""></div>
										<div class="room_num"> {{$estate->number_show}}</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Description -->

						<div class="property_description">
							<div class="property_title">الوصف</div>
							<div class="property_text property_text_2">
								<p> {{$estate->description}} </p>
							</div>
						</div>

						<!-- Additional Details -->

						<div class="additional_details">
							<div class="property_title">مواصفات اضافية</div>
							<div class="details_container">
								<ul>
                                <li><span>حالة البناء :</span> {{$estate->state}}</li>
                                @if(  $estate->purpose == 'بيع')
									<li><span>الرخصة :</span> {{$estate->license}} </li>
                                    @endif
									<li><span>اتجاه :</span>{{$estate->location}}</li>
									<li><span>الوجهة :</span>{{$estate->direction}}</li>
                                    @if(  $estate->building_rank === 0)
									<li><img src="{{asset('images/Untitled-1.png')}}" alt="" style="    width: 80px;"><span>الامان :</span>العقار مفحوص من قبل شركة بيلدينغ رانك

                                </li>
                                    @endif
									<li><span>موقع العقار :</span>{{$estate->neighborhood->region->name}} - {{$estate->neighborhood->name}}</li>
									<li><span>مميزات العقار :</span> {{$estate->features}}</li>
									<li><span> الهاتف :</span> 0966333221</li>
									<li><span>info@proengaqar.com :</span> البريد الالكتروني </li>
                                    <li>
<form action="{{ url('updatePendToAccept', $estate->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
                         <input type="hidden" name="type" value="{{$estate->type}}">
                        <input type="hidden" class="form-control" id="purpose" name="purpose"
                        value="{{$estate->purpose}}" readonly>
                        <input type="hidden" name="price" value="{{$estate->price}}">
                        <!-- <input type="hidden" class="form-control" id="estate_image" name="estate_image"
                        value="{{URL::asset('/img/temp/'.$estate->estate_image)}}" readonly> -->
                        <!-- <img src="{{URL::asset('/img/temp/'.$estate->estate_image)}}" alt=""  name="estate_image" style="      visibility: hidden;     width: 4px;
    height: 4px;" > -->
    <!-- <img src="{{ URL::asset('/img/temp/'.$estate->estate_image) }}" alt="Current Image" style="visibility: hidden;width: 4px; height: 4px; " name="estate_image"> -->

    <!-- <input type="file" name="estate_image" accept="{{URL::asset('/img/temp/'.$estate->estate_image)}}">
    <input type="file" name="estate_video" accept="{{URL::asset('/img/temp/'.$estate->estate_video)}}"> -->
                        <input type="hidden" name="room" value="{{$estate->room}}">
                        <input type="hidden" class="form-control" id="bathroom" name="bathroom"
                        value="{{$estate->bathroom}}" readonly>
                        <input type="hidden" name="space" value="{{$estate->space}}">
                        <input type="hidden" class="form-control" id="meter_price" name="meter_price"
                        value="{{$estate->meter_price}}" readonly>
                        <input type="hidden" name="floor" value="{{$estate->floor}}">
                        <input type="hidden" class="form-control" id="street_width" name="street_width"
                        value="{{$estate->street_width}} " readonly>
                        <input type="hidden" name="number_show" value="{{$estate->number_show}}">
                        <input type="hidden" class="form-control" id="description" name="description"
                        value=" {{$estate->description}}" readonly>
                        <input type="hidden" class="form-control" id="building_rank" name="building_rank"
                        value=" {{$estate->building_rank}}" readonly>
                        <input type="hidden" name="state" value="{{$estate->state}}">
                        <input type="hidden" class="form-control" id="license" name="license"
                        value="{{$estate->license}}" readonly>
                        <input type="hidden" name="location" value="{{$estate->location}}">
                        <input type="hidden" class="form-control" id="direction" name="direction"
                        value="{{$estate->direction}}" readonly>
                        <input type="hidden" name="neighborhood_id" value=" {{$estate->neighborhood_id}}">
                        <input type="hidden" class="form-control" id="features" name="features"
                        value="{{$estate->features}}" readonly>
                        <input type="hidden" class="form-control" id="user_id" name="user_id"
                        value="{{$estate->user_id}}" readonly>
                        <!-- <input type="hidden" class="form-control" id="estate_video" name="estate_video"
                        value="{{URL::asset('/img/temp/'.$estate->estate_video)}}" readonly> -->
                     <!-- <video src="{{URL::asset('/img/temp/'.$estate->estate_video)}}" name="estate_video"   controls muted style="     visibility: hidden;     width: 4px;
    height: 4px;" class="video"></video> -->
    <!-- <video src="{{URL::asset('/img/temp/'.$estate->estate_video)}}"    controls muted style="visibility: hidden;     width: 4px;
    height: 4px;" class="video" ></video> -->


          <div class="center" style="text-align: center;">

            <button type="submit" class="btn btn-success" style="align-items: center; display: inline-block;">قبول <i class="fa fa-check"></i></button> &nbsp;

          </div>

          </form></li>									<li style=" display: inline;"><div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
            <div class="close-btn" onclick="togglePopuo()">&times;</div>
            <div class="mb-3" style="margin-left: 10px; margin-right: 10px; ">
        <form action="{{ url('updatePendToCancle', $estate->id) }}" method="post">
        @csrf
        <label for="" class="form-label" style="font-size: 20px;">سبب الرفض </label>
        <input type="text" name="reason"  class="form-control @error('reason') is-invalid @enderror" style="background-color: white; color:black; text-align: end;"  >
                             @error('reason')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <!-- <input type="submit" value="حفظ" style="width: 90px;     margin: 40px;
    font-size: 20px;   background-color:#28a745"> -->
     <button type="submit" class="btn btn-success" style="align-items: center; display: inline-block;">حفظ <i class="fa fa-check"></i></button> &nbsp;

    </form>
    </div>

        </div>
    </div>
    <button onclick="togglePopuo()" style="    width: 90px;
    background-color: #cf0e0e;
    padding: 7px;
    color: #fff;
    border: none;">رفض </button></li>

                                    <li style=" display: inline;"><a class="btn btn-sm btn-primary" href="{{url('editPend', $estate->id)}}" style="width: 90px;    background-color:#28a745">تعديل</a></li>
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
											<video src="{{URL::asset('/img/temp/'.$estate->estate_video)}}"    controls muted style="" class="video"></video>

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
        function togglePopuo(){
            document.getElementById("popup-1").classList.toggle("active");
        }
    </script>
@endsection
