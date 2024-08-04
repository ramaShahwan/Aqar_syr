	<!-- Footer -->
	<style>
	.gradient-custom-foot {
		/* fallback for old browsers */
		background: #6a11cb !important;

		/* Chrome 10-25, Safari 5.1-6 */
		background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 0.9), rgba(37, 117, 252, 0.9)) !important;

		/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		background: linear-gradient(to left, #1a395b, #d6e0eb) !important ;
	}
    </style>
	<footer class="footer">
		<div class="footer_main gradient-custom-foot">
			<div class="container">
				<div class="row">

					<div class="col-lg-9 d-flex flex-column align-items-start justify-content-end">
                    <div class="footer_logo"><a href="#"><img src="{{asset('images/ph.png')}}" alt="" style=" width:200px"></a></div>
					</div>
				</div>
				<div class="row">
				<div class="col-lg-3">
                <div class="footer_title" style="color:#7c7373; font-size:30px;">المحترف للتسويق العقار</div>
					</div>

					<div style="    display: flex;
    flex-direction: row-reverse; margin-left: 200px;    margin-top: -110px;">
                        <div style="      margin-left: 100px;"><h3 style="color:#ffffff">للتواصل</h3></div>
                        <div style="    margin-left: 30px;"> <h5 style="color:#ffffff;font-size: 20px;">الهاتف : 0966333221</h5>
                        <h5 style="color:#ffffff;direction: rtl;font-size: 20px;">البريد الإلكتروني : engabdulaziz@yahoo.com</h5>

                        </div>

                    </div>

				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-row align-items-center justify-content-start">
                        <div class="footer_nav">
								<ul>
									<li><a href="{{ route('home') }}">الرئيسية</a></li>
									<li><a href="{{ route('about') }}">حول الموقع</a></li>
									<!-- <li><a href="properties.html">المدن</a></li> -->
									<li><a href="{{ route('contact') }}">تواصل</a></li>
									<!-- <li><a href="contact.html">Contact</a></li> -->
								</ul>
							</div>

                            <div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<a  target="_blank" style="font-size:20px; margin-left: 100px">المحترف للتسويق العقار</a>
<!-- <script>document.write(new Date().getFullYear());</script>  -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
