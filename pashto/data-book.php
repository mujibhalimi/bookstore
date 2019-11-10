<?php
ini_set('display_errors', "0");
ini_set('error_reporting', E_ALL ^ E_NOTICE ^ E_STRICT);
$name = $_GET['q'];
include("../admin_4/config.php");

include("../admin_4/core.php");

$db = new core();
$bname = '%' . $name . '%';
$query = "SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND bookcata.pbookname LIKE '$bname'";

$res = $db->select($query);


$row = $res->fetch_array();
$bname = $row['pbookname'];
$pic = $row['pic'];
$author_name = $row['p_author_name'];
$ct_name = $row['pt_name'];
$book_price = $row['book_price'];
$btext = $row['pbooktext'];
$aut_type = $row['type_p'];
$auth_photo = $row['photo'];
echo $row['pbookname'];


                        echo '<div class="gallery-masonry">';

                        echo '<div class="book-list-widget masonry-grid business">';
                        echo '  <span class="availability"><strong> مومند کتاب پلورنځي کې شته دی<i class="icon-check-circle"></i></strong></span>
								<span class="heart-batch"><i class="icon-heart"></i></span> ';
                            echo '<div class="book-list-detail">
								<img style="float: right;" width="109px" height="164px" src="../images/upcoming-release/thumb/' . $pic . '" alt="">
				            		<div class="detail">
										<span>د'.$aut_type.'&nbsp;نوم :'. $author_name . ' </span> 
                                        ';

                            echo '<div class="book-name">
                            	<h5>'.$bname.'&nbsp;&nbsp;'.$book_price.'&nbsp;افغانۍ<span>د کتاب قیمت</span></h5><strong></strong>
                                </div>
                                <p style="width: 600px;">' . $btext . '</p>
                                </div>
                                </div>
                                <div class="book-list-btm">
                                <div class="user-likes">
                            <ul>
                            <li><img width="30px" height="30px"                     src="../images/aurthors/' . $auth_photo . '" alt=""></li>
            <li>' . $aut_type . '</li>
        </ul>
    </div>
         <div class="like-nd-share">
          <ul>
           <li><a href="#"><i class="icon-share-alt"></i>شریکول</a></li>
          </ul>
        </div>
</div>
</div>
</div>';