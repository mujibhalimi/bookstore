<?php
include "../admin_4/config.php";
include "../admin_4/core.php";

$db=new core();
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
<link href="https://fonts.googleapis.com/css?family=Cairo:300,400,600,700,900|Mirza:400,500,600,700" rel="stylesheet">

<!-- JavaScripts -->
<script src="js/modernizr.js"></script>
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

<!-- Wrapper -->
<div class="wrapper push-wrapper">

	<!-- Header -->
	<?php include ("headerd.php"); ?>
	<!-- Header -->

  	<!-- Inner Banner -->
  	<div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="images/inner-banner/img-04.jpg">
  		<div class="container">
  			<div class="inner-page-heading h-white style-2">
  				<h2>ټول ویب بلاګونه</h2>
  				<p>که لیکوال یا ژباړن یاستئ! لیکنې مو پر دغه ویبپاڼه پریږدئ.</p>
  			</div>
  		</div>
  	</div>
  	<!-- Inner Banner -->

	<!-- breadcrumb -->
  	<div class="breadcrumb-holder white-bg">
  		<div class="container">
  			<div class="breadcrumbs">
  				<ul>
                    <li>ټول ویب بلاګونه</li>
  					<li><a href="index.php">کورپاڼه</a></li>

  				</ul>
  			</div>
  		</div>
  	</div>
  	<!-- Breadcrumb -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- Gallery -->
		<div class="tc-padding">
			<div class="container">
	            <div class="gallery m-0">

                    <form>
                        <input type="text" placeholder="د ویب بلاګ پلټل" id="result" size="30" onkeyup="showResult(this.value)">
                        <br>
                        <br>

                        <div id="livesearch" class="list-blog"></div>

                    </form>
	        		<!-- Gallery List -->
		            <ul id="hover-dir" class="gallery-list style-2">
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
		                <li>
							<img src="../images/large-blog/<?php echo $data['photo']; ?>" alt="">
	                  		<div class="overlay">
	                  			<ul class="position-center-x">
                                    <p style="color: white;"><?php echo $data['headingp']; ?></p>
                                    <li><a href="event-detail.php?id=<?php echo $data['blog_id']; ?>"><i class="icon-book"></i>&nbsp;بشپړ لوستل</a></li>
	                  				<li><a href="../images/large-blog/<?php echo $data['photo']; ?>" data-rel="prettyPhoto[gallery]"><i class="icon-plus"></i></a></li>
	                  			</ul>
	                  		</div>
		                </li>
                        <?php endwhile; ?>
		            </ul>
		            <!-- Gallery List -->
                    <?php
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