<section class="upcoming-release">

    <!-- Heading -->
    <div class="container-fluid p-0">
        <div class="release-heading pull-right h-white">
            <h5>New and Upcoming Release Books</h5>
        </div>
    </div>
    <!-- Heading -->
    <!-- Upcoming Release Slider -->

    <div class="upcoming-slider">
        <div class="container">
            <!-- Release Book Detail -->
            <br>

            <div class="release-book-detail h-white p-white">
                <div class="release-book-slider">
                    <?php
                    include ("admin_4/config.php");
                    include ("admin_4/core.php");
                    $db=new core();

                    $query="SELECT * FROM bookcata ORDER BY ccid DESC limit 5";

                    $result=$db->select($query);


                    while ($row=$result->fetch_array()) :


                        ?>
                        <div class="item">
                            <div class="detail">
                                <h5><a href="#"><?php echo $row ['bname']; ?></a></h5>
                                <p><?php echo substr($row ['btext'], 0 , 150) ?></p>
                                <br>
                                <br>
                                <br>
                                <span><?php echo $row ['book_price']; ?> afg</span>
                            </div>
                            <div class="detail-img">
                                <img width="94px" height="122px"  src="images/upcoming-release/thumb/<?php echo $row ['pic']; ?>" alt="">
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>
            <!-- Release Book Detail -->

            <!-- Thumbs -->

            <div class="">

                <ul id="release-thumb" class="release-thumb">
                    <marquee>
                    <?php

                    $db=new core();

                    $query="SELECT * FROM bookcata,author,p_type WHERE author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id ORDER BY bookcata.ccid DESC limit 5";

                    $result=$db->select($query);



                    $i=-1;
                    while ($row=$result->fetch_array()) :

                        ?>

                        <li>

                            <a class="pp" data-slide-index="" href="">
                                <span><?php echo substr($row ['bname'],0,15); ?></span>
                                <img width="94px" height="122px" src="images/upcoming-release/thumb/<?php echo $row ['pic']; ?>" alt="">
                                <img class="b-shadow" src="images/upcoming-release/b-shadow.png" alt="">
                                <span data-toggle="modal" data-whatever="<?php echo $row['bname']; ?>" data-whatever1="<?php echo $row['auth_name']; ?>" data-whatever2="<?php echo $row['pic']; ?>"
                                      data-whatever3="<?php echo strip_tags($row['btext']); ?>"
                                      data-whatever4="<?php echo $row['type']; ?>"

                                      data-target="#quick-view" class="plus-icon">+</span>
                            </a>

                        </li>

                    <?php endwhile; ?>
                    </marquee>
                </ul>

            </div>

            <!-- Thumbs -->
        </div>
    </div>
    <!-- Upcoming Release Slider -->
</section>