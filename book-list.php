<?php
include "admin_4/config.php";
include "admin_4/core.php";

$db=new core();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php include ('head.php') ?>
    <script src="jquery.js"></script>
    <script>
        function showResult(str)
        {
            if (str.length==0)
            {
                document.getElementById("livesearch").innerHTML="";
                document.getElementById("livesearch").style.border="0px";
                return;
            }
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
                    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET","data-book.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
    <script>
        $(document).ready(function(){
            $("#result").onkeyup(function(){
                $("#livesearch").slideDown("slow");
            });
        });
    </script>
    <style type="text/css">
        #livesearch,#flip
        {

            font-weight: bold;
            font-family: "Noto Naskh Arabic";
            font-size: 20px;
        }
        #panel
        {
        }
    </style>
</head>
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
    <?php require ('header.php'); ?>

	<!-- Header -->
    <div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="images/inner-banner/img-04.jpg">
        <div class="container">
            <div class="inner-page-heading h-white">
                <h2>All Books</h2>
            </div>
        </div>
    </div>
	<!-- breadcrumb -->
  	<div class="breadcrumb-holder white-bg">
  		<div class="container">
  			<div class="breadcrumbs">
  				<ul>
  					<li><a href="#">Home</a></li>
  					<li>All Books</li>
  				</ul>
  			</div>
  		</div>
  	</div>
  	<!-- Breadcrumb -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- Book List -->
		<div class="tc-padding">
			<div class="container">
				<div class="row">
					
					<!-- Content -->
					<div class="col-md-8 col-md-offset-2 ">

						<!-- Book List Header -->
						<div class="book-list-header">
							
							<!-- Heading -->
							<h4>All Books</h4>

							<!-- Heading -->


                            <!-- Filter Nav
                            <div class="filter-tags-holder">
                                <ul id="filterbale-nav" class="option-set">
                                    <li><a class="selected" data-filter="*" href="#">All General</a></li>
                                    <li><a data-filter=".business" href="#">Business</a></li>
                                    <li><a data-filter=".science" href="#">Science</a></li>
                                    <li><a data-filter=".fiction" href="#">Fiction</a></li>
                                    <li><a data-filter=".philosopy" href="#">Philosopy</a></li>
                                    <li><a data-filter=".biography" href="#">Biography</a></li>
                                </ul>
                            </div>
                            <!-- Filter Nav -->

						</div>
						<!-- Book List Header -->
                        <form>
                            <label>Live Search&nbsp;:</label><br> <input  type="text" placeholder="Search for published and upcoming books!" id="result" size="30" onkeyup="showResult(this.value)">
                            <br>
                            <br>
                            <div id="livesearch" class="list-blog"></div>
                        </form>
						<!-- Book List Widgets -->

						<div class="gallery-masonry">
                            <?php
                            if (isset($_GET['page']))
                            {
                                $page=(int)$_GET['page'];
                            }
                            else
                            {
                                $page=1;
                            }
                            if (isset($_GET['per_page']) && $_GET['per_page']<=50)
                            {
                                $per_page=(int)$_GET['per_page'];
                            }
                            else{
                                $per_page=4;
                            }
                            if ($page>1)
                            {
                                $start=($page*$per_page-$per_page);
                            }
                            else
                            {
                                $start=0;
                            }
                            $query="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id limit $start,$per_page";
                            $result=$db->select($query);
                            while ($data=$result->fetch_array()):

                            ?>
							<div class="book-list-widget masonry-grid business">
                                <span class="availability">Available :<strong>Momand Books Store<i class="fa fa-check-circle"></i></strong></span>
								<span class="heart-batch"><i class="fa fa-heart"></i></span>
								<div class="book-list-detail">
									<img width="109px" height="164px" src="images/upcoming-release/thumb/<?php echo $data['pic'];?>" alt="">
									<div class="detail">
										<span>by <?php echo $data['auth_name'] ?></span>
										<div class="book-name">
											<h5><?php echo $data['bname']; ?><span><?php echo $data['ct_name'] ?></span></h5><strong>Afg&nbsp;<?php echo $data['book_price'] ?></strong>
										</div>
										<p style="width: 600px;"><?php echo $data['btext']; ?></p>
	    							</div>
								</div>
								<div class="book-list-btm">
									<div class="user-likes">
										<ul>
											<li><img width="30px" height="30px" src="images/aurthors/<?php echo $data['photo']; ?>" alt=""></li>
											<li><?php echo $data['type']; ?></li>
										</ul>
									</div>
									<div class="like-nd-share">
										<ul>
											<li><a href="#"><i class="fa fa-share-alt"></i>Share</a></li>
										</ul>
									</div>
								</div>
							</div>
                            <?php endwhile; ?>
						</div>
						<!-- Book List Widgets -->
                        <?php
                        $queryforcount="select * from bookcata";
                        $resultforcout=$db->select($queryforcount);

                        $countfor=$resultforcout->num_rows;

                        $pages=ceil($countfor/$per_page);

                        ?>
						<!-- Pagination -->
		           		<div class="pagination-holder">
		           			<ul class="pagination">
                                <?php   ?>

                               <?php  ?>
                                <?php
                                for ($x=1;$x<=$pages;$x++):
                                    if ($page==$x)
                                    {
                                        ?>
                                        <li><a href="?page=<?php echo $x-1; ?>" aria-label="Previous">Prev</a></li>
                                        <li class="active"><a><?php echo $x; ?></a></li>
                                        <li><a href="?page=<?php echo $x+1; ?>" aria-label="Next">Next</a></li>
                                    <?php }
                                    else{
                                        ?>
                                        <li ><a href="?page=<?php echo $x; ?>&perpage=<?php echo $per_page; ?>"><?php echo $x; ?></a></li>

                                    <?php }
                                endfor;

                                ?>

							</ul>
		           		</div>
		           		<!-- Pagination -->

					</div>
					<!-- Content -->

					<!-- Aside -->
					<!-- Aside -->

				</div>
			</div>
		</div>
		<!-- Blog All Views -->

	</main>
	<!-- Main Content -->

	<!-- Footer -->
	<?php include ("footer.php"); ?>
	<!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->
<!-- Quick View -->

<!-- Java Script -->
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