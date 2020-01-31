<!-- header -->
<!DOCTYPE html>
<html lang="en">
<head>
<title>GoGlow: Toko Online Masker Wajah</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Jual Masker Wajah Murah, Sheet Mask, Clay Mask, Peel Off, Gel Mask, Scrub Mask, Powder Mask" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</head>

<body>
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="<?php echo base_url(''); ?>Home"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" style="width: 17%" /></a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-6 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li class=""><a href="<?php echo base_url(''); ?>Home" class="hyper "><span>Home</span></a></li>	
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Product<b class="caret"></b></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo base_url(''); ?>claymask"><i class="fa fa-angle-right" aria-hidden="true"></i>Clay Mask</a></li>
									<li><a href="<?php echo base_url(''); ?>sheetmask"><i class="fa fa-angle-right" aria-hidden="true"></i>Sheet Mask</a></li>
									<li><a href="<?php echo base_url(''); ?>peeloff"> <i class="fa fa-angle-right" aria-hidden="true"></i>Peel Off</a></li>
									<li><a href="<?php echo base_url(''); ?>gel"><i class="fa fa-angle-right" aria-hidden="true"></i>Gel Mask</a></li>
									<li><a href="<?php echo base_url(''); ?>scrub"><i class="fa fa-angle-right" aria-hidden="true"></i>Scrub Mask</a></li>
									<li><a href="<?php echo base_url(''); ?>powder"><i class="fa fa-angle-right" aria-hidden="true"></i>Powder Mask</a></li>
								</ul>
						</li>
						
						<li class="active"><a href="<?php echo base_url(''); ?>Home/about" class="hyper"><span>About</span></a></li>
						
					</ul>
				</div>
			</nav>
		</div>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>
		<div class="col-md-3 search-agileinfo">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>
		</div>
		<div class="col-md-1 cart-wthree">
			<div class="cart"> 
				<form action="<?php echo base_url(''); ?>Home/login" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
			</div>
		</div>
		<div class="col-md-2 navigation-agileits">
			<nav class="navbar navbar-default">
				
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav ">
						<li><a href="<?php echo base_url(); ?>Home/login" class="hyper"><i class="fa fa-user"></i>Login</a><li>

					</ul>
				</div>
			</nav>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</body>
</html>