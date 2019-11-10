<section class="best-seller tc-padding">
    <div class="container">

        <!-- Main Heading -->
        <div class="main-heading-holder">
            <div class="main-heading style-1">
                <h2>Best <span class="theme-color">Seller</span> Books</h2>

            </div>
        </div>
        <!-- Main Heading -->

        <!-- Best sellers Tabs -->
        <div id="best-sellers-tabs" class="best-sellers-tabs">

            <!-- Nav tabs -->
            <div class="tabs-nav-holder">
                <ul class="tabs-nav">
                    <?php
                    $db=new core();
                    $selectquer="select * from catagories limit 5";

                    $rest=$db->select($selectquer);
                    $i=1;
                    while ($run=$rest->fetch_array()) :
                    ?>

                    <li><a href="#tab-<?php echo $i++; ?>"><?php echo $name= $run['ct_name']; ?></a></li>

                    <?php endwhile; ?>
                  <!--  <li><a href="#tab-2">Leadership</a></li>
                    <li><a href="#tab-3">Peotry</a></li>
                    <li><a href="#tab-4">Mathmatics</a></li>
                    <li><a href="#tab-5">Kids Books</a></li>
                    -->
                </ul>
            </div>
            <!-- Nav tabs -->

            <!-- Tab panes -->
            <div class="tab-content">

                <!-- Best Seller Slider -->

                <div id="tab-1">
                    <div class="best-seller-slider">
                        <!-- Product Box -->
                        <?php
                        $db=new core();

                        $queryfornovel="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Civic/Islamic Studies'";
                        $result=$db->select($queryfornovel);

                        while ($row=$result->fetch_array()) :


                        ?>
                        <div class="item">
                            <div class="product-box">
                                <div class="product-img">
                                    <img width="151px" height="218px" src="images/upcoming-release/thumb/<?php echo $row['pic']; ?>" alt="">
                                    <ul class="product-cart-option position-center-x">
                                        <li><a  data-target="#quick-view" href="#" data-toggle="modal"
                                               data-whatever="<?php echo $row['bname']; ?>"                 data-whatever1="<?php echo $row['auth_name']; ?>"
                                               data-whatever2="<?php echo $row['pic']; ?>"
                                               data-whatever3="<?php echo strip_tags($row['btext']); ?>"
                                               data-whatever4="<?php echo $row['type'];?>"
                                                data-whatever6="<?php echo $row['pages']; ?>"
                                                data-whatever7="<?php echo $row['print_year']; ?>"
                                            >
                                               <i class="fa fa-eye"></i></a></li>

                                        <li alt="download"><a title="download book" href="file/<?php echo htmlentities($row['file']);?>" download><i class="fa fa-arrow-down"></i></a></li>

                                            <li></li></ul>
                                    <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                </div>
                                <div class="product-detail">
                                    <span>Civic/Islamic Studies</span>
                                    <h5><a href="book-detail.html"><?php echo $row['bname']; ?></a></h5>
                                    <p><?php echo substr($row['btext'],0,20); ?></p>

                                    <div class="aurthor-detail">
                                        <span><img style="width: 50px; height: 50px;" src="images/aurthors/<?php echo $row['photo']; ?>" alt=""><?php echo $row['type']; ?>: &nbsp;<?php echo $row['auth_name']; ?></span>
                                        <a class="add-wish" title="follow me" href="#"><i class="fa fa-heart"></i></a>
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
                    <div class="best-seller-slider">
                        <?php
                        $db=new core();
                        $queryfornovel="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Medical'";
                        $result=$db->select($queryfornovel);

                        while ($row=$result->fetch_array()) :


                        ?>
                        <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img width="151px" height="218px" src="images/upcoming-release/thumb/<?php echo $row['pic']; ?>" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a  data-target="#quick-view" href="#" data-toggle="modal"
                                                    data-whatever="<?php echo $row['bname']; ?>"                 data-whatever1="<?php echo $row['auth_name']; ?>"
                                                    data-whatever2="<?php echo $row['pic']; ?>"
                                                    data-whatever3="<?php echo strip_tags($row['btext']); ?>"
                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                    <i class="fa fa-eye"></i></a></li>

                                            <li alt="download"><a title="download book" href="file/<?php echo htmlentities($row['file']);?>" download><i class="fa fa-arrow-down"></i></a></li>

                                            <li></li></ul>
                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                    </div>
                                    <div class="product-detail">
                                        <span>Medical</span>
                                        <h5><a href="book-detail.html"><?php echo $row['bname']; ?></a></h5>
                                        <p><?php echo substr($row['btext'],0,20); ?></p>
                                        <div class="aurthor-detail">
                                            <span><img style="width: 50px; height: 50px;" src="images/aurthors/<?php echo $row['photo']; ?>" alt=""><?php echo $row['type']; ?>: &nbsp;<?php echo $row['auth_name']; ?></span>
                                            <a class="add-wish" title="follow me" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Product Box -->
                        <?php endwhile; ?>
                        <!-- Product Box -->

                    </div>
                </div>
                <!-- Best Seller Slider -->

                <!-- Best Seller Slider -->
                <div id="tab-3">
                    <div class="best-seller-slider">

                        <?php
                        $db=new core();
                        $queryfornovel="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Engineering'";
                        $result=$db->select($queryfornovel);

                        while ($row=$result->fetch_array()) :


                            ?>
                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img width="151px" height="218px" src="images/upcoming-release/thumb/<?php echo $row['pic']; ?>" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a  data-target="#quick-view" href="#" data-toggle="modal"
                                                    data-whatever="<?php echo $row['bname']; ?>"                 data-whatever1="<?php echo $row['auth_name']; ?>"
                                                    data-whatever2="<?php echo $row['pic']; ?>"
                                                    data-whatever3="<?php echo strip_tags($row['btext']); ?>"
                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                    <i class="fa fa-eye"></i></a></li>

                                            <li alt="download"><a title="download book" href="file/<?php echo htmlentities($row['file']);?>" download><i class="fa fa-arrow-down"></i></a></li>

                                            <li></li></ul>
                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                    </div>
                                    <div class="product-detail">
                                        <span>Engineering</span>
                                        <h5><a href="book-detail.html"><?php echo $row['bname']; ?></a></h5>
                                        <p><?php echo substr($row['btext'],0,20); ?></p>

                                        <div class="aurthor-detail">
                                            <span><img style="width: 50px; height: 50px;" src="images/aurthors/<?php echo $row['photo']; ?>" alt=""><?php echo $row['type']; ?>: &nbsp;<?php echo $row['auth_name']; ?></span>
                                            <a class="add-wish" title="follow me" href="#"><i class="fa fa-heart"></i></a>
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
                    <div class="best-seller-slider">

                        <?php
                        $db=new core();
                        $queryfornovel="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Legal/Political'";
                        $result=$db->select($queryfornovel);

                        while ($row=$result->fetch_array()) :


                            ?>
                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img width="151px" height="218px" src="images/upcoming-release/thumb/<?php echo $row['pic']; ?>" alt="">
                                        <ul class="product-cart-option position-center-x">
                                            <li><a  data-target="#quick-view" href="#" data-toggle="modal"
                                                    data-whatever="<?php echo $row['bname']; ?>"                 data-whatever1="<?php echo $row['auth_name']; ?>"
                                                    data-whatever2="<?php echo $row['pic']; ?>"
                                                    data-whatever3="<?php echo strip_tags($row['btext']); ?>"
                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                    <i class="fa fa-eye"></i></a></li>

                                            <li alt="download"><a title="download book" href="file/<?php echo htmlentities($row['file']);?>" download><i class="fa fa-arrow-down"></i></a></li>

                                            <li></li></ul>
                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                    </div>
                                    <div class="product-detail">
                                        <span>Legal/Political</span>
                                        <h5><a href="book-detail.html"><?php echo $row['bname']; ?></a></h5>
                                        <p><?php echo substr($row['btext'],0,20); ?></p>

                                        <div class="aurthor-detail">
                                            <span><img style="width: 50px; height: 50px;" src="images/aurthors/<?php echo $row['photo']; ?>" alt=""><?php echo $row['type']; ?>: &nbsp;<?php echo $row['auth_name']; ?></span>
                                            <a class="add-wish" title="follow me" href="#"><i class="fa fa-heart"></i></a>
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
                    <div class="best-seller-slider">

                        <?php
                        $db=new core();
                        $queryfornovel="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Economics'";
                        $result=$db->select($queryfornovel);

                        while ($row=$result->fetch_array()) :


                            ?>
                            <!-- Product Box -->
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img width="151px" height="218px" src="images/upcoming-release/thumb/<?php echo $row['pic']; ?>" alt=""> <ul class="product-cart-option position-center-x">
                                            <li><a  data-target="#quick-view" href="#" data-toggle="modal"
                                                    data-whatever="<?php echo $row['bname']; ?>"                 data-whatever1="<?php echo $row['auth_name']; ?>"
                                                    data-whatever2="<?php echo $row['pic']; ?>"
                                                    data-whatever3="<?php echo strip_tags($row['btext']); ?>"
                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                    <i class="fa fa-eye"></i></a></li>

                                            <li alt="download"><a title="download book" href="file/<?php echo htmlentities($row['file']);?>" download><i class="fa fa-arrow-down"></i></a></li>

                                            <li></li></ul>
                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                    </div>
                                    <div class="product-detail">
                                        <span>Economics</span>
                                        <h5><a href="book-detail.html"><?php echo $row['bname']; ?></a></h5>
                                        <p><?php echo substr($row['btext'],0,20); ?></p>
                                        <div class="aurthor-detail">
                                            <span><img style="width: 50px; height: 50px;" src="images/aurthors/<?php echo $row['photo']; ?>" alt=""><?php echo $row['type']; ?>: &nbsp;<?php echo $row['auth_name']; ?></span>
                                            <a class="add-wish" title="follow me" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Box -->
                        <?php endwhile; ?>

                    </div>
                </div>
                <!-- Best Seller Slider -->

            </div>
            <!-- Tab panes -->

        </div>
        <!-- Best sellers Tabs -->

    </div>
</section>