<!doctype html>
<html lang="en">
  <head>
  	<title>المحترف لتطوير وتسويق العقار </title>
      <link rel="icon" href="{{asset('images/ph.png')}}" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('css/stylesidbar.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrapsid.min.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Noto+Sans+Arabic:wght@100..900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="UTF-8"></script>

        <style>
            .dropdown{
            /* position: absolute;
            right:0; */
            margin-right: 160px;
            transition: 0.3s ease;
        }
         .sub-menu{
            background: rgb(10 8 8 / 17%);
            display: none;

        }
        .tt{
            font-family: "Cairo", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "slnt" 0;
        }
        /* .d{
            display: -ms-flexbox!important;
    display: flex!important;
    flex-direction: row;
    justify-content: flex-end;
    margin-left: 484px;

        } */
        </style>
  </head>
  <body>
    {{$cityName = session('selected_city')}}

    <!-- {{$property = session('selected_property')}} -->
		<div class="wrapper d-flex  align-items-stretch justify-content-between" style="margin-top: 100px; ">
			<nav id="sidebar" class="order-last" class="img" >
				<div class="" >
					<!-- <button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button> -->
        </div>
        <div class=""     style="background: linear-gradient(to bottom, #cfd3d7, #d6e0eb); ">
        <div style="margin-left: 15px;    padding-top: 30px;"><h1 class="tt" style="    font-size: 20px;
    text-align: center;">المحترف لتطوير وتسويق العقار  </h1></div>

	        <ul class="list-unstyled components ">
            <li>
	              <a href="{{url('property/get_by_city',$cityName)}} " style="text-align: end;font-size: 20px;" class="tt">الكل  <span class="fa fa-building mr-3"></span> </a>
	          </li>


              <li>
                <a class="sub-btn tt" style="text-align: end; font-size: 18px; " ><i class="fas fa-angle-left dropdown"></i> شقة <i class="fa-solid fa-house "></i></a>
                <div class="sub-menu">
                    <a href="{{ url('property/get_by_city_type', ['type' => 'شقة', 'cityName' => $cityName, 'purpose' => 'ايجار']) }}"style="text-align: end; font-size: 18px;" class="sub-item tt">شقق للإيجار <i class="fa fa-house"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'شقة', 'cityName' => $cityName, 'purpose' => 'بيع']) }}" class="sub-item tt" style="text-align: end; font-size: 18px; ">شقق للبيع <i class="fa fa-house"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'شقة', 'cityName' => $cityName, 'purpose' => 'رهن']) }}" class="sub-item tt" style="text-align: end; font-size: 18px; ">شقق للرهن <i class="fa fa-house"></i></a>
                </div>
	          </li>


	          <li>
                <a class="sub-btn tt" style="text-align: end; font-size: 20px; " ><i class="fas fa-angle-left dropdown"></i> فيلا <i class="fa-solid fa-house "></i></a>
                <div class="sub-menu">
                    <a href="{{ url('property/get_by_city_type', ['type' => 'فيلا', 'cityName' => $cityName, 'purpose' => 'ايجار']) }}"style="text-align: end; font-size: 20px;" class="sub-item tt">فيلا للإيجار <i class="fa-solid fa-house-chimney"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'فيلا', 'cityName' => $cityName, 'purpose' => 'بيع']) }}" class="sub-item tt" style="text-align: end; font-size: 20px; ">فيلا للبيع <i class="fa-solid fa-house-chimney"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'فيلا', 'cityName' => $cityName, 'purpose' => 'رهن']) }}" class="sub-item tt" style="text-align: end; font-size: 20px; ">فيلا للرهن <i class="fa-solid fa-house-chimney"></i></a>
                </div>
	          </li>
	          <li>
                <a class="sub-btn tt" style="text-align: end; font-size: 17px; " ><i class="fas fa-angle-left dropdown"></i> أرض <i class="fa-solid fa-house "></i></a>
                <div class="sub-menu">
                    <a href="{{ url('property/get_by_city_type', ['type' => 'أرض', 'cityName' => $cityName, 'purpose' => 'ايجار']) }}"style="text-align: end; font-size: 20px;" class="sub-item tt">أرض للإيجار <i class="fa fa-house"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'أرض', 'cityName' => $cityName, 'purpose' => 'بيع']) }}" class="sub-item tt" style="text-align: end; font-size: 20px; ">أرض للبيع <i class="fa fa-house"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'أرض', 'cityName' => $cityName, 'purpose' => 'رهن']) }}" class="sub-item tt" style="text-align: end; font-size: 20px; ">أرض للرهن <i class="fa fa-house"></i></a>
                </div>
	          </li>
	          <li>
                <a class="sub-btn tt" style="text-align: end; font-size: 18px; " ><i class="fas fa-angle-left dropdown"></i> محل <i class="fa-solid fa-shop"></i></a>
                <div class="sub-menu">
                    <a href="{{ url('property/get_by_city_type', ['type' => 'محل', 'cityName' => $cityName, 'purpose' => 'ايجار']) }}"style="text-align: end; font-size: 18px;" class="sub-item tt">محل للإيجار <i class="fa-solid fa-shop"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'محل', 'cityName' => $cityName, 'purpose' => 'بيع']) }}" class="sub-item tt" style="text-align: end; font-size: 18px; ">محل للبيع <i class="fa-solid fa-shop"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'محل', 'cityName' => $cityName, 'purpose' => 'رهن']) }}" class="sub-item tt" style="text-align: end; font-size: 18px; ">محل للرهن <i class="fa-solid fa-shop"></i></a>
                </div>
	          </li>
              <li>
                <a class="sub-btn tt" style="text-align: end; font-size: 16px; " ><i class="fas fa-angle-left dropdown"></i> مكتب <i class="fa-solid fa-shop"></i></a>
                <div class="sub-menu">
                    <a href="{{ url('property/get_by_city_type', ['type' => 'مكتب', 'cityName' => $cityName, 'purpose' => 'ايجار']) }}"style="text-align: end; font-size: 18px;" class="sub-item tt">مكتب للإيجار <i class="fa-solid fa-shop"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'مكتب', 'cityName' => $cityName, 'purpose' => 'بيع']) }}" class="sub-item tt" style="text-align: end; font-size: 18px; ">مكتب للبيع <i class="fa-solid fa-shop"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'مكتب', 'cityName' => $cityName, 'purpose' => 'رهن']) }}" class="sub-item tt" style="text-align: end; font-size: 18px; ">مكتب للرهن <i class="fa-solid fa-shop"></i></a>
                </div>
	          </li>
              <li>
                <a class="sub-btn tt" style="text-align: end; font-size: 18px; " ><i class="fas fa-angle-left dropdown" style="margin-right: 29px;"></i> استراحة(شاليه - مزرعة) <i class="fa-solid fa-house "></i></a>
                <div class="sub-menu">
                    <a href="{{ url('property/get_by_city_type', ['type' => 'استراحة', 'cityName' => $cityName, 'purpose' => 'ايجار']) }}"style="text-align: end; font-size: 18px;" class="sub-item tt">استراحة(شاليه - مزرعة) للإيجار <i class="fa fa-house"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'استراحة', 'cityName' => $cityName, 'purpose' => 'بيع']) }}" class="sub-item tt" style="text-align: end; font-size: 18px; ">استراحة(شاليه - مزرعة) للبيع <i class="fa fa-house"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'استراحة', 'cityName' => $cityName, 'purpose' => 'رهن']) }}" class="sub-item tt" style="text-align: end; font-size: 18px; ">استراحة(شاليه - مزرعة) للرهن <i class="fa fa-house"></i></a>
                </div>
	          </li>
              <li>
                <a class="sub-btn tt" style="text-align: end; font-size: 18px; " ><i class="fas fa-angle-left dropdown"></i> غرفة <i class="fa-solid fa-house "></i></a>
                <div class="sub-menu">
                    <a href="{{ url('property/get_by_city_type', ['type' => 'غرفة', 'cityName' => $cityName, 'purpose' => 'ايجار']) }}"style="text-align: end; font-size: 18px;" class="sub-item tt">غرفة للإيجار <i class="fa fa-house"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'غرفة', 'cityName' => $cityName, 'purpose' => 'بيع']) }}" class="sub-item tt" style="text-align: end; font-size: 18px; ">غرفة للبيع <i class="fa fa-house"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'غرفة', 'cityName' => $cityName, 'purpose' => 'رهن']) }}" class="sub-item tt" style="text-align: end; font-size: 20px; ">غرفة للرهن <i class="fa fa-house"></i></a>
                </div>
	          </li>
              <!-- <li>
                <a class="sub-btn" style="text-align: end; font-size: 17px; " ><i class="fas fa-angle-left dropdown"></i> مزرعة <i class="fa-solid fa-house "></i></a>
                <div class="sub-menu">
                    <a href="{{ url('property/get_by_city_type', ['type' => 'مزرعة', 'cityName' => $cityName, 'purpose' => 'ايجار']) }}"style="text-align: end; font-size: 20px;" class="sub-item">مزرعة للإيجار <i class="fa fa-house"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'مزرعة', 'cityName' => $cityName, 'purpose' => 'بيع']) }}" class="sub-item" style="text-align: end; font-size: 20px; ">مزرعة للبيع <i class="fa fa-house"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'مزرعة', 'cityName' => $cityName, 'purpose' => 'رهن']) }}" class="sub-item" style="text-align: end; font-size: 20px; ">مزرعة للرهن <i class="fa fa-house"></i></a>
                </div>
	          </li> -->
              <li>
                <a class="sub-btn tt" style="text-align: end; font-size: 18px; " ><i class="fas fa-angle-left dropdown"></i> صالة <i class="fa-solid fa-house "></i></a>
                <div class="sub-menu">
                    <a href="{{ url('property/get_by_city_type', ['type' => 'صالة', 'cityName' => $cityName, 'purpose' => 'ايجار']) }}"style="text-align: end; font-size: 18px;" class="sub-item tt">صالة للإيجار <i class="fa fa-house"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'صالة', 'cityName' => $cityName, 'purpose' => 'بيع']) }}" class="sub-item tt" style="text-align: end; font-size: 18px; ">صالة للبيع <i class="fa fa-house"></i></a>
                    <a href="{{ url('property/get_by_city_type', ['type' => 'صالة', 'cityName' => $cityName, 'purpose' => 'رهن']) }}" class="sub-item tt" style="text-align: end; font-size: 18px; ">صالة للرهن <i class="fa fa-house"></i></a>

                </div>
	          </li>
	        </ul>

	        <!-- <div class="mb-5 px-4">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>

	        <div class="footer px-4">
	        	<p>
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						</p>
	        </div>

	      </div> -->

    	</nav>

        <!-- Page Content  -->
      <!-- <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Sidebar #04</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div> -->
		</div>
        <script type="text/javascript">
        $(document).ready(function(){
            $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
            });

        });
    </script>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>
