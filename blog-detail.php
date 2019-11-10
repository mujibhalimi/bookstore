<?php
include "admin_4/config.php";
include "admin_4/core.php";
$db=new core();

$id=$_GET['id'];

$allblog="SELECT * FROM blog,user,catagories WHERE user.id=blog.user_id AND blog.blog_id='$id' AND catagories.cid=blog.cate_id AND blog.approve='1'";

$allresult=$db->select($allblog);

$allrow=$allresult->fetch_array();
?>
<!doctype html>
<html class="no-js" lang="en">
<?php include "head.php"; ?>
<body>

<!-- Preloader -->
<div id="status">
	<div id="preloader">
		<div class="preloader position-center-center">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</div>
<!-- Preloader -->

<!-- Wrapper -->
<div class="wrapper push-wrapper">

	<!-- Header -->
	<?php include "header.php"; ?>
	<!-- Header -->
    <div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="images/inner-banner/img-11.jpg">
        <div class="container">
            <div class="inner-page-heading h-white">
                <h2><?php echo $allrow['heading'];?></h2>
            </div>
        </div>
    </div>
	<!-- breadcrumb -->
  	<div class="breadcrumb-holder white-bg">
  		<div class="container">
  			<div class="breadcrumbs">
  				<ul>
  					<li><a href="index.php">Home</a></li>
  					<li>Blog Detail</li>
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
					<div class="col-lg-9 col-md-8">

						<!-- Event Organizar -->
						<div class="event-organizar style-1">

							<img style="width: 47px; height: 47px" src="assets/layouts/layout4/img/<?php echo $allrow['pic']; ?>" alt="">
							<span><i><?php echo $allrow['fullname']; ?></i></span>
						</div>
						<!-- Event Organizar -->

						<!-- blog Detail -->
						<div class="single-blog-detail">
							<h2><?php echo $allrow['heading']; ?></h2>
                            <ul class="meta-post">
                                <li><i class="fa fa-map-marker"></i><?php echo $allrow['ct_name']; ?></li>
                                <li><i class="fa fa-calendar"></i><i class="fa fa-clock-o"></i><?php echo $allrow['date']; ?></li>
                            </ul>
							<div class="large-blog-img">
								<img width="720px" height="404px" src="images/large-blog/<?php echo $allrow['photo']; ?>" alt="">
							</div>
							<div class="social-text">
								<ul class="social-icons">
				                	<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
				                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
				                    <li>Share</li>
				                </ul>
								<p><?php echo $allrow['body']; ?></p>

							</div>

						</div>
						<!-- blog Detail -->

						<!-- Related Blog -->
						<div class="related-events">

							<!-- Secondary heading
			        		<div class="sec-heading">
			        			<h3>You may also like this</h3>
			        		</div>
			        		<!-- Secondary heading -->
			        		<!-- Related Blog
							<div class="related-events-slider">
                                <?php
                                $requery="SELECT * FROM blog WHERE approve='1' AND blog_id='$id'";
                                $relate=$db->select($requery);
                                while ($rrow=$relate->fetch_array()) :
                                    $body=$rrow['body'];
                                ?>
								<div class="item">
									<div class="grid-blog">
				    					<div class="grid-blog-img">
				    						<img src="images/grid-blog/img-01.jpg" alt="">
				    					</div>
				    					<div class="product-detail blog-detail">
				    						<span class="date"><i class="fa fa-calendar"></i><?php echo $rrow['date']; ?></span>
				    						<h5><?php echo $rrow['heading']; ?></h5>
				    						<p><?php echo substr($body,0,200);?></p>
				    						<div class="aurthor-detail">
				    							<span><img src="images/book-aurthor/img-01.jpg" alt=""><?php echo $row['fullname']; ?></span>
				    							<a class="add-wish" href="#"><i class="fa fa-share-alt"></i></a>
				    						</div>
				    					</div>
				    				</div>
								</div>
							<?php endwhile; ?>
		    				</div>
		    				Related Blog -->

						</div>
						<!-- Related Blog -->

						<!-- Comments Holder -->
						<!-- Comments Holder -->

						<!-- Form -->
					<?php //include "comment.php"; ?>
						<!-- Form -->

					</div>
					<!-- Content -->

					<!-- Aside -->
					<aside class="col-lg-3 col-md-4">

						<!-- Aside Widget -->
						<div class="aside-widget">
							<h6>Latest Blog</h6>
							<ul class="s-arthor-list style-2">
                                <?php
                                $queryforf="select * from blog WHERE approve='1' ORDER BY blog_id DESC limit 5";
                                $resultf=$db->select($queryforf);

                                while ($run=$resultf->fetch_array()):

                                ?>
								<li>
									<div class="s-arthor-wighet">
										<div class="s-arthor-img">
											<img width="45px" height="45px" src="images/large-blog/<?php echo $run['photo']; ?>" alt="">
										</div>
										<div class="s-arthor-detail">
											<h6><a href="blog-detail.php?id=<?php echo $run['blog_id'];  ?>"><?php echo $run['heading'];?></a></h6>
											<span>Posted on <?php echo $run['date'];?></span>
										</div>
									</div>
								</li>
                                <?php endwhile; ?>
							</ul>
						</div>
						<!-- Aside Widget -->

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
	<?php include "footer.php"; ?>
	<!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
<!-- Java Script -->
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/gmap3.min.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/contact-form.js"></script>
<script src="js/bigslide.js"></script>
<script src="js/3d-book-showcase.js"></script>
<script src="js/turn.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/mcustom-scrollbar.js"></script>
<script src="js/timeliner.js"></script>
<script src="js/parallax.js"></script>
<script src="js/countdown.js"></script>
<script src="js/countTo.js"></script>
<script src="js/owl-carousel.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/appear.js"></script>
<script src="js/sticky.js"></script>
<script src="js/prettyPhoto.js"></script>
<script src="js/isotope.pkgd.js"></script>
<script src="js/wow-min.js"></script>
<script src="js/classie.js"></script>
<script src="js/main.js"></script>

<!-- Switcher JS -->
<script type="text/javascript" src="./switcher/cookie.js"></script>
<script type="text/javascript" src="./switcher/colorswitcher.js"></script>
<!-- Switcher JS -->

</body>
</html>

