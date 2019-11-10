<!doctype html>
<html class="no-js" lang="en">
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
    <div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="images/inner-banner/img-04.jpg">
        <div class="container">
            <div class="inner-page-heading h-white style-2">
                <h2>About Us / CEO’s Message</h2>
                <p> Spanning fifteen years of work, Everywhere I Look is a book full of unexpected moments,</p>
            </div>
        </div>
    </div>

    <!-- breadcrumb -->
    <div class="breadcrumb-holder white-bg">
        <div class="container">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>About us</li>
                    <li>CEO’s Message</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb -->

    <!-- Main Content -->
    <main class="main-content">

        <!-- Service And Mission -->
        <section class="service-nd-mission tc-padding-top white-bg">
            <div class="container">

                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading style-1">
                        <h2><span class="theme-color">CEO’s Message</span></h2>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Services -->

                <!-- Services -->

                <!-- Mission & values -->
                <div class="mission tc-padding-bottom">
                    <div class="row">

                        <!-- Mission Disc -->
                        <div class="col-lg-6 col-xs-12">
                            <div class="mission-disc">

                                <p><ul> <li><strong><h4>CEO’s Message  : </h4></strong>  <p>
                                    The 21st century is a brave new world of information technology. IT is the major factor affecting our reading habit and the pattern of culture communication, and the traditional labor-intensive printing industry is under a great challenge.
                                    MBS understands the importance of change. Through analyzing and evaluating the core competency of the
                                    corporation, the company aims to transform into a world class advance printing and communications venture.
                                    While improving our current products and services, MBS will also make use of cutting-edge IT and innovative
                                    designs to provide digital management and value-added services for our customers. Together with our partners
                                    and customers, MBS will continue to use our creativity and innovation for sustainable development to create
                                    more value and explore new development patterns, in order to play a more important role in bookselling and
                                    printing industry chain.

                                    Momand Book will continue to grow with our partners and clients. We courage team spirit, seek continuous
                                    improvement, and strive to be a first-class company. Our staff and workers will continue to make contributions
                                    to promoting culture and civilization, as well as enhancing the development of printing industry at home and
                                    abroad.

                                </p>
                                </li></ul></p>
                            </div>
                        </div>
                        <!-- Mission Disc -->

                        <!-- Laptop Img -->
                        <div class="col-sm-6">
                            <div class="laptop-img">
                                <img class="floating" width="400px" height="500px" src="images/ddd.png" alt="">
                            </div>
                        </div>
                        <!-- Laptop Img -->

                    </div>
                </div>
                <!-- Mission & values -->

            </div>
        </section>
        <!-- Service And Mission -->

        <!-- Statistic -->
        <!-- Statistic -->

        <!-- Team -->
        <!-- Partners -->

        <!-- Call Action
        <section class="call-action">
              <div class="container">
                  <div class="action-text">
                    <h3>30% Off <span>Onlinebookshop</span> Top 100 Bestsellers</h3>
                    <strong>Get the bestselling books of 2016 and save!</strong>
                  </div>
                  <a class="btn-1 shadow-0" href="#">View Books</a>
              </div>
        </section>
        <!-- Call Action -->

    </main>
    <!-- Main Content -->

    <!-- Footer -->
    <?php include ("footer.php"); ?>
    <!-- Footer -->

</div>
<!-- Wrapper -->

<?php include "resp_menu.php"; ?>
<!-- Slide Menu -->

<!-- View Pages -->
<?php include ("model_view.php");?>
<!-- View Pages -->


<!-- Quick View -->
<?php include ("q_view.php"); ?>

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
</body>
</html>