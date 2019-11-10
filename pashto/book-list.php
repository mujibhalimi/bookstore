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
    <link href="http://fonts.googleapis.com/css?family=Noto+Sans%3A400%2C700&subset=latin%2Clatin-ext&ver=2.5" rel="stylesheet">
    <link rel="stylesheet" id="vce_font_0-css" href="http://fonts.googleapis.com/css?family=%3A400%2C700&amp;subset=latin%2Clatin-ext&amp;ver=2.5" type="text/css" media="screen">
    <link rel="stylesheet" id="vce_font_1-css" href="http://fonts.googleapis.com/css?family=Noto+Sans%3A400%2C700&amp;subset=latin%2Clatin-ext&amp;ver=2.5" type="text/css" media="screen">
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

<!-- Wrapper -->
<div class="wrapper push-wrapper">

	<!-- Header -->
	<?php include ("headerd.php"); ?>
	<!-- Header -->

  	<!-- Inner Banner -->
  	<div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="images/inner-banner/img-04.jpg">
  		<div class="container">
  			<div class="inner-page-heading h-white style-2">
  				<h2>ټول چاپ شوې اوچاپیدونکي کتابونه</h2>
  				<p>د نوو چاپ شو او چاپیدونکو کتابونو لپاره لاندې لیست وګورئ او د پلټنئ ځائ څخه استفاده وکړئ</p>
  			</div>
  		</div>
  	</div>
  	<!-- Inner Banner -->

	<!-- breadcrumb -->
  	<div class="breadcrumb-holder white-bg">
  		<div class="container">
  			<div class="breadcrumbs">
  				<ul>
  					<li>ټول کتابونه</li>
                    <li><a href="index.php">کورپاڼه</a></li>
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
                    <div class="col-md-8 col-md-offset-2">

						<!-- Book List Header -->
						<div class="book-list-header">
							
							<!-- Heading -->
							<h4>ټول کتابونه</h4>
							<!-- Heading -->
<br>
							<!-- Filter Nav -->

							<!-- Filter Nav -->

						</div>
						<!-- Book List Header -->
                        <form>
                            <label>ژوندې بڼه پلټنه&nbsp;:</label><br> <input  type="text" placeholder="د چاپ شوو او چاپیدونکو کتابونو لپاره دلته پلټنه وکړئ" id="result" size="30" onkeyup="showResult(this.value)">
                            <br>
                            <br>
                            <div id="livesearch" class="list-blog"></div>
                        </form>
						<!-- Book List Widgets -->
						<div   class="gallery-masonry">

                            <!-- Book List Widgets -->
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
                                <span class="availability"><strong> مومند کتاب پلورنځي کې شته دی<i class="icon-check-circle"></i></strong></span>
								<span class="heart-batch"><i class="icon-heart"></i></span>
								<div class="book-list-detail">
									<img width="109px" height="164px" src="../images/upcoming-release/thumb/<?php echo $data['pic'];?>" alt="">
									<div class="detail">
										<span><?php echo $data['p_author_name']; ?></span>
										<div class="book-name">
											<h5><?php echo $data['pbookname']; ?>&nbsp;&nbsp;<?php echo $data['book_price']; ?>&nbsp;افغانۍ<span>د کتاب قیمت</span></h5><strong></strong>
										</div>
										<div class="has-layout">

										</div>
										<p style="padding-left: 500px"><?php echo $data['pbooktext']; ?></p>
	    							</div>
								</div>
								<div class="book-list-btm">
									<div class="user-likes">
										<ul>
											<li><img width="30px" height="30px" src="../images/aurthors/<?php echo $data['photo']; ?>" alt=""></li>
											<li><?php echo $data['type_p']; ?></li>
										</ul>
									</div>
									<div class="like-nd-share">
										<ul>
											<li><a href="#"><i class="icon-share-alt"></i>شریکول</a></li>
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
                                <?php
                                for ($x=1;$x<=$pages;$x++):
                                    if ($page==$x)
                                    {
                                        ?>
                                        <li><a href="?page=<?php echo $x-1; ?>" aria-label="Previous">وروسته</a></li>
                                        <li class="active"><a><?php echo $x; ?></a></li>
                                        <li><a href="?page=<?php echo $x+1; ?>" aria-label="Next">مخکې</a></li>
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