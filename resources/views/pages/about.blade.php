@extends('layout.master')
@section('content')
<style>
    .tt{
        font-family: "Cairo", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "slnt" 0;
    }
    .citie{

background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url(../images/property_6.jpg);
background-position: center center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;

    }
    .ttu{
        background: #224061;
    width: 240px;
    padding: 10px;
    margin-left: 1000px;
    font-size: 20px;
    margin-bottom: 60px;

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

    }
</style>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="UTF-8"></script>





	<!-- Home -->

	<div class="home">
		<div class="parallax_background  headerr"  style="  background: linear-gradient(rgb(191 211 232 / 31%), rgb(209 219 231 / 29%)), url(images/pp.jpg);width: 100%;height: 80vh;margin-top: 100px;background-size: cover;background-position: center center;" ></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
                    <div class="home_content ">
							<div class="home_title" style="text-align: center;font-size: 40px;"><h4 class="tt ttu" style='
 '>حول الموقع</h4>  </div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Search -->


	<!-- About -->

	<div class="about citie re" >
		<div class="container">
			<div class="row">


            <!-- About Image -->
				<div class="col-lg-6">
					<div class="about_image"><img src="images/photo_2024-05-28_13-57-10.jpg" alt=""></div>
				</div>

				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="section_title tt" style="text-align: end;">معلومات حول الموقع</div>
						<div class="section_subtitle " style='text-align: end; font-family: "El Messiri", sans-serif;
  font-optical-sizing: auto;
  font-weight:400;
  font-style: normal;'>أهداف الموقع</div>
						<div class="about_text">
							<p style='color: black; font-size: 20px;text-align: end;font-family: "El Messiri", sans-serif;
  font-optical-sizing: auto;
  font-weight:400;
  font-style: normal;'> نحن موقع متخصص في تقديم خدمات عقارية متكاملة، نقدم خدمات شراء وبيع العقارات، إدارة الأملاك، تأجير الوحدات السكنية والتجارية، تقييم العقارات، وتقديم استشارات عقارية، يتألف فريقنا من محترفين متخصصين في مجال العقارات، يعملون على تحقيق أهداف عملائنا وتلبية احتياجاتهم علماً أننا نقوم بفحص العقار بالتعاون مع شركة بيلدنغ رانك ونعطي تقرير فني عن كل عقار يتم تسويقه من خلالنا </p>
  <!-- <p style='color: black; font-size: 20px;text-align: center;font-family: "El Messiri", sans-serif;
  font-optical-sizing: auto;
  font-weight:400;
  font-style: normal;margin-top: -50px;
    margin-left: 250px;'>Building Rank</p> -->
    <a href="">Building Rank</a>
						</div>
					</div>
				</div>


			</div>

		</div>
	</div>

	<!-- Realtors -->



	<!-- Newsletter -->


    @endsection
