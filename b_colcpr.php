<section class="book-collection">
    <div class="container">
        <div class="row">

            <!-- Book Collections Tabs -->
            <div id="book-collections-tabs">

                <!-- collection Name -->
                <div class="col-lg-3 col-sm-12">
                    <div class="sidebar">
                        <h4>Top Books Catagories</h4>
                        <ul>

                            <?php $db=new core();
                            $name1="";
                            $query="select * from catagories ";
                            $resultforcat=$db->select($query);
                            $i=1;
                            while ($run=$resultforcat->fetch_array()) :
                                ?>
                                <li><a href="#tab-<?php echo $i++; ?>" ><?php  echo $name=$run['ct_name']; ?></a></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <!-- collection Name -->

                <!-- Collection Content -->
                <div class="col-lg-9 col-sm-12">
                    <div class="collection">

                        <!-- Secondary heading -->
                        <div class="sec-heading">
                            <h3>Shop <span class="theme-color">Books</span> Collection</h3>
                            <a class="view-all" href="book-list.php">View All<i class="fa fa-angle-double-right"></i></a>
                        </div>
                        <!-- Secondary heading -->

                        <!-- Collection Content -->
                        <div class="collection-content">
                            <ul>
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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-2">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforMedical="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Medical'";
                                        $resultmd=$db->select($queryforMedical);

                                        while ($row=$resultmd->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-3">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforEngineering="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Engineering'";
                                        $resulteng=$db->select($queryforEngineering);

                                        while ($row=$resulteng->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-4">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforlg="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Legal/Political'";
                                        $resultlg=$db->select($queryforlg);

                                        while ($row=$resultlg->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-5">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforEconomics="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Economics'";
                                        $resultec=$db->select($queryforEconomics);

                                        while ($row=$resultec->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-6">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforAgriculture="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Agriculture'";
                                        $resultag=$db->select($queryforAgriculture);

                                        while ($row=$resultag->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-7">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforMathematics="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Mathematics'";
                                        $resultmat=$db->select($queryforMathematics);

                                        while ($row=$resultmat->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-8">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforcomp="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Computer Science'";
                                        $resultcomp=$db->select($queryforcomp);

                                        while ($row=$resultcomp->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-9">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforKankor="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Kankor'";
                                        $resultkan=$db->select($queryforKankor);

                                        while ($row=$resultkan->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-10">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforJournalism="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Journalism'";
                                        $resultj=$db->select($queryforJournalism);

                                        while ($row=$resultj->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-11">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforLiterature="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Literature'";
                                        $resultlt=$db->select($queryforLiterature);

                                        while ($row=$resultlt->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-12">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforshort="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Novel/Short Stories'";
                                        $resultsh=$db->select($queryforshort);

                                        while ($row=$resultsh->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-13">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforPoetry="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Poetry'";
                                        $resultpt=$db->select($queryforPoetry);

                                        while ($row=$resultpt->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-14">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforge="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='History/Geographical'";
                                        $resultge=$db->select($queryforge);

                                        while ($row=$resultge->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-15">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforManagement="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Management'";
                                        $resultmg=$db->select($queryforManagement);

                                        while ($row=$resultmg->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-16">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforEducation="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Education'";
                                        $resulted=$db->select($queryforEducation);

                                        while ($row=$resulted->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-17">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforEnglish="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='English'";
                                        $resulteng=$db->select($queryforEnglish);

                                        while ($row=$resulteng->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-18">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforDictionaries="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Dictionaries'";
                                        $resultdc=$db->select($queryforDictionaries);

                                        while ($row=$resultdc->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-19">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryforPsychology="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Psychology'";
                                        $resultps=$db->select($queryforPsychology);

                                        while ($row=$resultps->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <div id="tab-20">
                                    <div class="best-seller-slider">
                                        <!-- Product Box -->
                                        <?php
                                        $db=new core();

                                        $queryformp="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Maps/Posters'";
                                        $resultmp=$db->select($queryformp);

                                        while ($row=$resultmp->fetch_array()) :


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
                                                                    data-whatever4="<?php echo $row['type'];?>" >
                                                                    <i class="fa fa-eye"></i></a></li>



                                                            <li></li></ul>
                                                        <span class="sale-bacth" data-toggle="tooltip" data-placement="bottom" title="book price!"><?php echo $row['book_price']."&nbsp;af"; ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Product Box -->
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <!-- Collection Content -->

                        <!-- Pagination
                        <div class="pagination-holder">
                            <ul class="pagination">
                                <li><a href="#" aria-label="Previous">Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">23</a></li>
                                <li><a href="#" aria-label="Next">Next</a></li>
                            </ul>
                        </div>
                        <!-- Pagination -->

                    </div>
                </div>
                <!-- Collection Content -->

            </div>
            <!-- Book Collections Tabs -->

        </div>
    </div>
</section>