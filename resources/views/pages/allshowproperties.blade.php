@extends('layout.master')
<style>
     .tt{
        font-family: "Cairo", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "slnt" 0;
    }
    .ttt{
        font-family: "El Messiri", sans-serif;
  font-optical-sizing: auto;
  font-weight:400;
  font-style: normal;
    }
    .citie{

background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url(/images/property_6.jpg);
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;

    }
    .divall{
        width: 1050px;
         /* margin-left: -90px; */
         margin-right: 50px;
    margin-left: auto;
    margin-top: 55px;

    }
    .all{
        display: flex;
        justify-content: space-evenly;
        flex-direction: row-reverse;
        align-items: stretch;

    }
    .ptt{

    }
    .imag{
        width: 1050px;
        height:400px;
    }
    .tttt{
        width: 500px;
    }
    .cont{
       margin-left: 120px;
    }
    @media screen and (max-width: 770px ){

        .divall{
            width: 358px;

        }

        .all{
            display: block;
        }
        .imag{
            width: 358px;
        height:330px;

        }
       .tttt{
        width: auto;
       }
       .cont{
       margin-left: 0px;
    }
    }
    @media screen and (max-width: 398px ){
        .divall{
            width: 358px;

        }

        .all{
            display: block;
        }
        .imag{
            width: 358px;
        height:330px;

        }
        .tttt{
        width: auto;
       }
       .cont{
       margin-left: 0px;
    }

    }
    @media screen and (max-width: 846px ){
        .divall{
            width: 358px;
            margin-left: 0;
        margin-right: 0;

        }
        .all{
            display: block;
        }
        .tttt{
        width: auto;
       }
       .imag{
            width: 358px;
        height:330px;

        }
        .cont{
       margin-left: 0px;
    }
    }
    @media screen and (max-width: 1145px){
        .divall{
            width: 358px;
            margin-left: 0;
        margin-right: 0;

        }
        .all{
            display: block;
            margin-left: 0;
        margin-right: 0;
        }
        .tttt{
        width: auto;
       }
       .imag{
            width: 358px;
        height:330px;

        }
        .cont{
       margin-left: 10px;
    }
    }
</style>

<div class="container-xxl position-relative  d-flex p-0 citie ">

   <!-- Recent Sales Start -->
   <div  class="">
   <div class="pt-4 px-4 cont">


   <div class="properties  " style="padding-bottom: 0px;">
		<div class=" divall" >

			<div class="" style="margin-top: -80px; ">

				<!-- Property -->

				<div class=" property_col">
					<div class="property">
						<div class="property_image">
							<img  src="{{URL::asset('/img/estate/'.$property->estate_image)}}" alt=""  class="imag">

						</div>
						<div class="property_body text-center all" style="">
                            <div style="    text-align: end; margin-right: 20px;">
                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;">الإسم :</span>   {{$property->name}} </h3></div>
							<div class="property_title"><h3 class="tt"><span style="color: #342e2e;">النوع :</span>  {{$property->type}}</h3></div>
                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;">الغاية :</span>  {{$property->purpose}}</h3></div>

                            <div class="property_location"><h3 class="tt tttt" style=""><span style="color: #342e2e;">الوصف :</span> {{$property->description}}</h3></div>
                            @if(  $property->type == 'أرض')
                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;">سعر المتر :</span> {{$property->meter_price}}</h3></div>
                            @endif
                            @if($property->type != 'غرفة' && $property->type != 'محل'  && $property->type != 'أرض')
                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;">عدد الغرف :</span> {{$property->room}}</h3></div>
                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;">عدد الحمامات :</span> {{$property->bathroom}}</h3></div>
                            @endif
							<div class="property_price"><h3 class="tt"><span style="color: #342e2e;">السعر :</span> {{$property->price}}<h3></div>
                            <div class="property_location" ><h3 class="tt"> <span style="direction: rtl; color: #342e2e;">المساحة :</span>{{$property->space}} </h3></div>

                            </div>
                            <div style="text-align: end;">

                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;">الوجهة :</span> {{$property->direction}}</h3></div>

                            @if(  $property->purpose == 'بيع')
                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;">الرخصة:</span> {{$property->license}}  </h3></div>
                            @endif
                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;">الحالة :</span> {{$property->state}}</h3></div>
                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;">عرض الشارع  :</span> {{$property->street_width}} </h3></div>
                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;"> اتجاه  :</span> {{$property->location}}</h3></div>
                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;">عدد المشاهدات :</span> {{$property->number_show}}</h3></div>
                            @if(  $property->type == 'شقة')
                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;">الطابق  :</span> {{$property->floor}}</h3></div>
                            @endif
                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;">مميزات العقار  :</span> {{$property->features}}</h3></div>
                            <div class="property_location"><h3 class="tt"><span style="color: #342e2e;">الموقع :</span> {{$property->neighborhood->region->name}} - {{$property->neighborhood->name}}</h3></div>
                            </div>



						</div>

                        <div class="property_image">


                            <video src="{{URL::asset('/img/estate/'.$property->estate_video)}}"    class="imag"  controls muted></video>

						</div>

						<!-- <div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="{{asset('images/icon_1.png')}}" alt=""></div><span></span></div>
							<div><div class="property_icon"><img src="{{asset('images/icon_2.png')}}" alt=""></div><span> Rooms</span></div>
							<div><div class="property_icon"><img src="{{asset('images/icon_3.png')}}" alt=""></div><span> Bathrooms</span></div>
						</div> -->
					</div>
				</div>



			</div>

		</div>
	</div>






</div>
            <!-- Recent Sales End -->
</div>


</div>


@section('content')
    @endsection
