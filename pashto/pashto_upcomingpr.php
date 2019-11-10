<section class="upcoming-release">

    <!-- Heading -->
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="release-heading after-clear">
                    <ul class="release-slider-arrows">
                        <li class="release-next"><i class="icon-arrow-left3"></i></li>
                        <li class="release-prev"><i class="icon-arrow-right3"></i></li>
                    </ul>
                    <h5>نوی چاپ شوې او جاپیدونکي کتابونه</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Heading -->

    <!-- Upcoming Release Slider -->
    <div class="upcoming-slider">
        <div class="container">
            <div class="row">

                <!-- Big slides -->
                <div class="col-lg-5 col-md-5 col-sm-6 pull-right pull-none-768">
                    <div class="release-book-detail h-white p-white">
                        <div id="release-book-slider" class="release-book-slider">
                            <?php
                            include ("../admin_4/config.php");
                            include ("../admin_4/core.php");
                            $db=new core();

                            $query="SELECT * FROM bookcata ORDER BY ccid ASC limit 10";

                            $result=$db->select($query);


                            while ($row=$result->fetch_array()) :


                            ?>
                            <div class="item">
                                <div class="detail-img">
                                    <img  width="94px" height="122px"  src="../images/upcoming-release/thumb/<?php echo $row ['pic']; ?>" alt="">
                                </div>
                                <div class="detail">
                                    <h5><a href="book-detail.html"><?php echo $row['pbookname']; ?></a></h5>
                                    <p><?php echo substr($row['pbooktext'],0,100); ?> </p>
                                    <br>
                                    <br>
                                    <br>

                                    <span><?php echo $row['book_price']; ?><sup>افغانۍ</sup></span>

                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <!-- Big slides -->

                <!-- Thumbs -->
                <div class="col-lg-7 col-md-7 col-sm-6 pull-left pull-none-768">
                    <div class="release-thumb-holder">
                        <div id="release-thumb" class="release-thumb">
                            <?php

                            $db=new core();

                            $query="SELECT * FROM bookcata,author,p_type WHERE author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id ORDER BY bookcata.ccid ASC limit 10";

                            $result=$db->select($query);



                            $i=0;
                            while ($row=$result->fetch_array()) :

                            ?>
                            <div  class="item">
                                <span><?php  echo substr($row['pbookname'],0,15); ?></span>
                                <img width="94px" height="122px" src="../images/upcoming-release/thumb/<?php echo $row ['pic']; ?>" alt="">
                                <img class="b-shadow" src="images/upcoming-release/b-shadow.png" alt="">
                                <span data-toggle="modal" data-whatever="<?php echo $row['pbookname']; ?>" data-whatever1="<?php echo $row['auth_name']; ?>" data-whatever2="<?php echo $row['pic']; ?>"
                                      data-whatever3="<?php echo strip_tags($row['pbooktext']); ?>"
                                      data-whatever4="<?php echo $row['type_p']; ?>"
                                      data-whatever5="<?php echo $row['book_price']; ?>"
                                      data-target="#quick-view" class="plus-icon">+</span>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                <!-- Thumbs -->

            </div>
        </div>
    </div>
    <!-- Upcoming Release Slider -->

</section>