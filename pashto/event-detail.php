<?php
include "../admin_4/config.php";
include "../admin_4/core.php";
$db=new core();

$id=$_GET['id'];

$allblog="SELECT * FROM blog,user,catagories WHERE user.id=blog.user_id AND blog.blog_id='$id' AND catagories.cid=blog.cate_id AND blog.approve='1'";

$allresult=$db->select($allblog);

$allrow=$allresult->fetch_array();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content=""/>
<!-- Document Title -->
<title>Bookstore HTML5 Template</title>

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
    <link href="http://fonts.googleapis.com/css?family=Noto+Sans%3A400%2C700&subset=latin%2Clatin-ext&ver=2.5" rel="stylesheet">
    <link rel="stylesheet" id="vce_font_0-css" href="http://fonts.googleapis.com/css?family=%3A400%2C700&amp;subset=latin%2Clatin-ext&amp;ver=2.5" type="text/css" media="screen">
    <link rel="stylesheet" id="vce_font_1-css" href="http://fonts.googleapis.com/css?family=Noto+Sans%3A400%2C700&amp;subset=latin%2Clatin-ext&amp;ver=2.5" type="text/css" media="screen">
<!-- JavaScripts -->
<script src="js/modernizr.js"></script>
</head>
<body>

<!-- Wrapper -->
<div class="wrapper push-wrapper">

	<!-- Header -->
    <?php include ("headerd.php"); ?>
	<!-- Header -->

	<!-- Inner Banner -->
  	<div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="images/inner-banner/img-01.jpg">
  		<div class="container">
  			<div class="inner-page-heading h-white">
  				<h2><?php echo $allrow['headingp'];?> </h2>
  			</div>
  		</div>
  	</div>
  	<!-- Inner Banner -->

	<!-- breadcrumb -->
  	<div class="breadcrumb-holder white-bg">
  		<div class="container">
  			<div class="breadcrumbs">
  				<ul>
  					<li>بلاګ بشپړ لوستل</li>
                    <li><a href="gallery.php">ټول بلاګونه</a></li>

  					<li> <a href="index.php">کورپاڼه</a></li>
  				</ul>
  			</div>
  		</div>
  	</div>
  	<!-- Breadcrumb -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- Blog List -->
		<div class="tc-padding">
			<div class="container">
				<div class="row">

					<!-- Content -->
					<div class="col-lg-9 col-md-8 pull-right pull-none-768">

						<!-- Event Organizar -->
						<div class="event-organizar style-1">
							<img style="width: 47px; height: 47px" src="../assets/layouts/layout4/img/<?php echo $allrow['pic']; ?>" alt="">
							<span><i><?php echo $allrow['fullname']; ?></i></span>
						</div>
						<!-- Event Organizar -->

						<!-- blog Detail -->
						<div class="single-event-detail">
							<h2><?php echo $allrow['headingp']; ?></h2>
							<ul class="meta-post">
								<li><i class="icon-map-marker"></i><?php echo $allrow['pt_name']; ?></li>
								<li><i class="icon-calendar"></i><?php echo $allrow['date']; ?><i class="icon-clock-o"></i></li>
							</ul>
                            <div class="large-blog-img">
                                <img width="720px" height="404px" src="../images/large-blog/<?php echo $allrow['photo']; ?>" alt="">
                            </div>
							<div class="social-text">
								<ul class="social-icons">
				                	<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
				                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
				                    <li>Share</li>
				                </ul>
								<p><?php echo $allrow['pashto_body'];  ?></p>

							</div>
						</div>
						<!-- blog Detail -->

						<!-- Related Events -->
						<!-- Related Events -->

						<!-- Comments Holder -->
						<!-- Comments Holder -->

						<!-- Form -->
						<!-- Form -->

					</div>
					<!-- Content -->

					<!-- Aside -->
					<aside class="col-lg-3 col-md-4 col-xs-12 pull-left pull-none-768">

						<!-- Aside Widget -->
						<div class="aside-widget">
							<h6>تازه لیکنې</h6>
							<ul class="s-arthor-list style-2">
                                <?php
                                $queryforf="select * from blog WHERE approve='1' ORDER BY blog_id DESC limit 5";
                                $resultf=$db->select($queryforf);

                                while ($run=$resultf->fetch_array()):

                                    ?>
								<li>
									<div class="s-arthor-wighet">
										<div class="s-arthor-img">
											<img width="45px" height="45px" src="../images/large-blog/<?php echo $run['photo']; ?>" alt="">
										</div>
										<div class="s-arthor-detail">
											<h6><a href="event-detail.php?id=<?php echo $run['blog_id'];  ?>"><?php echo $run['headingp'];?></a></h6>
											<span><?php echo $run['date']; ?></span>
										</div>
									</div>
								</li>
                                <?php endwhile; ?>
							</ul>
						</div>
						<!-- Aside Widget -->
					</aside>
					<!-- Aside -->

				</div>
			</div>
		</div>
		<!-- Blog List -->

	</main>
	<!-- Main Content -->

	<!-- Footer -->
	<?php include ("pashto_footer.php"); ?>
	<!-- Footer -->

</div>
<!-- Wrapper -->

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