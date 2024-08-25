@extends('layout.master')
@section('content')
<!-- Home -->

<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/pp.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start" style="    direction: rtl;">
							<div class="home_title" style="color: #FFFFFF;
    background: #274565;
    padding: 7px;
    ">حول الموقع</div>
							<!-- <div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="index.htmo">Home</a></li>
									<li>About us</li>
								</ul>
							</div> -->
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

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">

				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="section_title">معلومات حول الموقع</div>
						<div class="section_subtitle" style="font-weight: 900;">أهداف الموقع</div>
						<div class="about_text" style="text-align: end;">
							<p>نحن شركة متخصصة في تقديم خدمات عقارية متكاملة، نقدم خدمات شراء وبيع العقارات، إدارة الأملاك، تأجير الوحدات السكنية والتجارية، تقييم العقارات، وتقديم استشارات عقارية، يتألف فريقنا من محترفين متخصصين في مجال العقارات، يعملون على تحقيق أهداف عملائنا وتلبية احتياجاتهم علماً أننا نقوم بفحص العقار بالتعاون مع شركة بيلدنغ رانك ونعطي تقرير فني عن كل عقار يتم تسويقه من خلالنا </p>
                            <a href=" https://www.buildingranks.com/" class="blu" style="color: #1d3c5d;border-bottom: 2px solid #1d3c5d;">Building Rank </a>
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-6">
					<div class="about_image"><img src="images/photo_2024-05-28_13-57-10.jpg" alt=""></div>
				</div>
			</div>
			<!-- <div class="row milestones_row">


				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/milestones_1.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="651">0</div>
							<div class="milestone_text">Properties Sold</div>
						</div>
					</div>
				</div>


				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/milestones_2.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="1256">0</div>
							<div class="milestone_text">Happy Clients</div>
						</div>
					</div>
				</div>


				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/milestones_3.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="124">0</div>
							<div class="milestone_text">Buildings Sold</div>
						</div>

					</div>
				</div>


				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/milestones_4.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="25">0</div>
							<div class="milestone_text">Awards Won</div>
						</div>
					</div>
				</div>

			</div> -->
		</div>
	</div>

@endsection
