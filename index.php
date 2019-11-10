<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content=""/>
    <!-- Document Title -->
    <title>Momand Books Store</title>

    <!-- StyleSheets -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/color-1.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/transition.css">
    <link rel="short icon" href="images/favLogo.png">

    <!-- Online Lib -->
    <link rel="stylesheet" href="http://www.atlasestateagents.co.uk/css/tether.min.css">
    <script src="http://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>

    <!-- Switcher CSS -->
    <link href="./switcher/switcher.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" id="skins" href="./css/default.css" type="text/css" media="all">

    <!-- FontsOnline -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:300,300italic,400italic,400,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900italic,900,100italic,100' rel='stylesheet' type='text/css'>

    <!-- JavaScripts -->
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<!-- Preloader -->
<!-- <div id="status">
	<div id="preloader">
		<div class="preloader position-center-center">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</div> -->
<!-- Preloader -->

<!-- Wrapper -->
<div class="wrapper push-wrapper">

    <!-- Header -->
    <?php include("header.php"); ?>
    <!-- Header -->

    <!-- Main Content -->
    <main class="main-content">

        <!-- Upcoming Release -->
        <?php include ("upcoming.php"); ?>
        <!-- Upcoming Release -->

        <!-- Best Seller Products -->
        <?php include ("best_sel.php"); ?>
        <!-- Best Seller Products -->

        <!-- Add Banners -->
        <?php include ("cel.php"); ?>
        <!-- Add Banners -->

        <!-- Recomend products -->

        <!-- Recomend products -->

        <!-- Book Collections -->
        <?php include ("b_colcpr.php"); ?>
        <?php //include ("b_colc.php"); ?>
        <!-- Book Collections -->

        <!-- Services -->
       <?php include ("service.php"); ?>
        <!-- Services -->

        <!-- Timeline -->

        <!-- Timeline -->

        <!-- Blog Nd Gallery-->
        <?php include ("blog.php"); ?>
        <!-- Blog Nd Gallery-->

    </main>
    <!-- Main Content -->

    <!-- Footer -->
    <?php include ("footer.php"); ?>
    <!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
<?php include ("resp_menu.php"); ?>
<!-- Slide Menu -->

<!-- View Pages -->
<?php include ("model_view.php"); ?>
<!-- View Pages -->

<!-- Login Modal -->
<!-- Login Modal -->

<!-- Quick View -->
<?php include ("q_view.php"); ?>
<!-- Quick View -->

<!-- Switcher  Panel -->
<!-- Switcher Panel -->

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
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    $('#quick-view').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var author=button.data('whatever1')
        var image=button.data('whatever2')
        var body=button.data('whatever3')
        var autype=button.data('whatever4')
        var bprice=button.data('whatever5')
        var bpages=button.data('whatever6')
        var bprint=button.data('whatever7')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.pp').text('Book Title :'+recipient)
        modal.find('.pp').val(recipient)

        modal.find('.type').text(autype)
        modal.find('.type').val(autype)

        modal.find('.autn').text(author)
        modal.find('.autn').val(author)

        modal.find('.img').attr('src','images/upcoming-release/thumb/'+image)
        modal.find('.img').val(image)

        modal.find('.now').text(bprice)
        modal.find('.now').val(bprice)

        modal.find('.bb').text(body)
        modal.find('.bb').val(body)

        modal.find('.nop').text(bpages)
        modal.find('.nop').val(bpages)


        modal.find('.printb').text(bprint)
        modal.find('.printb').val(bprint)



    });

</script>
</body>
</html>