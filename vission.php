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
                <h2>About Us / Vision & Mission</h2>
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
                    <li>vision & mission</li>
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
                        <h2>Vision & Mission <span class="theme-color">& values</span></h2>
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
                                <strong>
                                    <font style="font-weight: bold;">Our  mission  is  to  provide  you  w
                                        ith  the  highest  quality
                                        services  possible  in  a  timely
                                        fashion  at  a competitive price.</font>

                                    <font style="font-weight: bold;"> We promise to listen to you and help you achieve your business goals.
                                        We will always be there with honest,</font>
                                    <font style="font-weight: bold;">Expert advice and quick, friendly customer service.
                                        Our goal is to meet and exceed your expectations.</font>
                                </strong>
                                <p>Momand Book Store is an international bookstore that harnesses the power of capitalism to bring literacy and
                                    opportunity to people around the world.</p>
                                <p> We are driven to provide customers with a highly
                                    -
                                    valued experience, and one
                                    that allows them to align their
                                    actions  with  their  values.  We  want  to  be  their  favorite  marketplace  and  their  favorite  partner,  so  we
                                    incorporate their input into everything we do.</p>
                                <a href="readmore.php" class="btn-1 shadow-0">Read more<i aria-hidden="true" class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- Mission Disc -->

                        <!-- Laptop Img -->
                        <div class="col-sm-6">
                            <div class="laptop-img">
                                <img class="floating" src="images/laptop.png" alt="">
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
        <section class="tc-padding white-bg">
            <div class="container">

                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading style-2">
                        <h2>Our <span class="theme-color">Creative Team</span></h2>
                        <p>We are committed to providing first-class services to the writers who trust us</p>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Team Slider -->
                <div class="team-slider">

                    <!-- Team Colmun -->
                    <div class="item">
                        <div class="team-column">
                            <div class="team-img">
                                <img src="images/ddd.png" alt="">
                                <div class="overlay-padding">
                                    <div class="overlay">
                                        <ul class="position-center-center">
                                            
                                            <li>Mob 0781 626 161</li>
                                            <li>Email: info@momandbook.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-detail">
                                <h5>Najeeb Momand</h5>
                                <span>Director CEO</span>
                            </div>
                            <div class="team-btm">
                                <ul class="social-icons">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Colmun -->

                    <!-- Team Colmun -->
                    <div class="item">
                        <div class="team-column">
                            <div class="team-img">
                                <img src="images/3rd.jpg" alt="">
                                <div class="overlay-padding">
                                    <div class="overlay">
                                        <ul class="position-center-center">
                                             
                                        <li>Mob 0781 626 161</li>
                                            <li>Email: info@momandbook.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-detail">
                                <h5>Fazel Maula Momand</h5>
                                <span>Co-founder</span>
                            </div>
                            <div class="team-btm">
                                <ul class="social-icons">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Colmun -->

                    <!-- Team Colmun -->
                    <div class="item">
                        <div class="team-column">
                            <div class="team-img">
                                <img src="images/2nd.png" alt="">
                                <div class="overlay-padding">
                                    <div class="overlay">
                                        <ul class="position-center-center">
                                           
                                        <li>Mob 0781 626 161</li>
                                            <li>Email: info@momandbook.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-detail">
                                <h5>Emalyar Sajid</h5>
                                <span>Graphic Designer</span>
                            </div>
                            <div class="team-btm">
                                <ul class="social-icons">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Colmun -->

                    <!-- Team Colmun -->
                    <div class="item">
                        <div class="team-column">
                            <div class="team-img">
                                <img src="images/1st.jpg" alt="">
                                <div class="overlay-padding">
                                    <div class="overlay">
                                        <ul class="position-center-center">
                                        <li>Mob 0781 626 161</li>
                                            <li>Email: info@momandbook.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team-detail">
                                <h5>Hidayatullah Adil</h5>
                                <span>Graphic Designer</span>
                            </div>
                            <div class="team-btm">
                                <ul class="social-icons">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Team Colmun -->

                </div>
                <!-- Team Slider -->

            </div>
        </section>
        <!-- Team -->

        <!-- Partners -->
       
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