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

<!-- banner -->


<!-- product -->
<div class="banner-bootom-w3-agileits">
  <div class="container">

 <table class="table">
  <tr id= "main_heading">
    <td width="2%">No</td>
    <td width="10%">Gambar</td>
    <td width="33%">Item</td>
    <td width="17%">Harga</td>
    <td width="20%">Qty</td>
    <td width="10%">Jumlah</td>
    <td width="10%">Hapus</td>

  </tr>

      <?php
        $harga_total=0;
        $no_produk=0;
       foreach ($keranjang as $key){ 
        $harga_total = $key->harga + $harga_total ;
        $no_produk=$no_produk+1;
        ?>
        
      
  <tr>
    <td><?php echo $no_produk; ?></td>
    <td><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/<?php echo $key->gambar; ?>"/></td>
    <td><?php echo $key->nama_barang; ?></td>
    <td>Rp <?php echo $key->harga; ?></td>
    <td><input type="text" class="form-control input-sm" name="cart" value="1" /></td>
    <td>Rp <?php echo $key->harga; ?></td>
    <td><a href="" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
  </tr>
  <?php } ?>
<tr>
  <td colspan="3"><b>Order Total: Rp <?php echo $harga_total; ?></b></td>
  <td colspan="4" align="right">
  <form action="<?php echo base_url(); ?>keranjang/check_out" method="POST">
    <input type="hidden" name="harga_total" value="<?php echo $harga_total; ?>">
  <button type="submit"  class ='btn btn-sm btn-primary'>Check Out</button></td>
  </form>
</tr>
 
</table>
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