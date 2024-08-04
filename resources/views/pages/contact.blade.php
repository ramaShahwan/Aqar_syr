<style>

    .ii:hover{
        font-size:20px;
    }
    .iii:hover{
        font-size:22px;
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
    .citie{

background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url(../images/property_6.jpg);
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;

    }
    .ree{
        margin-left: -30px;
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
        .ttu{
            background: #224061;
    width: 240px;
    padding: 10px;
    margin-left: 0px;
    font-size: 20px;
    margin-bottom: 0px;
        }
        .re{
            height: 1800px;
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
        .ttu{
            background: #224061;
    width: 240px;
    padding: 10px;
    margin-left: 0px;
    font-size: 20px;
    margin-bottom: 0px;
        }
        .re{
            height: 1800px;
        }
        .ree{
        margin-left: -10px;
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
        .ttu{
            background: #224061;
    width: 240px;
    padding: 10px;
    margin-left: 0px;
    font-size: 20px;
    margin-bottom: 0px;
        }
        .re{
            height: 1800px;
        }
        .ree{
        margin-left: -10px;
    }

    }
    @media screen and (max-width: 1145px){
        body{
            width: 1145px;
          }
          .home_title {
            margin: 0px;
        }
        .ttu{
            background: #224061;
    width: 240px;
    padding: 10px;
    margin-left: 0px;
    font-size: 20px;
    margin-bottom: 0px;
        }
        /* .city{
            width: 200px;
        } */
        .re{
            height: 1800px;
        }
        .ree{
        margin-left: -10px;
    }

    }

</style>
@extends('layout.master')
@section('content')

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="UTF-8"></script>


	<!-- Menu -->

	<!-- <div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo">
				<a href="#">
					<div class="logo_container d-flex flex-row align-items-start justify-content-start">
						<div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
					</div>
				</a>
			</div>
			<ul>
				<li class="menu_item"><a href="index.html">Home</a></li>
				<li class="menu_item"><a href="about.html">About us</a></li>
				<li class="menu_item"><a href="#">Speakers</a></li>
				<li class="menu_item"><a href="#">Tickets</a></li>
				<li class="menu_item"><a href="news.html">News</a></li>
				<li class="menu_item"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="menu_phone"><span>call us: </span>652 345 3222 11</div>
	</div> -->

	<!-- Home -->

	<div class="home">
		<div class="parallax_background  headerr"   style="    background: linear-gradient(rgb(191 211 232 / 31%), rgb(209 219 231 / 29%)), url(images/property_6.jpg);width: 100%;height: 80vh;margin-top: 100px;background-size: cover;background-position: center center;"  data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content ">
							<div class="home_title tt" style="text-align: center;font-size: 40px;color: #365271">صفحة التواصل</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Search -->


	<!-- Contact -->

	<div class="contact citie"style=";width: 100%;background-size: cover;background-position: center center;">
<!-- <div class="section_title">ابق على تواصل معنا</div> -->
<div class="container">

			<div class="row">


				<!-- Contact Info -->
				<div class="col-lg-4">
					<div class="contact_info">
						<div class="section_title tt" style="color: #2b4868">ابق على تواصل معنا</div>
						<!-- <div class="section_title"style="text-align: end;">ابق على تواصل معنا</div> -->
						<div class="contact_info_content">
							<ul class="contact_info_list">

								<!-- <li style="margin-left: -30px;">
									<div ><h5 style="color: #203e60;   "> <i class="fa-solid fa-phone ii"style="margin-right: 15px;color: #203e60;" ></i>0966333221</h5></div>
								</li> -->
                                <li>
									<!-- <div style="text-align: end;font-size: 20px;    color: #172170;">العنوان</div> -->
                                    <div style="" class="ree"> <h5 class="ttt" style="color: #203e60;font-size: 16px;
    text-align: start;    "> <i class="fa-solid fa-phone iii" style="margin-right: 15px;color: #203e60;"></i> 0966333221      </h5>
    <!-- <span style="color:black;">_____________________________</span> -->
</div>

								</li>
								<!-- <li>
									<div style="margin-left: -30px;"><h5 style="color: #203e60;   "><i class="fa-solid fa-envelope ii"style="margin-right: 10px;color: #203e60;"></i>engabdulaziz@yahoo.com</h5></div>
								</li> -->
                                <li>
									<!-- <div style="text-align: end;font-size: 20px;    color: #172170;">العنوان</div> -->
                                    <div style="" class="ree"> <h5 class="ttt" style="color: #203e60;font-size: 16px;
    text-align: start;    "> <i class="fa-solid fa-envelope iii" style="margin-right: 15px;color: #203e60;"></i> engabdulaziz@yahoo.com       </h5>
    <!-- <span style="color:black;">_____________________________</span> -->
</div>

								</li>
                                <li>
									<!-- <div style="text-align: end;font-size: 20px;    color: #172170;">العنوان</div> -->
                                    <div style="" class="ree"> <h5 class="ttt" style="color: #203e60;font-size: 14px;
    text-align: start;    "> <i class="fa-solid fa-location-dot iii" style="margin-right: 15px;color: #203e60;"></i>حلب - المحافظة - شارع الهندسة      </h5>
    <h5 class="ttt" style="color: #203e60;font-size: 14px;text-align: start;     margin-left: 20px;   "> بعد مفرق مديرية التعاون السكني</h5>
    <h5 class="ttt" style="color: #203e60;font-size: 14px;text-align: start;     margin-left: 20px;   "> <a href="https://www.google.com/maps/place/%D8%A7%D9%84%D9%85%D8%AD%D8%AA%D8%B1%D9%81+%D9%84%D9%84%D9%87%D9%86%D8%AF%D8%B3%D8%A9+%D9%88%D8%A7%D9%84%D8%A8%D9%86%D8%A7%D8%A1%E2%80%AD/@36.2068136,37.1333305,17z/data=!3m1!4b1!4m6!3m5!1s0x152ff9b114a1c0bd:0xc1a3980f7bb30d7c!8m2!3d36.2068093!4d37.1359054!16s%2Fg%2F11v66ggnb5?entry=ttu" style="color: #09100e; font-weight: 1000;">اضغط هنا لاستعراض الموقع  </a>    </h5>
    <!-- <span style="color:black;">_____________________________</span> -->
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

	<!-- Map -->


		<!-- Google Map -->


</div>
<div class="citie" >
	<div ><img src="images/Untitled-6.png" alt="" style="width: 640px;height: 400px; margin-bottom: 20px;
    margin-left: 330px;border: 40px black;outline-width: 10px;
    outline-color: #a89393b5;
    outline-style: double;"></div>
				</div>







@endsection
