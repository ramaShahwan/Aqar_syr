	<!-- Header -->
    <style>
        body{

        }
        .gradient-custom {
  /* fallback for old browsers */
  background: #6a11cb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 0.9), rgba(37, 117, 252, 0.9));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to left, #1a395b, #d6e0eb);

}
.border-nav{

display: inline-block;
  /* font-weight: 400; */
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

  /* padding: .375rem .75rem; */
  font-size: 1rem;
  line-height: 1.5;
  border-radius: .25rem;
  /* border-top:40px!important;
  border-top-color:#FFFFFF !important; */
  font-family: "Changa", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;


}
.border-nav:hover{
  background-color:#334f6e!important;
  height: 100px!important;
  width: 130px!important;
  padding-top:30px!important;
  border-top:40px!important;
  border-top-color:#FFFFFF !important;


}




.image{
    height: 220px;
     width: 310px;

}
.ip{

        font-size:20px;

}
.ip:hover{
        font-size:25px;
    }

    </style>

	<header class="header gradient-custom" style="border-bottom: none;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start" style="margin-left: 100px;">
                    <div class="logo">
					<a href="#"><img src="{{asset('images/Untitled-4.png')}}" alt="" style="margin-left: -140px; height: 90px;"></a>
                            <!-- <a href="#"><img src="{{asset('images/Untitled-1.png')}}" alt="" style=" height: 100px;margin-top: 20px;"></a> -->

						</div>


						<nav class="main_nav" >
							<ul>
                            <li style="    position: relative;"><a href="{{ route('login') }}" class="   border-nav"    style=" color: white;font-size: 20px; line-height: 1.5;">تسجيل دخول </a>
                            <!-- <span class="spn" style="color: wheat;position: absolute;
    top: -40px;
    left: 40px;font-size: 15px;
    height: 16px;
    background: wheat;">_______________</span> -->
    </li>
                            <li><a href="{{ route('contact') }}" class=" border-nav"  style=" color: white;font-size: 20px; line-height: 1.5;">تواصل</a></li>
                            <!-- <li><a href="{{ route('home') }}" class=" border-nav"   style=" color: white;font-size: 20px; line-height: 1.5;">المدن</a></li> -->
                            <li><a href="{{ route('about') }}" class=" border-nav"    style=" color: white;font-size: 20px; line-height: 1.5;">من نحن  </a></li>

                            <li ><a href="{{ route('home') }}"class=" border-nav"   style=" color: white;font-size: 20px; line-height: 1.5;">الرئيسية</a></li>




                               <li style="margin-left: 70px;" >  <form class="form-inline my-2 my-lg-0" action="{{url('property/search')}}" method="get">
                                   <input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search" name="search" style="text-align: end; width: 140px;">
                                   <!-- <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="width: 80px;">بحث</button> -->
                                   <i class="fa-solid fa-magnifying-glass ip" style="color:#ffff; "></i>
                                  </form></li>
                                <!-- @if (auth('sanctum')->user())
                                <li><a href="{{ route('dashboardd') }}" class=" btn btn-sm  border-nav" >لوحة التحكم</a></li>
                                @endif -->


							</ul>
						</nav>
                        <!-- <div class="phone_num ml-auto">
							<div class="phone_num_inner">
								<img src="images/phone.png" alt=""><span>0987654321</span>
							</div>
						</div> -->

						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>
