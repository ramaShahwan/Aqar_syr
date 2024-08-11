<!doctype html>
<html lang="en">
  <head>
  	<title>المحترف لتطوير وتسويق العقار </title>
      <link rel="icon" href="{{asset('images/ph.png')}}" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"> -->


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->
		<link rel="stylesheet" href="{{asset('css/stylesidbar.css')}}">
        <!-- <link rel="stylesheet" href="{{asset('css/bootstrapsid.min.css')}}"> -->

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


		<div class="wrapper d-flex  align-items-stretch justify-content-between" style=" position: fixed; top:100px;
   right: -1070px;">
			<nav id="sidebar" class="order-last" class="img" style="    overflow-y: scroll;
    height: 540px;" >
				<div class="" >
					<!-- <button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button> -->
        </div>
        <div class=""     style="background: linear-gradient(to bottom, #cfd3d7, #d6e0eb); ">
        <div style=""><h1 class="tt" style="    font-size: 20px;margin: 0px;    text-align: center;
    padding: 10px;
    ">المحترف لتطوير وتسويق العقار  </h1></div>

	        <ul class="list-unstyled components ">








	          <li>
                    <a href="{{ route('cities') }}" class="nav-item nav-link"  style="text-align: end;font-size: 20px;"> المدن  <i class="fa fa-city"></i></a>


	          </li>
	          <li>
                    <a href="{{ route('regions') }}" class="nav-item nav-link"  style="text-align: end;font-size: 20px;"> المناطق  <i class="fa fa-city"></i></a>


	          </li>
              <li>
                    <a href="{{ route('neighborhoods') }}" class="nav-item nav-link"  style="text-align: end;font-size: 20px;"> الأحياء  <i class="fa fa-city"></i></a>


	          </li>
              <li>
                    <a href="{{ route('properties') }}" class="nav-item nav-link"  style="text-align: end; font-size: 20px;">  العقارات <i class="fa fa-building"></i></a>


	          </li>
              <li>
                    <a href="{{ route('owner') }}" class="nav-item nav-link"  style="text-align: end; font-size: 20px;">  المالك  <i class="fa fa-user"></i></a>


	          </li>
              <li>
                <a class="sub-btn tt" style=" font-size: 18px; text-align: end;    margin: 0px; " ><i class="fas fa-angle-left dropdown"style="margin-right: 110px;"></i> طلبات العقارات </a>
                <div class="sub-menu">
                    <a href="{{ route('pending_requests') }}"style="font-size: 18px; text-align: end;   margin: 0px;" class="sub-item tt">طلبات معلقة  <i class="fa fa-house"></i></a>
                    <a href="{{ route('requests_accepted') }}" class="sub-item tt" style="font-size: 18px; text-align: end;  margin: 0px;">طلبات مقبولة  <i class="fa fa-house"></i></a>
                    <a href="{{ route('requests_rejected') }}" class="sub-item tt" style="font-size: 18px;text-align: end;     margin: 0px;"> طلبات مرفوضة <i class="fa fa-house"></i></a>
                </div>
	          </li>
 <li>
                                      <a href="{{ route('contectadmin') }}"  class="nav-item nav-link"  style="text-align: end; font-size: 20px;">  الإشعارات  <i class="fa fa-bell"></i></a>



	          </li>


	        </ul>



    	</nav>

        <!-- Page Content  -->

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
