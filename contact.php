<!doctype html>
<html class="no-js" lang="en">
<?php
include("connection.php") ;
session_start() ;
$page = "home";
$site_lang = "English" ;
if(isset($_SESSION["language"]))
    $site_lang = $_SESSION["language"] ;


include "admin_4/config.php";
include "admin_4/core.php";

$db=new core();

if (isset($_POST['btn']))
{
    $body=$_POST['body'];
    $name=$_POST['fullname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    $query="insert into messages(name,email,body,phone) VALUES ('$name','$email','$body','$phone')";
    $run=$db->insert($query);
    header("location:contact.php?msg=your message has sent!");
}
?>


<html class=" js flexbox flexboxlegacy canvas canvastext webgl touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en">
<meta charset="utf-8" />
<head>
    <?php include ('head.php') ?>
    <script src="jquery.js"></script>
</head>
<body>
<!-- Wrapper -->
<div class="wrapper push-wrapper">

    <!-- Header -->
    <?php require ('header.php'); ?>
    <!-- Header -->
    <div class="parallax-window inner-banner tc-padding overlay-dark " data-parallax="scroll" data-image-src="images/inner-banner/img-01.jpg">
        <div class="container">
            <div class="inner-page-heading h-white">
                <h2>Contact us </h2>
                <p style="color: white;">Fell free and contact us for the new and upcoming books</p>
            </div>
        </div>
    </div>
	<!-- breadcrumb -->
  	<div class="breadcrumb-holder white-bg">
  		<div class="container">
  			<div class="breadcrumbs">
  				<ul>
  					<li><a href="#">Home</a></li>
  					<li>Contact us</li>
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
								<span class="address-icon"><i class="fa fa-map-marker"></i></span>
								<h6>Address</h6>
								<strong>Shop nom: 203 </strong>
								<p>Afghan market ,Jalalabad Afghanistan</p>
							</div>
						</div>
						<!-- Column -->

						<!-- Column -->
						<div class="col-lg-3 col-xs-6 r-full-width">
							<div class="address-column">
								<span class="address-icon"><i class="fa fa-volume-control-phone"></i></span>
								<h6>Phone No.</h6>
								<strong>0093(0)777-626-161</strong>
								<p>You can call any time feel free and call us.</p>
							</div>
						</div>
						<!-- Column -->

						<!-- Column -->
						<div class="col-lg-3 col-xs-6 r-full-width">
							<div class="address-column">
								<span class="address-icon"><i class="fa fa-envelope"></i></span>
								<h6>Email</h6>
								<strong>Momand.books@gmail.com</strong>
								<p>this email is offical for momand books production</p>
							</div>
						</div>
						<!-- Column -->

						<!-- Column -->
						<div class="col-lg-3 col-xs-6 r-full-width">
							<div class="address-column">
								<span class="address-icon"><i class="fa fa-share-alt"></i></span>
								<h6>Fallow us</h6>
								<ul class="social-icons">
				                	<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
				                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
				                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
				                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
				                </ul>
								<p>Follow us in the social media with above links</p>
							</div>
						</div>
						<!-- Column -->

					</div>
				</div>
				<!-- Address Columns -->

				<!-- Contact Map -->

				<!-- Contact Map -->
                <?php if (isset($_GET['msg'])){
                    ?>
                    <div class="alert alert-success"><?php echo $_GET['msg'];?></div>
                <?php } ?>
				<!-- Form -->
				<div class="form-holder">

					<!-- Secondary heading -->
	        		<div class="sec-heading">
	        			<h3>Contact Form</h3>
	        		</div>
	        		<!-- Secondary heading -->

	        		<!-- Sending Form -->
	        		<form action="contact.php" method="post" class="sending-form">
	        			<div class="row">
	        				<div class="col-sm-12">
			        			<div class="form-group">
			        				<textarea class="form-control" name="body" required="required" rows="5" placeholder="Text here..."></textarea>
			        				<i class="fa fa-pencil-square-o"></i>
			        			</div>
		        			</div>
		        			<div class="col-sm-4">
			        			<div class="form-group">
			        				<input class="form-control" name="fullname" required="required" placeholder="Full name">
			        				<i class="fa fa-user"></i>
			        			</div>
		        			</div>
		        			<div class="col-sm-4">
			        			<div class="form-group">
			        				<input class="form-control" name="phone" required="required" placeholder="Phone no.">
			        				<i class="fa fa-phone"></i>
			        			</div>
		        			</div>
		        			<div class="col-sm-4">
			        			<div class="form-group">
			        				<input class="form-control" name="email" required="required" placeholder="Email">
			        				<i class="fa fa-envelope"></i>
			        			</div>
		        			</div>
		        			<div class="col-xs-12">
			        			<button type="submit" name="btn" class="btn-1 shadow-0 sm">send message</button>
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
    <?php include("footer.php"); ?>
    <!-- Footer -->

</div>
<!-- Wrapper -->
<!-- Slide Menu -->
<?php include "resp_menu.php"; ?>
<!-- Slide Menu -->

<!-- View Pages -->
<?php include ("model_view.php");?>
<!-- View Pages -->


<!-- Quick View -->
<?php include ("q_view.php"); ?>
<!-- Quick View -->

<!-- Switcher  Panel -->

<!-- Switcher Panel -->

<!-- Java Script -->
<?php include ("script1.php") ; ?>
<!-- Switcher JS -->
<form action="change.php" hidden method="post" id="lang_form"><input type="hidden" name="lang" id="lang_input"></form>
<script>
    function language_change(lang) {
        $("#lang_input").val(lang);
        $("#lang_form").submit();
        $.ajax({
            type:"POST" ,
            url : "change.php" ,
            data :"lang="+lang   ,
            success : function(data){
                //                location.reload() ;
                alert(data);
            }
        });
    }

    $('#quick-view').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var author=button.data('whatever1')
        var image=button.data('whatever2')
        var body=button.data('whatever3')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Book Title : ' + recipient)
        modal.find('.modal-body pp').val(recipient)

        modal.find('.autn').text('author name : ' + author)
        modal.find('.autn').val(author)

        modal.find('.img').attr('src','images/add-banners/add-books/'+image)
        modal.find('.img').val(image)


        modal.find('.bb').text(body)
        modal.find('.bb').val(body)

    });

</script>

	<!-- Footer -->
</body>
</html>