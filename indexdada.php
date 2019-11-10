<?php
include("connection.php") ;
session_start() ;
$page = "home";
$site_lang = "English" ;
if(isset($_SESSION["language"]))
    $site_lang = $_SESSION["language"] ;
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

	<!-- Main Content -->
	<main class="main-content">

		<!-- Upcoming Release -->
		<?php include("upcoming.php"); ?>
		<!-- Upcoming Release -->

		<!-- Best Seller Products -->
		<?php include("best_sel.php"); ?>
		<!-- Best Seller Products -->

		<!-- Add Banners -->
		<?php include('cel.php'); ?>
		<!-- Add Banners -->

		<!-- Recomend products -->
		<?php //include "recom.php"; ?>
		<!-- Recomend products -->

		<!-- Book Collections -->
		<?php include "b_colc.php"; ?>
		<!-- Book Collections -->

		<!-- Services -->
		<?php include "service.php" ;?>

		<!-- Services -->

		<!-- Timeline -->
		<?php // include "time.php"; ?>
		<!-- Timeline -->

		<!-- Blog Nd Gallery-->
		<?php include "blog.php"; ?>
		<!-- Blog Nd Gallery-->

		<!-- Related Products -->
		<?php // include "r_all.php"; ?>
		<!-- Related Products -->

		<!-- Tweet Slider -->
		<?php // include "tweet.php"; ?>
		<!-- Tweet Slider -->

	</main>
	<!-- Main Content -->

	<!-- Footer -->
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
<?php //include ("q_view.php"); ?>
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
</script>
</body>
</html>