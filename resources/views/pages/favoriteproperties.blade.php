@extends('layout.master')
@section('content')
<!-- Properties -->

<div class="properties" style="direction: rtl;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title" style="margin-top: 30px;">عقاراتي المفضلة </div>

				</div>
			</div>
			<div class="row properties_row">

				<!-- Property -->
                @if($favs->isNotEmpty())
                @foreach($favs as $fav)
				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{URL::asset('/img/estate/'.$fav->properties->estate_image)}}"alt="">
							<div class="tag_featured property_tag"><a href="{{url('property/show', $fav->properties->id)}}">المزيد من التفاصيل  </a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location">{{$fav->properties->type}}</div>
							<div class="property_title"><a href="#">{{$fav->properties->purpose}}</a></div>
							<div class="property_title"><a href="#">{{$fav->properties->neighborhood->region->name}}</a></div>
							<div class="property_price">{{$fav->properties->price}}</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start" style="    direction: ltr;">
							<div><div class="property_icon"><img src="images/icon_1.png" alt=""></div><span>{{$fav->properties->space}} </span></div>
							<div><div class="property_icon"><img src="images/icon_2.png" alt=""></div><span>{{$fav->properties->room}} Rooms</span></div>
							<div><div class="property_icon"><img src="images/icon_3.png" alt=""></div><span>{{$fav->properties->bathroom}} Bathrooms</span></div>
						</div>
					</div>
				</div>
                @endforeach
                @else
    <p style="display: block; margin: 30px 80px;">لا توجد عقارات مفضلة .</p>
@endif




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
