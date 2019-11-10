<?php
include "../admin_4/config.php";
include "../admin_4/core.php";

$db=new core();

if (isset($_POST['btn']))
{
    $body=$_POST['body'];
    $name=$_POST['fullname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    $query="insert into messages(name,email,body,phone) VALUES ('$name','$email','$body','$phone')";
    $run=$db->insert($query);
    header("location:contact.php?msg=ستاسې پیغام ولیږل شو!");
}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content=""/>
<!-- Document Title -->
    <title>مومند خپرندوی ټولنه</title>
    <link rel="short icon" href="../images/favLogo.png">

<!-- StyleSheets -->
<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/rtl.css">
<link rel="stylesheet" href="css/color-1.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/transition.css">

<!-- FontsOnline -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:300,300italic,400italic,400,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900italic,900,100italic,100' rel='stylesheet' type='text/css'>

<!-- JavaScripts -->
<script src="js/modernizr.js"></script>
</head>
<body>

<!-- Wrapper -->
<div class="wrapper push-wrapper">

	<!-- Header -->
<?php include "headerd.php"; ?>
	<!-- Header -->

  	<!-- Inner Banner -->
  	<div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="images/inner-banner/img-08.jpg">
  		<div class="container">
  			<div class="inner-page-heading h-white style-2">
  				<h2>مونږ سره اړیکه ونیسئ</h2>
  				<p>د نوو چاپ شو او چاپیدونکو کتابونو لپاره مونږ سره په اړیکه کې شئ!</p>
  			</div>
  		</div>
  	</div>
  	<!-- Inner Banner -->

	<!-- breadcrumb -->
  	<div class="breadcrumb-holder white-bg">
  		<div class="container">
  			<div class="breadcrumbs">
  				<ul>
  					<li>اړیکه</li>
                    <li><a href="index.php">کورپاڼه</a></li>
  				</ul>
  			</div>
  		</div>
  	</div>
  	<!-- Breadcrumb -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- Contant Holder -->
		<div class="tc-padding">
			<div class="container">

				<!-- Address Columns -->
				<div class="tc-padding-bottom">
					<div class="row">
				
						<!-- Column -->
						<div class="col-lg-3 col-xs-6 r-full-width">
							<div class="address-column">
								<span class="address-icon"><i class="icon-map-marker"></i></span>
								<h6>ادرس</h6>
								<strong>جلال اباد ښار افغان مارکیټ دوکان نمبر ۱۵</strong>
								<p></p>
							</div>
						</div>
						<!-- Column -->

						<!-- Column -->
						<div class="col-lg-3 col-xs-6 r-full-width">
							<div class="address-column">
								<span class="address-icon"><i class="icon-volume-control-phone"></i></span>
								<h6>د اړیکو شمیره</h6>
								<strong>00+123-456-789</strong>
								<p></p>
							</div>
						</div>
						<!-- Column -->

						<!-- Column -->
						<div class="col-lg-3 col-xs-6 r-full-width">
							<div class="address-column">
								<span class="address-icon"><i class="icon-envelope"></i></span>
								<h6>اړیکه د بریښنالیک له لاری</h6>
								<strong>momand.books@gmail.com</strong>
								<p></p>
							</div>
						</div>
						<!-- Column -->

						<!-- Column -->
						<div class="col-lg-3 col-xs-6 r-full-width">
							<div class="address-column">
								<span class="address-icon"><i class="icon-share-alt"></i></span>
								<h6>مونږ تعقیب کړئ</h6>
								<ul class="social-icons">
				                	<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
				                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
				                </ul>
								<p></p>
							</div>
						</div>
						<!-- Column -->

					</div>
				</div>
				<!-- Address Columns -->

				<!-- Contact Map -->
                <?php if (isset($_GET['msg'])){
                    ?>
                    <div class="alert alert-success"><?php echo $_GET['msg'];?></div>
                <?php } ?>
				<!-- Form -->
				<div class="form-holder">

					<!-- Secondary heading -->
	        		<!-- Secondary heading -->

	        		<!-- Sending Form -->
                    <form action="contact.php" method="post" class="sending-form">
	        			<div class="row">
	        				<div class="col-sm-12">
			        			<div class="form-group">
			        				<textarea class="form-control"  name="body" required="required" rows="5" placeholder="پیغام مو دلته ولیکئ"></textarea>
			        				<i class="icon-pencil-square-o"></i>
			        			</div>
		        			</div>
		        			<div class="col-sm-4">
			        			<div class="form-group">
			        				<input class="form-control" name="fullname" required="required" placeholder="خپل مکمل نوم مو ولیکئ">
			        				<i class="icon-user"></i>
			        			</div>
		        			</div>
		        			<div class="col-sm-4">
			        			<div class="form-group">
			        				<input class="form-control" name="phone" required="required" placeholder="شمیره مو ولیکئ">
			        				<i class="icon-phone"></i>
			        			</div>
		        			</div>
		        			<div class="col-sm-4">
			        			<div class="form-group">
			        				<input class="form-control" name="email" required="required" placeholder="بریښنا لیک مو ولیکئ">
			        				<i class="icon-envelope"></i>
			        			</div>
		        			</div>
		        			<div class="col-xs-12">
			        			<button name="btn" type="submit" class="btn-1 shadow-0 sm">پیغام مو ولیږئ</button>
		        			</div>
	        			</div>
	        		</form>
	        		<!-- Sending Form -->

				</div>
				<!-- Form -->

			</div>
		</div>
		<!-- Contant Holder -->

	</main>
	<!-- Main Content -->

	<!-- Footer -->
	<?php include "pashto_footer.php"; ?>
	<!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
<?php include "pashto_respons_menu.php"; ?>
<!-- Slide Menu -->
<!-- Java Script -->
<script src="js/jquery.js"></script>        
<script src="js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/gmap3.min.js"></script>					
<script src="js/datepicker.js"></script>						
<script src="js/bigslide.js"></script>							
<script src="js/turn.js"></script>							
<script src="js/jquery-ui.js"></script>								
<script src="js/mcustom-scrollbar.js"></script>			
<script src="js/parallax.js"></script>			   	 
<script src="js/countdown.js"></script>	
<script src="js/countTo.js"></script>		
<script src="js/appear.js"></script>				 		
<script src="js/hoverdir.js"></script>			 		
<script src="js/slick.js"></script>			 		
<script src="js/prettyPhoto.js"></script>			
<script src="js/isotope.pkgd.js"></script>						
<script src="js/classie.js"></script>					
<script src="js/main.js"></script>		
</body>
</html>