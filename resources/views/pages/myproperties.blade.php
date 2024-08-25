@extends('layout.master')
@section('content')
<!-- Properties -->

<div class="properties">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><a href="{{route('addmyproperties')}}" class="addper">إضافة عقار</a> </div>
					<div class="section_title"><a href="{{url('getFav')}}" class="foper">عقاراتي المفضلة</a>   </div>
				</div>
			</div>
			<div class="row properties_row">

				<!-- Property -->
                @if($pended->isNotEmpty())
                @foreach($pended as $pendeds)
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="images/ارمان-حلب-تخت-دوت-كوم-2.jpg" alt="">
							<div class="tag_featured property_tag"><a href="#">  معلق</a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location">{{$pendeds->type}}</div>
							<div class="property_title"><a href="#">{{$pendeds->purpose}}</a></div>
							<div class="property_title"><a href="#">{{$pendeds->neighborhood->region->name}}</a></div>
							<div class="property_price">{{$pendeds->price}}</div>
						</div>
						<!-- <div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="images/icon_1.png" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="images/icon_2.png" alt=""></div><span>3 Rooms</span></div>
							<div><div class="property_icon"><img src="images/icon_3.png" alt=""></div><span>3 Bathrooms</span></div>
						</div> -->
					</div>
				</div>
                @endforeach
                @else
    <p style="display: block; margin: 30px 80px;">لا توجد بيانات معلقة.</p>
@endif


				<!-- Property -->
                @if($cancled->isNotEmpty())
                @foreach($cancled as $cancleds)
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="images/65c17dffeb3fb966760523.webp" alt="">
							<div class="tag_featured property_tag"><a href="#">مرفوض </a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location">{{$cancleds->type}}</div>
							<div class="property_title"><a href="#">{{$cancleds->purpose}}</a></div>
							<div class="property_title"><a href="#">{{$cancleds->neighborhood->region->name}}</a></div>
							<div class="property_price">{{$cancleds->price}}</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start" style="background: #9b4e4e;">
							<div>{{$cancleds->reason}}</div>
							<!-- <div><div class="property_icon"><img src="images/icon_2.png" alt=""></div><span>3 Rooms</span></div>
							<div><div class="property_icon"><img src="images/icon_3.png" alt=""></div><span>3 Bathrooms</span></div> -->
						</div>
					</div>
				</div>
                @endforeach
                @else
    <p style="display: block; margin: 30px 80px;">لا توجد بيانات مرفوضة.</p>
@endif
@if($accepted->isNotEmpty())
				@foreach($accepted as $accepteds)

				<!-- Property -->
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{URL::asset('/img/estate/'.$accepteds->estate_image)}}" alt="">
							<div class="tag_featured property_tag"><a href="#">مقبول  </a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location">{{$accepteds->type}}</div>
							<div class="property_title"><a href="#">{{$accepteds->purpose}}</a></div>
							<div class="property_title"><a href="#">{{$accepteds->neighborhood->region->name}}</a></div>
							<div class="property_price">{{$accepteds->price}}</div>
						</div>
						<!-- <div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="images/icon_1.png" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="images/icon_2.png" alt=""></div><span>3 Rooms</span></div>
							<div><div class="property_icon"><img src="images/icon_3.png" alt=""></div><span>3 Bathrooms</span></div>
						</div> -->
					</div>
				</div>
                @endforeach
                @else
    <p style="display: block; margin: 30px 80px;">لا توجد بيانات مقبولة.</p>
@endif

				<!-- Property -->


				<!-- Property -->


				<!-- Property -->
				<!-- <div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="images/property_7.jpg" alt="">
							<div class="tag_new property_tag"><a href="#">New</a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location">Miami</div>
							<div class="property_title"><a href="property.html">Sea view property</a></div>
							<div class="property_price">$ 1. 234 981</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="images/icon_1.png" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="images/icon_2.png" alt=""></div><span>3 Bedrooms</span></div>
							<div><div class="property_icon"><img src="images/icon_3.png" alt=""></div><span>3 Bathrooms</span></div>
						</div>
					</div>
				</div> -->

				<!-- Property -->
				<!-- <div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="images/property_8.jpg" alt="">
						</div>
						<div class="property_body text-center">
							<div class="property_location">San Francisco</div>
							<div class="property_title"><a href="property.html">Sea view property</a></div>
							<div class="property_price">$ 1. 234 981</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="images/icon_1.png" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="images/icon_2.png" alt=""></div><span>3 Bedrooms</span></div>
							<div><div class="property_icon"><img src="images/icon_3.png" alt=""></div><span>3 Bathrooms</span></div>
						</div>
					</div>
				</div> -->

				<!-- Property -->
				<!-- <div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="images/property_9.jpg" alt="">
						</div>
						<div class="property_body text-center">
							<div class="property_location">Miami</div>
							<div class="property_title"><a href="property.html">Sea view property</a></div>
							<div class="property_price">$ 1. 234 981</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="images/icon_1.png" alt=""></div><span>650 Ftsq</span></div>
							<div><div class="property_icon"><img src="images/icon_2.png" alt=""></div><span>3 Bedrooms</span></div>
							<div><div class="property_icon"><img src="images/icon_3.png" alt=""></div><span>3 Bathrooms</span></div>
						</div>
					</div>
				</div> -->

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
