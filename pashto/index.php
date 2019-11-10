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

	<!-- Banner -->
    <!-- Banner -->

	<!-- Main Content -->
	<main class="main-content">
	
		<!-- Upcoming Release -->
<?php include ("pashto_upcoming.php"); ?>
		<!-- Upcoming Release -->

		<!-- Best Seller Products -->
		<?php include ("pashto_best_sel.php"); ?>
		<!-- Best Seller Products -->

		<!-- Add Banners -->
	<?php include ("pashto_cel.php"); ?>
		<!-- Add Banners -->

		<!-- Recomend products -->
		<!-- Recomend products -->

		<!-- Book Collections -->
<?php include ("pashto_b_colc.php"); ?>
		<!-- Book Collections --> 

		<!-- Services -->
        <?php include ("pashto_serv.php");
        ?>
		<!-- Services --> 

		<!-- Timeline -->

		<!-- Timeline --> 

		<!-- Blog Nd Gallery-->
		<?php include ("pashto_blog.php"); ?>
		<!-- Blog Nd Gallery--> 

		<!-- Related Products -->
		<!-- Related Products -->

		<!-- Tweet Slider -->

		<!-- Tweet Slider --> 

	</main>
	<!-- Main Content -->

	<!-- Footer -->
<?php include ("pashto_footer.php"); ?>
	<!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
<?php include ("pashto_respons_menu.php"); ?>
<!-- Slide Menu -->

<!-- View Pages -->
<?php //include ("pashto_model_view.php"); ?>
<!-- View Pages -->

<!-- Login Modal
<div class="modal fade login-modal" id="login-modal">
	<div class="position-center-center" role="document">
		<div class="modal-content">
			<strong>تسجيل</strong>
			<button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="social-options">
				<ul>
					<li><a class="facebook" href="#"><i class="icon-facebook"></i>سجل باستخدام الفيسبوك</a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i>تسجيل عبر تويتر</a></li>
					<li><a class="google" href="#"><i class="icon-google-plus"></i>تسجيل مع جوجل</a></li>
				</ul>
			</div>
			<form class="sending-form">
				<div class="form-group">
					<input class="form-control" required="required" placeholder="الاسم الكامل">
					<i class="icon-user"></i>
				</div>
				<div class="form-group">
					<input class="form-control" required="required" placeholder="عنوان البريد الإلكتروني">
					<i class="icon-user"></i>
				</div>
				<div class="form-group">
					<input class="form-control" type="password" required="required" placeholder="كلمه السر">
					<i class="icon-user"></i>
				</div>
				<p class="terms">الشروط والأحكام <a href="#">كنت توافق على هذه</a></p>
				<button class="btn-1 shadow-0 full-width">تسجيل حساب</button>
			</form>
		</div>
	</div>
</div>
<!-- Login Modal -->

<!-- Quick View -->
<?php include ("pashto_q_view.php"); ?>
<!-- Quick View -->

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
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.pp').text('د کتاب نوم : '+recipient)
        modal.find('.pp').val(recipient)

        modal.find('.type').text(autype)
        modal.find('.type').val(autype)

        modal.find('.autn').text(author)
        modal.find('.autn').val(author)

        modal.find('.img').attr('src','../images/upcoming-release/thumb/'+image)
        modal.find('.img').val(image)

        modal.find('.now').text(bprice+' افغانۍ')
        modal.find('.now').val(bprice)

        modal.find('.bb').text(body)
        modal.find('.bb').val(body)

    });

</script>
</body>
</html>