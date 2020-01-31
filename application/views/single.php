
<!-- header -->
<?php 
	if ($this->session->userdata('isLogin')==TRUE) {
		$this->load->view('navbar/navbarloginproduk');
	}
	else {
		$this->load->view('navbar/navbarproduk');
	}

 ?>

 <!--flex slider-->
<script defer src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css" type="text/css" media="screen" />
<script>
 // Can also be used with $(document).ready()
 $(window).load(function() {
   $('.flexslider').flexslider({
  animation: "slide",
  controlNav: "thumbnails"
   });
 });
</script>
<!--flex slider-->

<script src="<?php echo base_url(); ?>assets/js/imagezoom.js"></script>
<!-- //js -->

<div class="products">	 
		<div class="container">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<?php foreach ($detail as $key ) { ?>
								<li data-thumb="<?php echo base_url(); ?>assets/images/<?php echo $key->gambar;?>">
									<div class="thumb-image detail_images"> <img src="<?php echo base_url(); ?>assets/images/<?php echo $key->gambar;?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="<?php echo base_url(); ?>assets/images/<?php echo $key->gambar;?>">
									 <div class="thumb-image"> <img src="<?php echo base_url(); ?>assets/images/<?php echo $key->gambar;?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
							</ul>
						</div>
					</div>
					
						
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"><?php echo $key->nama_produk?></h3>
						<p>Processing Time: Item will be shipped out within 2-3 working days. </p>
						<div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">20 reviews</li>
								<li><a href="#">Add your review</a></li>
							</ul> 
						</div>
						<div class="single-price">
							<ul>
								<li>Rp <?php echo $key->harga;?></li>  
								<li><del>Rp 165.132</del></li> 
								<li><span class="w3off">10% OFF</span></li> 
								<li>Ends on: Nov,10th</li>
								<li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
							</ul>	
						</div> 
						<p class="single-price-text"><?php echo $key->deskripsi?> </p>
						<form action="<?php 
											if ($this->session->userdata('isLogin')==TRUE) {
												echo base_url('Single/tambah_cart');
											}
											else {
												echo base_url('Home/login');
											}
											
											?>" method="post">
							<input type="hidden" name="gambar" value="<?php echo $key->gambar;?>" /> 
							<input type="hidden" name="nama_barang" value="<?php echo $key->nama_produk;?>" /> 
							<input type="hidden" name="harga" value="<?php echo $key->harga;?>" />
							<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
						</form>
						<button class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</button>
					</div>
				   <div class="clearfix"> </div>  
				</div>
			</div> 
				<?php } ?>
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<h3 class="w3ls-title">About this item</h3> 
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Details <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								Nourish and purify with one amazing mask! Rich clays dive deep to purge dirt and oils from pores. Nutrient-rich Vitamin E, Avocado and Oatmeal moisturize for lasting skin softness. Skin looks and feels squeaky clean and is soft to the touch. Perfect for normal to combination skin.
								Key Ingredients:Avocado Oil,Oatmeal,Kaolin Clay. <br> Water/Aqua/Eau, Kaolin, Bentonite, Titanium Dioxide, Propylene Glycol, Magnesium Aluminum Silicate, Colloidal Oatmeal, Tocopherol, Persea Gratissima (Avocado) Oil, Caprylic/Capric Triglyceride, Montmorillonite, Disodium Edta, Sodium Polyacrylate (Veegum Ultra), Diazolidinyl Urea, Methylparaben, Propylparaben, Methylchloroisothiazolinone, Methylisothiazolinone, Fragrance (Parfum), Yellow 5 (CI 19140), Blue 1 (CI 42090).<br>

							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> How to Use <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a> 
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								Apply mask to face and neck, avoiding contact with eyes. Let dry and rinse with warm water. Use two times a week or as often as needed.
								Precautions: Avoid application to the eye area. If eye contact occurs, rinse thoroughly with water.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> reviews (1) <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								I have sensitive, very oily acneprone skin and huge pores. This mask has been a staple for me for years. I use it 4-5 times a week at night and it is noticeable when I don't (i.e. skin starts to clog right on up!). I occasionally overdo Benzoyl Peroxide & this mask seems to calm my skin a bit from the redness. Yes, it is hard to wash off, but is well worth it!
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<i class="fa fa-question-circle fa-icon" aria-hidden="true"></i> help <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body">
								Q&A Product
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //collapse --> 
		</div>
	</div>
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
<!-- //newsletter -->


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
