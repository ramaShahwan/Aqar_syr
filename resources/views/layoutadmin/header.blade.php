<!-- Header -->
<style>
    .main_nav ul li a:hover {
    /* font-weight: 500; */
    padding: 0px;
}
 </style>
<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="#"><img src="{{asset('images/tt.png')}}" alt=""  height="100px"></a>
						</div>
						<nav class="main_nav" >
							<ul>
                            @if(auth()->check() && auth()->user()->role === 'admin')
    <li><a href="{{ route('dashboardd') }}">لوحة التحكم</a></li>
@endif

                            @if(auth()->check())
    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">تسجيل خروج</a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@else
    <li><a href="{{ route('login') }}">تسجيل دخول</a></li>
@endif
                            <li><a href="{{route('contact')}}">تواصل</a></li>
                            @if(auth()->check() && auth()->user()->role === 'user')

                            <li><a href="{{url('show')}}">الوكلاء العقاريين</a></li>
                            <li><a href="{{ url('getMyEstate') }}">طلب عقاري</a></li>
                            @endif
                            <li><a href="{{route('about')}}">من نحن</a></li>
                            <li class="active"><a href="{{route('home')}}">الرئيسية</a></li>








								<!-- <li><a href="#">تسجيل الدخول</a></li> -->

							</ul>
						</nav>
						<!-- <div class="phone_num ml-auto">
							<div class="phone_num_inner">
								<img src="images/phone.png" alt=""><span>0966333221</span>
							</div>
						</div> -->
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo">
				<a href="#">
					<div class="logo_container d-flex flex-row align-items-start justify-content-start">
						<div class="logo_image"><div><img src="{{asset('images/tt.png')}}" alt=""  height="100px"></div></div>
					</div>
				</a>
			</div>
			<ul>
				<li class="active"><a href="{{route('home')}}">الرئيسية</a></li>
								<li><a href="{{route('about')}}">من نحن</a></li>
                                @if(auth()->check() && auth()->user()->role === 'user')

                                <li><a href="{{url('show')}}">الوكلاء العقاريين</a></li>
								<li><a href="{{ url('getMyEstate') }}">طلب عقاري</a></li>
                                @endif
								<li><a href="{{route('contact')}}">تواصل</a></li>
                                @if(auth()->check())
    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">تسجيل خروج</a>
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@else
    <li><a href="{{ route('login') }}">تسجيل دخول</a></li>
@endif
@if(auth()->check() && auth()->user()->role === 'admin')
    <li><a href="{{ route('dashboardd') }}">لوحة التحكم</a></li>
@endif
			</ul>
		</div>
		<div class="menu_phone"><span>0966333221 </span>للتواصل</div>
	</div>

	<!-- Home -->
