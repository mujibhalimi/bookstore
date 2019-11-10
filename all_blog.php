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
            xmlhttp.open("GET","data.php?q="+str,true);
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
            padding:5px;
            text-align:center;
            background-color:white;
            border:solid 1px white;
            font-weight: bold;
            font-family: "Noto Naskh Arabic";
            font-size: 20px;
        }
        #panel
        {
            padding:50px;
            display:none;
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
    <div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="images/inner-banner/img-06.jpg">
        <div class="container">
            <div class="inner-page-heading h-white style-2">
                <h2>All Blogs</h2>
                <p>Mouse over on photo and then click on read button to read blog!</p>
            </div>
        </div>
    </div>
	<!-- breadcrumb -->
  	<div class="breadcrumb-holder white-bg">
  		<div class="container">
  			<div class="breadcrumbs">
  				<ul>
  					<li><a href="index.php">Home</a></li>
  					<li>all blogs</li>
  				</ul>
  			</div>
  		</div>
  	</div>
  	<!-- Breadcrumb -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- Gallery -->
        <div class="gallery tc-padding">
      		<div class="container">
                <form>
                    <input type="text" placeholder="Searching for blog..." id="result" size="30" onkeyup="showResult(this.value)">
                    <br>
                    <br>

                    <div id="livesearch" class="list-blog"></div>

                </form>

                <div class="row no-gutters">
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
                    $query="select * from blog WHERE approve='1' limit $start,$per_page";
                    $result=$db->select($query);
                    while ($data=$result->fetch_array()):

                    ?>
      				<div class="col-lg-3 col-xs-6 r-full-width">
      					<div class="gallery-figure style-2"> 
	                  		<img src="images/large-blog/<?php echo $data['photo']; ?>" alt="">
	                  		<div class="overlay">
	                  			<ul class="position-center-x">
                                    <p style="color: white;"><?php echo $data['heading']; ?></p>
	                  				<li><a href="blog-detail.php?id=<?php echo $data['blog_id']; ?>"><i class="fa fa-book"></i>&nbsp;Read more</a></li>
	                  				<li><a href="images/large-blog/<?php echo $data['photo']; ?>" data-rel="prettyPhoto[gallery]"><i class="fa fa-plus"></i></a></li>

	                  			</ul>
	                  		</div>
	                  	</div>
      				</div>
                    <?php endwhile;
                    $queryforcount="select * from blog WHERE approve='1'";
                    $resultforcout=$db->select($queryforcount);

                    $countfor=$resultforcout->num_rows;

                    $pages=ceil($countfor/$per_page);
                    ?>
      				<div class="col-xs-12">
      					<div class="pagination-holder">
		           			<ul class="pagination">

							    <li><a href="javascript:;" aria-label="Previous">Prev</a></li>
                                <?php
                                for ($x=1;$x<=$pages;$x++):
                                if ($page==$x)
                                {
                                ?>
							    <li class="active"><a><?php echo $x; ?></a></li>
                                <?php }
                                else{
                                ?>
							    <li ><a href="?page=<?php echo $x; ?>&perpage=<?php echo $per_page; ?>"><?php echo $x; ?></a></li>
                                <?php }
                                endfor;
                                ?>
							    <li><a href="javascript:;" aria-label="Next">Next</a></li>
							</ul>
		           		</div>
      				</div>
      			</div>
            </div>
      	</div>
		<!-- Gallery -->

	</main>
	<!-- Main Content -->

	<!-- Footer -->
	<?php include ("footer.php"); ?>
	<!-- Footer -->

</div>
<!-- Wrapper -->

<!-- Slide Menu -->

<!-- Slide Menu -->

<!-- View Pages -->
<!-- View Pages -->

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