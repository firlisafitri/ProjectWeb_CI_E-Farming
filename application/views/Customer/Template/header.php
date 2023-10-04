<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Farming</title>
    <link href="<?php echo base_url().'assets/Frontend/css/bootstrap.min.css'?>" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <link href="<?php echo base_url().'assets/Frontend/css/prettyPhoto.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/Frontend/css/price-range.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/Frontend/css/animate.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/Frontend/css/main.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/Frontend/css/responsive.css'?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url().'assets/Frontend/images/ico/favicon.ico'?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url().'assets/Frontend/images/ico/apple-touch-icon-144-precomposed.png'?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url().'assets/Frontend/images/ico/apple-touch-icon-114-precomposed.png'?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url().'assets/Frontend/images/ico/apple-touch-icon-72-precomposed.png'?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url().'assets/Frontend/images/ico/apple-touch-icon-57-precomposed.png'?>">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.html"><img src="<?php echo base_url().'assets/Frontend/images/logo.png'?>" alt="" /></a>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href ="<?php echo base_url().'index.php/Customer'?>"><i class="fa fa-user"></i> Welcome <?php echo $this->session->userdata('ses_name')?></a></li>
								<li><a href="<?php echo base_url().'index.php/Customer/status_bayar'?>"><i class="fa fa-crosshairs"></i> Status Belanja</a></li>
								<li><a href="<?php echo base_url().'index.php/Customer/checkout'?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?php echo base_url().'index.php/Customer/keranjang'?>"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="<?php echo base_url().'index.php/Login/logout'?>"><i class="fa fa-lock"></i> Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url().'index.php/Customer'?>" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo base_url().'index.php/Customer'?>">Products</a></li>
										<li><a href="<?php echo base_url().'index.php/Customer/keranjang'?>">Cart</a></li>
                                    </ul>
                                </li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->