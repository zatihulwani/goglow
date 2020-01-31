<!-- header -->
<?php 
	if ($this->session->userdata('isLogin')==TRUE) {
		$this->load->view('navbar/navbarloginproduk');
	}
	else {
		$this->load->view('navbar/navbarproduk');
	}

 ?>

<!-- isi -->
<div class="content">
	<div class="container">
		<div class="col-md-4 w3ls_dresses_grid_left">
			
			
			<div class="w3ls_dresses_grid_left_grid">
				<div class="dresses_img_hover">
					<img src="<?php echo base_url(); ?>assets/images/header.jpg" alt=" " class="img-responsive" />
					<div class="dresses_img_hover_pos">
						<h4>Upto<span>15%</span><i>Off</i></h4>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-8 col-sm-8 women-dresses">
			<?php foreach ($scrub as $key ) { ?>
			
			<div class="">
				<div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
					<a href="<?php echo base_url('Scrub/detail_produk/'.$key->id_produk); ?>"><div class="product-img">
						<img src="<?php echo base_url(); ?>assets/images/<?php echo $key->gambar;?>" alt="" />
						<div class="p-mask">
							<form action="<?php 
											if ($this->session->userdata('isLogin')==TRUE) {
												echo base_url('Scrub/tambah_cart');
											}
											else {
												echo base_url('Home/login');
											}
											
											?>" method="post">
								<input type="hidden" name="gambar" value="<?php echo $key->gambar;?>" /> 
								<input type="hidden" name="nama_barang" value="<?php echo $key->nama_produk;?>" /> 
								<input type="hidden" name="harga" value="<?php echo $key->harga;?>" /> 
								<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
						</div>
					</div></a>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					<h4><?php echo $key->nama_produk;?></h4>
					<h5>Rp <?php echo $key->harga;?></h5>
				</div>
			</div>

			<?php } ?>	
				
		</div>
		
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