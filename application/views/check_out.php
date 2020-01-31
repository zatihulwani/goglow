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
<br> </br>
<h2>Konfirmasi Check Out</h2>
<br> </br>
<div class="kotak2">
<?php
        
        echo "<h4>Total Belanja: Rp.$harga_total</h4>";    
?>
<br> </br>
<form class="form-horizontal" action="<?php echo base_url()?>keranjang/proses_order" method="post" name="frmCO" id="frmCO">
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
            <div class="col-xs-9" style="width: 50%">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="firstName">Nama :</label>
            <div class="col-xs-9" style="width: 50%">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="lastName">Alamat:</label>
            <div class="col-xs-9" style="width: 50%">
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">Telp:</label>
            <div class="col-xs-9" style="width: 50%">
                <input type="tel" class="form-control" name="telp" id="telp" placeholder="No Telp">
            </div>
        </div>
         
        <div class="form-group  has-success has-feedback">
            <div class="col-xs-offset-3 col-xs-9">
                <form action="<?php echo base_url()?>keranjang/proses_order/" method="POST">
                    <input type="hidden" name="harga_toal" value="<?php echo $harga_total; ?>">
                <button type="submit" class="btn btn-primary">Proses Order</button>
                </form>
            </div>
        </div>
    </form>
    <?php
    
   
    ?>
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