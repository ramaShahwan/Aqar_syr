@extends('layout.master')
@section('content')
<style>
      .ii:hover{
        font-size:20px;
    }
    .iii:hover{
        font-size:22px;
    }
</style>
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/property_6.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start" style="    direction: rtl;">
							<div class="home_title" style="color: #FFFFFF;background: #274565;
    padding: 7px;">التواصل</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Home Search -->
	<!-- <div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_content">
							<form action="#" class="search_form d-flex flex-row align-items-start justfy-content-start">
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<div>
										<select class="search_form_select">
											<option disabled selected>اختار المدينة</option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>اختار المنطقة</option>
											<option>Type 1</option>
											<option>Type 2</option>
											<option>Type 3</option>
											<option>Type 4</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>اختار الحي</option>
											<option>New York</option>
											<option>Paris</option>
											<option>Amsterdam</option>
											<option>Rome</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>اختار نوع العقار</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div>
									<div>
										<select class="search_form_select">
											<option disabled selected>اختار الغاية من العقار</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
									</div>
								</div>
								<button class="search_form_button ml-auto">بحث</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-4">
					<div class="contact_info">
						<div class="section_title">ابق على تواصل معنا</div>
						<div class="contact_info_content">
							<ul class="contact_info_list">
                            <li>
                                <div style="" class="ree"> <h5 class="ttt" style="color: #203e60;font-size: 16px;
    text-align: start;    "> <i class="fa-solid fa-phone iii" style="margin-right: 15px;color: #203e60;"></i> 0966333221      </h5>
    <!-- <span style="color:black;">_____________________________</span> -->
</div>
								</li>
                                <li>
                                <div style="" class="ree"> <h5 class="ttt" style="color: #203e60;font-size: 16px;
    text-align: start;    "> <i class="fa-solid fa-envelope iii" style="margin-right: 15px;color: #203e60;"></i> engabdulaziz@yahoo.com       </h5>
    <!-- <span style="color:black;">_____________________________</span> -->
</div>
								</li>
								<li>
                                <div style="" class="ree"> <h5 class="ttt serct" style="color: #203e60;font-size: 14px;
    text-align: start;    "> <i class="fa-solid fa-location-dot iii" style="margin-right: 15px;color: #203e60;"></i>حلب - المحافظة - شارع الهندسة      </h5>
    <h5 class="ttt serct" style="color: #203e60;font-size: 14px;text-align: start;     margin-left: 20px;   "> بعد مفرق مديرية التعاون السكني</h5>
    <h5 class="ttt serct" style="color: #203e60;font-size: 14px;text-align: start;     margin-left: 20px;   "> <a href="https://www.google.com/maps/place/%D8%A7%D9%84%D9%85%D8%AD%D8%AA%D8%B1%D9%81+%D9%84%D9%84%D9%87%D9%86%D8%AF%D8%B3%D8%A9+%D9%88%D8%A7%D9%84%D8%A8%D9%86%D8%A7%D8%A1%E2%80%AD/@36.2068136,37.1333305,17z/data=!3m1!4b1!4m6!3m5!1s0x152ff9b114a1c0bd:0xc1a3980f7bb30d7c!8m2!3d36.2068093!4d37.1359054!16s%2Fg%2F11v66ggnb5?entry=ttu" style="color: #09100e; font-weight: 700;">اضغط هنا لاستعراض الموقع  </a>    </h5>
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
						<form action="{{url('contact/store')}}"  method="post" enctype="multipart/form-data" class="contact_form" id="contact_form">
                        @csrf
							<div class="row">
								<!-- Name -->
								<div class="col-lg-6 contact_name_col">
									<input type="text" name="name" class="contact_input serct" placeholder="الاسم" style=" background:#ffff;   text-align: end;padding: 17px;  border: 2px solid black;" required="required">
                                    @error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
								</div>
								<!-- Email -->
								<div class="col-lg-6">
									<input type="text" class="contact_input serct" placeholder="رقم الهاتف" style="  background:#ffff;  text-align: end;padding: 17px;  border: 2px solid black;" name="phone" required="required">
                                    @error('phone')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
								</div>
							</div>
							<!-- <div><input type="text" class="contact_input" placeholder="Subject"></div> -->
							<div><textarea class="contact_textarea contact_input serct" style="  background:#ffff;  text-align: end;padding: 17px;  border: 2px solid black;" placeholder="الرسالة" name="message" required="required"></textarea></div>
							<button type="submit" class="contact_button button" style="font-size: 17px;background:#d1d1d1;width:90px;height:50px;color: #0c3c6d; float: right;">ارسال</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Map -->

	<div class="contact_map">
		<!-- Google Map -->
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div >
                    <div ><img src="images/Untitled-6.png" alt="" style="" class="yy"></div>
                    </div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->



@endsection
