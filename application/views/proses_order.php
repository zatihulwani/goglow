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
<h2>Proses Order sukses</h2>
<br> </br>
<br> </br>


<div class="text-center">
<p>Terima kasih sudah berbelanja di toko Masker Wajah Goglow. Order Anda sudah masuk ke database kami, silakan cek email untuk proses pembayaran.<br>
Jangan segan mengontak kami jika ada permasalahan!</p>
<br> </br>
<br> </br>
<br> </br>
<br> </br>
<br> </br>

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