<section class="timeline-area tc-padding">
    <div class="container">
        <div class="row">
            <?php
            $db=new core();

            $query="select * from b_aut";
            $result=$db->select($query);

            $row=$result->fetch_array();


            ?>
            <!-- Aurthor -->
            <div class="col-lg-3 col-sm-12">
                <div class="aurthor-img">
                    <img src="images/aurthors/<?php echo $row['auth_pic']; ?>" alt="">
                </div>
            </div>
            <!-- Aurthor -->

            <!-- Aurthor History -->
            <div class="col-lg-9 col-sm-12 h-white">
                <h2>Author <span class="theme-color">History</span> of Inovation</h2>
                <div id="timeline">
                    <ul id="dates">

                    </ul>
                    <ul id="issues">
                        <li id="1985">
                            <div class="text-box">
                                <div class="left-box">
                                    <h5><span class="theme-color"><?php echo $row['w_by']; ?></span> Books Writer</h5>
                                    <p><?php echo $row['body']; ?></p>
                                    <div class="follow">
                                        <ul class="social-icons">
                                            <li>Follow us</li>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="s-related-products">
                                    <li>
                                        <img src="images/s-related-products/<?php echo $row['pic']; ?>" alt="">
                                        <h6 class="name"><?php echo $row['heading']; ?></h6>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>