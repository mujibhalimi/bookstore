<section class="best-seller tc-padding">
    <div class="container">

        <!-- Main Heading -->
        <div class="main-heading-holder">
            <div class="main-heading style-1">
                <h2>تر ټولو زیات <span class="theme-color">خرڅ شوې</span> کتابونه</h2>
            </div>
        </div>
        <!-- Main Heading -->

        <!-- Best sellers Tabs -->
        <div id="best-sellers-tabs" class="best-sellers-tabs">

            <!-- Nav tabs -->
            <div class="tabs-nav-holder has-layout">
                <ul class="tabs-nav">
                    <?php
                    $db=new core();
                    $selectquer="select * from catagories limit 5";

                    $rest=$db->select($selectquer);
                    $i=1;
                    while ($run=$rest->fetch_array()) :
                        ?>

                        <li><a href="#tab-<?php echo $i++; ?>"><?php echo $name= $run['pt_name']; ?></a></li>

                    <?php endwhile; ?>
                </ul>
            </div>
            <!-- Nav tabs -->

            <!-- Tab panes -->
            <div class="tab-content has-layout">

                <!-- Best Seller Slider -->
                <div id="tab-1">

                    <div class="row">
                        <?php
                        $db=new core();

                        $queryfornovel="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Economics' ORDER BY bookcata.ccid DESC limit 4";
                        $result=$db->select($queryfornovel);

                        while ($row=$result->fetch_array()) :


                        ?>
                        <!-- Product Box -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 r-full-width">
                            <div class="product-box">
                                <div class="product-img">
                                    <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row['pic']; ?>"  alt="">
                                    <ul class="product-cart-option position-center-x">
                                        <li><a  data-target="#quick-view" href="#" data-toggle="modal"
                                                data-whatever="<?php echo $row['pbookname']; ?>"                 data-whatever1="<?php echo $row['auth_name']; ?>"
                                                data-whatever2="<?php echo $row['pic']; ?>"
                                                data-whatever3="<?php echo substr(strip_tags($row['pbooktext']),0,100); ?>"
                                                data-whatever4="<?php echo $row['type_p'];?>"
                                                data-whatever5="<?php echo $row['book_price']; ?>"
                                            >
                                                <i class="icon-eye"></i></a></li>
                                        <li alt="download"><a title="download book" href="file/<?php echo htmlentities($row['file']);?>" download><i class="icon-arrow-down"></i></a></li>
                                    </ul>
                                    <span class="sale-bacth"><?php echo $row['book_price']  ?></span>
                                </div>
                                <div class="product-detail">
                                    <span><?php echo $row['pt_name']; ?></span>
                                    <h5><a href="book-detail.html"><?php echo $row
                                                ['pbookname']; ?></a></h5>
                                    <p><?php echo $row['pbooktext']; ?></p>

                                    <div class="aurthor-detail">
                                        <span><img style="width: 50px; height: 50px;" src="../images/aurthors/<?php echo $row['photo']; ?>" alt=""><?php echo $row['type_p']; ?>: &nbsp;<?php echo $row['p_author_name']; ?></span>
                                        <a class="add-wish" title="follow me" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Box -->
                        <?php endwhile; ?>
                    </div>
                </div>
                <!-- Best Seller Slider -->

                <!-- Best Seller Slider -->
                <div id="tab-2">
                    <div class="row">
                        <?php
                        $db=new core();
                        $queryfornovel="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Legal/Political' ORDER BY bookcata.ccid DESC limit 4";
                        $result=$db->select($queryfornovel);

                        while ($row=$result->fetch_array()) :


                        ?>
                        <!-- Product Box -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 r-full-width">
                            <div class="product-box">
                                <div class="product-img">
                                    <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row['pic']; ?>"  alt="">
                                    <ul class="product-cart-option position-center-x">
                                        <li><a  data-target="#quick-view" href="#" data-toggle="modal"
                                                data-whatever="<?php echo $row['pbookname']; ?>"                 data-whatever1="<?php echo $row['auth_name']; ?>"
                                                data-whatever2="<?php echo $row['pic']; ?>"
                                                data-whatever3="<?php echo strip_tags($row['pbooktext']); ?>"
                                                data-whatever4="<?php echo $row['type_p'];?>"
                                                data-whatever5="<?php echo $row['book_price']; ?>"
                                            >
                                                <i class="icon-eye"></i></a></li>
                                        <li alt="download"><a title="download book" href="file/<?php echo htmlentities($row['file']);?>" download><i class="icon-arrow-down"></i></a></li>
                                    </ul>
                                    <span class="sale-bacth"><?php echo $row['book_price']  ?></span>
                                </div>
                                <div class="product-detail">
                                    <span><?php echo $row['pt_name']; ?></span>
                                    <h5><a href="book-detail.html"><?php echo $row
                                            ['pbookname']; ?></a></h5>
                                    <p><?php echo $row['pbooktext']; ?></p>

                                    <div class="aurthor-detail">
                                        <span><img style="width: 50px; height: 50px;" src="../images/aurthors/<?php echo $row['photo']; ?>" alt=""><?php echo $row['type_p']; ?>: &nbsp;<?php echo $row['p_author_name']; ?></span>
                                        <a class="add-wish" title="follow me" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Box -->

                        <?php endwhile; ?>
                    </div>
                </div>
                <!-- Best Seller Slider -->

                <!-- Best Seller Slider -->
                <div id="tab-3">
                    <div class="row">

                        <?php
                        $db=new core();
                        $queryfornovel="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='History/Geographical' ORDER BY bookcata.ccid DESC limit 4";
                        $result=$db->select($queryfornovel);

                        while ($row=$result->fetch_array()) :


                        ?>
                        <!-- Product Box -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 r-full-width">
                            <div class="product-box">
                                <div class="product-img">
                                    <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row['pic']; ?>"  alt="">
                                    <ul class="product-cart-option position-center-x">
                                        <li><a  data-target="#quick-view" href="#" data-toggle="modal"
                                                data-whatever="<?php echo $row['pbookname']; ?>"                 data-whatever1="<?php echo $row['auth_name']; ?>"
                                                data-whatever2="<?php echo $row['pic']; ?>"
                                                data-whatever3="<?php echo strip_tags($row['pbooktext']); ?>"
                                                data-whatever4="<?php echo $row['type_p'];?>"
                                                data-whatever5="<?php echo $row['book_price']; ?>"
                                            >
                                                <i class="icon-eye"></i></a></li>
                                        <li alt="download"><a title="download book" href="file/<?php echo htmlentities($row['file']);?>" download><i class="icon-arrow-down"></i></a></li>
                                    </ul>
                                    <span class="sale-bacth"><?php echo $row['book_price']  ?></span>
                                </div>
                                <div class="product-detail">
                                    <span><?php echo $row['pt_name']; ?></span>
                                    <h5><a href="book-detail.html"><?php echo $row
                                            ['pbookname']; ?></a></h5>
                                    <p><?php echo $row['pbooktext']; ?></p>

                                    <div class="aurthor-detail">
                                        <span><img style="width: 50px; height: 50px;" src="../images/aurthors/<?php echo $row['photo']; ?>" alt=""><?php echo $row['type_p']; ?>: &nbsp;<?php echo $row['p_author_name']; ?></span>
                                        <a class="add-wish" title="follow me" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Box -->
                        <?php endwhile; ?>
                    </div>
                </div>
                <!-- Best Seller Slider -->

                <!-- Best Seller Slider -->
                <div id="tab-4">
                    <div class="row">
                        <?php
                        $db=new core();
                        $queryfornovel="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Engineering' ORDER BY bookcata.ccid DESC limit 4";
                        $result=$db->select($queryfornovel);

                        while ($row=$result->fetch_array()) :


                        ?>
                        <!-- Product Box -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 r-full-width">
                            <div class="product-box">
                                <div class="product-img">
                                    <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row['pic']; ?>"  alt="">
                                    <ul class="product-cart-option position-center-x">
                                        <li><a  data-target="#quick-view" href="#" data-toggle="modal"
                                                data-whatever="<?php echo $row['pbookname']; ?>"                 data-whatever1="<?php echo $row['auth_name']; ?>"
                                                data-whatever2="<?php echo $row['pic']; ?>"
                                                data-whatever3="<?php echo strip_tags($row['pbooktext']); ?>"
                                                data-whatever4="<?php echo $row['type_p'];?>"
                                                data-whatever5="<?php echo $row['book_price']; ?>"
                                            >
                                                <i class="icon-eye"></i></a></li>
                                        <li alt="download"><a title="download book" href="file/<?php echo htmlentities($row['file']);?>" download><i class="icon-arrow-down"></i></a></li>
                                    </ul>
                                    <span class="sale-bacth"><?php echo $row['book_price']  ?></span>
                                </div>
                                <div class="product-detail">
                                    <span><?php echo $row['pt_name']; ?></span>
                                    <h5><a href="book-detail.html"><?php echo $row
                                            ['pbookname']; ?></a></h5>
                                    <p><?php echo $row['pbooktext']; ?></p>

                                    <div class="aurthor-detail">
                                        <span><img style="width: 50px; height: 50px;" src="../images/aurthors/<?php echo $row['photo']; ?>" alt=""><?php echo $row['type_p']; ?>: &nbsp;<?php echo $row['p_author_name']; ?></span>
                                        <a class="add-wish" title="follow me" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Box -->
                        <?php endwhile; ?>
                    </div>
                </div>
                <!-- Best Seller Slider -->

                <!-- Best Seller Slider -->
                <div id="tab-5">
                    <div class="row">
                        <?php
                        $db=new core();
                        $queryfornovel="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Agriculture' ORDER BY bookcata.ccid DESC limit 4";
                        $result=$db->select($queryfornovel);

                        while ($row=$result->fetch_array()) :


                        ?>
                        <!-- Product Box -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 r-full-width">
                            <div class="product-box">
                                <div class="product-img">
                                    <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row['pic']; ?>"  alt="">
                                    <ul class="product-cart-option position-center-x">
                                        <li><a  data-target="#quick-view" href="#" data-toggle="modal"
                                                data-whatever="<?php echo $row['pbookname']; ?>"                 data-whatever1="<?php echo $row['auth_name']; ?>"
                                                data-whatever2="<?php echo $row['pic']; ?>"
                                                data-whatever3="<?php echo strip_tags($row['pbooktext']); ?>"
                                                data-whatever4="<?php echo $row['type_p'];?>"
                                                data-whatever5="<?php echo $row['book_price']; ?>"
                                            >
                                                <i class="icon-eye"></i></a></li>
                                        <li alt="download"><a title="download book" href="file/<?php echo htmlentities($row['file']);?>" download><i class="icon-arrow-down"></i></a></li>
                                    </ul>
                                    <span class="sale-bacth"><?php echo $row['book_price']  ?></span>
                                </div>
                                <div class="product-detail">
                                    <span><?php echo $row['pt_name']; ?></span>
                                    <h5><a href="book-detail.html"><?php echo $row
                                            ['pbookname']; ?></a></h5>
                                    <p><?php echo $row['pbooktext']; ?></p>

                                    <div class="aurthor-detail">
                                        <span><img style="width: 50px; height: 50px;" src="../images/aurthors/<?php echo $row['photo']; ?>" alt=""><?php echo $row['type_p']; ?>: &nbsp;<?php echo $row['p_author_name']; ?></span>
                                        <a class="add-wish" title="follow me" href="#"><i class="icon-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Box -->
                        <?php endwhile; ?>
                    </div>
                </div>
                <!-- Best Seller Slider
                <div class="pagination-holder">
                    <ul class="pagination">
                        <li><a href="#" aria-label="Previous">سابق</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">23</a></li>
                        <li><a href="#" aria-label="Next">التالى</a></li>
                    </ul>
                </div>
                -->
            </div>
            <!-- Tab panes -->

        </div>
        <!-- Best sellers Tabs -->

    </div>
</section>
