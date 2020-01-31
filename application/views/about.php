<!-- header -->
<!-- header -->
<?php 
	if ($this->session->userdata('isLogin')==TRUE) {
		$this->load->view('navbar/navbarloginabout');
	}
	else {
		$this->load->view('navbar/navbarabout');
	}

 ?>

<!-- isi -->
</div>
<div class="sub-banner">
</div>
<div class="about">
	<div class="container"> 
		<h3>About Us</h3>
		<div class="about-info">
			<div class="col-md-8 about-grids">
				<h4>Our latest collection</h4>
				<p>Here is the latest face mask products!. </p>		
					<div class="about-w3ls-row">
						<script type="text/javascript">
								 $(window).load(function() {
									$("#flexiselDemo3").flexisel({
										visibleItems:2,
										animationSpeed: 1000,
										autoPlay: false,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems:2
											}, 
											landscape: { 
												changePoint:640,
												visibleItems:2
											},
											tablet: { 
												changePoint:768,
												visibleItems:2
											}
										}
									});
									
								});
						</script>
						<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.flexisel.js"></script> 
						<ul id="flexiselDemo3">
							<li>
								<img src="<?php echo base_url(); ?>assets/images/cmin3.jpg" class="img-responsive" alt="" />
							</li>
							<li> 
								<img src="<?php echo base_url(); ?>assets/images/sheetmask5.jpg" class="img-responsive" alt="" />
							</li>
							<li> 
								<img src="<?php echo base_url(); ?>assets/images/cm5.jpg" class="img-responsive" alt="" />
							</li>
							<li> 
								<img src="<?php echo base_url(); ?>assets/images/gel1.jpg" class="img-responsive" alt="" />
							</li>
						</ul> 
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="col-md-4 about-grids">
					<h4>Our Advantages</h4>
					<div class="pince">
						<div class="pince-left">
							<h5>01</h5>
						</div>
						<div class="pince-right">
							<p>Delivering effective beauty products to make your daily life more fun and exciting!.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>02</h5>
						</div>
						<div class="pince-right">
							<p>We work hard in bringing you the best face masks to you at affordable prices.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>03</h5>
						</div>
						<div class="pince-right">
							<p>We will continuously be adding new products so please keep checking us out!.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>04</h5>
						</div>
						<div class="pince-right">
							<p>efficient and convenient procurement process.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- about-bottom -->
	<div class="about-bottom">
		<div class="container">
			<h3> Flat <span>25%</span> Off</h3>
			<h4>On claymask</h4>
			<a href="<?php echo base_url(''); ?>Home/claymask">Shop Now</a>
		</div>
	</div>
<!-- //about-bottom -->
<!--team-->

<!--team-->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h2>Newsletter</h2>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Subscribe" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-6 footer-grids fgd1">
		<a href="index.html"><h3>GoGlow</h3></a>
		<ul>
			<li>Pogung Baru Blok A</li>
			<li>DI Yogyakarta.</li>
			<li><a href="mailto:goglow@gmail.com">goglow@gmail.com</a></li>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-6 footer-grids fgd2">
			<h4>Contact Us:</h4> 
			<ul>
				<form action="#" method="post" id="contact_us">
					<input type="text" width="800" ="" name="name" placeholder="Nama" required=""><br><br>
					<input type="email" width="800"name="email" placeholder="Email" required=""><br><br>
					<input type="text" width="800"name="phone" placeholder="Nomor Hp" required=""><br><br>
					<textarea name="question" width="800" form="contact_us">Masukkan pertanyaanmu</textarea><br><br>
					<button type="submit" class="btn btn-default">Send</button>
			</form>
			</ul>
		</div>
		
		<div class="clearfix"></div>
		<p class="copy-right">© 2020 GoGlow Masker Wajah </p>
	</div>
</div>

</body>
</html>