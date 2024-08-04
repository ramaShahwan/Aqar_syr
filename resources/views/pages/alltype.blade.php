@extends('layout.master')

<style>
    .pp{
        display: flex !important;
    justify-content: flex-end;
    }
    .tt{
        font-family: "Cairo", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "slnt" 0;
    }
    .citie{

background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url(/images/property_6.jpg);
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;

    }
    @media screen and (max-width: 770px ){
        body{
            width: 800px;
    }
        .headerr{
            width: 100%;
        }
        .image{
            width: 400px;
        }
        .home_title{

            margin-right: 0px;
            margin-top: 0px;

        }

    }
    @media screen and (max-width: 398px ){
        body{
            width: 750px;
          }
          .home_title {
            text-align:start;
            margin-top: 0px;
        }

    }
    @media screen and (max-width: 846px ){
        body{
            width: 850px;
          }
          .home_title {
            margin-right: 0px;
            margin-top: 0px;
        }
    }
    @media screen and (max-width: 1145px){
        body{
            width: 1145px;
          }
          .home_title {
            margin: 0px;
        }
        /* .city{
            width: 200px;
        } */
    }

</style>

<div class="container-xxl position-relative  pp p-0 ">

   <!-- Recent Sales Start -->
   <!-- direction: rtl; -->
   <div style="padding-top: 100px;    height: 700px;
    overflow-y: scroll; margin-bottom:0px "  >
   <div class="container-fluid pt-4 px-4">


   <div class="properties citie">
		<div class="container">

			<div class="row properties_row" style="margin-top: -80px;">

				<!-- Property -->

                @foreach($props as $call)

				<div class=" property_col" style="margin-left: 3px;">
					<div class="property">
						<div class="property_image">
							<img  src="{{URL::asset('/img/estate/'.$call->estate_image)}}" style="width: 320px;height: 250px;">
							<div class="tag_featured property_tag tt"><a href="{{url('property/show', $call->id)}}" style="background-color:#3d3d6e;">المزيد من التفاصيل</a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location tt">{{$call->name}}</div>
                            <div class="property_title tt"><a href="#">{{$call->purpose}}</a></div>
							<div class="property_title tt"><a href="#">{{$call->neighborhood->region->name}}</a></div>
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

		</div>
	</div>






</div>
            <!-- Recent Sales End -->
</div>
<div>@include('layout.sideber')</div>

</div>


@section('content')
    @endsection
