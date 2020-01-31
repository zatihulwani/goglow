<!-- header -->
<?php 
	if ($this->session->userdata('isLogin')==TRUE) {
		$this->load->view('navbar/navbarlogin');
	}
	else {
		$this->load->view('navbar/navbarhome');
	}

 ?>
<!-- isi -->

<!-- banner -->
<div class="banner-agile">
	<div class="container">
		<h2>INNISFREE CLAY MASK</h2>
		<h3>SALE UP TO <span>25%</span></h3>
		<p>Diskon Innisfree Jeju Volcanic Clay Mask hingga 25%
			<br>sampai 31 Desember 2020. </p>
		<a href="<?php echo base_url(); ?>Home/about">Read More</a>
	</div>
</div>

<!-- product -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="<?php echo base_url(''); ?>scrub"><div class="bb-left-agileits-w3layouts-inner">
					<h3>SCRUB MASK</h3>
			</div></a>
		</div>
		<div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
			<a href="<?php echo base_url(''); ?>powder"><div class="bb-middle-top">
				<h3>POWDER MASK</h3>
			</div></a>
			<a href="<?php echo base_url(); ?>sheetmask"><div class="bb-middle-bottom">
				<h3>SHEET MASK</h3>
			</div></a>
		</div>
		<div class="col-md-3 bb-grids bb-right-agileits-w3layouts">
			<a href="<?php echo base_url(''); ?>gel"><div class="bb-right-top">
				<h3>GEL MASK</h3>
			</div></a>
			<a href="<?php echo base_url(); ?>claymask"><div class="bb-right-bottom">
				<h3>CLAY MASK</h3>
			</div></a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
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