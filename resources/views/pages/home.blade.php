<style>
      .citie{

background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url(../images/property_6.jpg);
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;

    }


    .ii:hover{
        font-size:20px;
    }
    .iii:hover{
        font-size:23px;
    }
    .home_title{

   margin-right: -600px;
    margin-top: -130px;

}
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

@extends('layout.master')


    @section('content')



	<!-- Home -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="UTF-8"></script>


	<div class="headerr"  style="    background: linear-gradient(rgb(191 211 232 / 31%), rgb(209 219 231 / 29%)), url(images/property_6.jpg);width: 100%;height: 80vh;margin-top: 100px;background-size: cover;background-position: center center;" >
        <!-- <img src="images/home_slider_1.jpg" alt="" style="width: 100%;height: 80vh;margin-top: 100px;background-size: cover;background-position: center center;"> -->
        <div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">

										<div class="home_title" style='text-align: end;font-size: 50px;
font-family: "Cairo", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "slnt" 0;color: #365271;'>المحترف لتطوير وتسويق العقار</div>
                                        <!-- <div class="home_title" style="text-align: end;margin: 40px;margin-right: -140px; color: #657c94;">       نقدم لك الخدمات العقارية التي تستحقها </div> -->
                                        <div class="home_title" style='text-align: end;    margin-top: 40px; color: #657c94;font-family: "El Messiri", sans-serif;
  font-optical-sizing: auto;
  font-weight:400;
  font-style: normal;'>            بوابتك إلى العقارات الأكثر ملائمة </div>
									</div>
								</div>
							</div>
						</div>
					</div>

    </div>




<div class="cities citie">
<div><h2 style='text-align: center;margin-top: -40px;color: #193653;font-size: 40px;  font-family: "El Messiri", sans-serif;
  font-optical-sizing: auto;
  font-weight:400;
  font-style: normal;'>المدن</h2>
  <SPan style="margin-left: 600px; color: #091929;">_____________________</SPan>
</div>
		<div class="container">
			<div class="row">

            <!-- <div class="newsletter_form_container">
              <form action="#" class="newsletter_form">
                <input type="text" class="newsletter_input" placeholder="بحث" required="required" style="background-color: #c2c7cb;width: 500px; text-align: end;padding-right: 80px;margin-left: -80px;">
                <button class="newsletter_button" style="background-color: #375f8a; margin-right: 590px;">البحث</button>
              </form>
            </div> -->
				<div class="col">
					</br>
					<div class="section_title" style='text-align: end;  font-family: "Changa", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;'> اختيار مدينة </div>
					<div class="section_subtitle"  style='text-align: end;  font-family: "Changa", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;'>البحث عن عقارات داخل المدينة</div>
				</div>
			</div>
		</div>
			<!-- City -->
		<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between" style="direction: rtl;">
			@foreach($cities as $call)


				<div >
                    <!-- {{-- <div class="city_title" style="    margin-top: 10px;color: #203e60; text-align: center; margin-left: 30px;margin-right: -13px;">{{$call->name}}</div> --> --}} -->

					<div class="city" style="    border-radius: 50px;">
							<a href="{{url('property/get_by_city',$call->name)}}" >
                                <img class="img image"src="{{URL::asset('/img/city/'.$call->city_image)}}" style="">
                    <div class="city_title" style='   margin-top: 10px;color: #203e60; text-align: center; margin-left: 30px;margin-right: -13px;font-family: "Cairo", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "slnt" 0;font-size:25px;margin-bottom: 10px;'>{{$call->name}}</div>

							</a>
					</div>
				</div>

			@endforeach
		</div>
		<!-- <div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">

		</div> -->
</div>
<div class="contact"style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/property_6.jpg);width: 100%;background-size: cover;background-position: center center;">
<!-- <div class="section_title">ابق على تواصل معنا</div> -->
<div class="container">

			<div class="row">


				<!-- Contact Info -->
				<div class="col-lg-4">
					<div class="contact_info">
						<div class="section_title tt" style="color: #d1d1d1">ابق على تواصل معنا</div>
						<!-- <div class="section_title"style="text-align: end;">ابق على تواصل معنا</div> -->
						<div class="contact_info_content">
							<ul class="contact_info_list">

								<li>
									<!-- <div style="text-align: end;font-size: 20px;    color: #172170;">الهاتف</div> -->
									<div style="margin-left: -30px;"><h5 style="color: white;   "> <i class="fa-solid fa-phone ii"style="margin-right: 15px;" ></i>0966333221</h5></div>
								</li>
								<li>
									<!-- <div style="text-align: end;font-size: 20px;    color: #172170;">البريد الالكتروني</div> -->
									<div style="margin-left: -30px;"><h5 style="color: white;   "><i class="fa-solid fa-envelope ii"style="margin-right: 10px;"></i>engabdulaziz@yahoo.com</h5></div>
								</li>
                                <li>
									<!-- <div style="text-align: end;font-size: 20px;    color: #172170;">العنوان</div> -->
                                    <div style="margin-left: -30px;"> <h5 class="ttt" style="color: white;font-size: 14px;
    text-align: start;    "> <i class="fa-solid fa-location-dot iii" style="margin-right: 15px;color: white"></i>حلب - المحافظة - شارع الهندسة      </h5>
    <h5 class="ttt" style="color: white;font-size: 14px;text-align: start;     margin-left: 20px;   "> بعد مفرق مديرية التعاون السكني</h5>
    <h5 class="ttt" style="color: white;font-size: 14px;text-align: start;     margin-left: 20px;   "> <a href="https://www.google.com/maps/place/%D8%A7%D9%84%D9%85%D8%AD%D8%AA%D8%B1%D9%81+%D9%84%D9%84%D9%87%D9%86%D8%AF%D8%B3%D8%A9+%D9%88%D8%A7%D9%84%D8%A8%D9%86%D8%A7%D8%A1%E2%80%AD/@36.2068136,37.1333305,17z/data=!3m1!4b1!4m6!3m5!1s0x152ff9b114a1c0bd:0xc1a3980f7bb30d7c!8m2!3d36.2068093!4d37.1359054!16s%2Fg%2F11v66ggnb5?entry=ttu" style="color: wheat;">اضغط هنا لاستعراض الموقع </a>    </h5>
</div>

								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-8">
					<div class="contact_form_container">
							<form action="{{url('contact/store')}}" method="post" enctype="multipart/form-data" class="contact_form" id="contact_form">
                        @csrf
							<div class="row">
								<!-- Name -->
								<div class="col-lg-6 contact_name_col">
                                <input type="email" class="contact_input tt @error('email') is-invalid @enderror" name="email"  style="text-align: end;padding:20px; background:#ffff; border: 2px solid black;" placeholder="البريد الالكتروني" required="required">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
								</div>
								<!-- Email -->
								<div class="col-lg-6">
                                <input type="text" class="contact_input tt @error('name') is-invalid @enderror" name="name" style="text-align: end; padding:20px;background:#ffff; border: 2px solid black;" placeholder="الاسم" required="required">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
								</div>
							</div>

							<div><textarea class="contact_textarea contact_input tt @error('message') is-invalid @enderror" name="message"  style="text-align: end;padding:20px;background:#ffff; border: 2px solid black;" placeholder="الرسالة" required="required"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror</div>
                            <button class="contact_button button ttt" style="font-size: 17px;background:#d1d1d1;width:90px;height:50px;color: #0c3c6d;">إرسال</button>						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
