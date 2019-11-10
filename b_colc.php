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
                <div class="col-lg-9 col-sm-12 like">
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
                                <?php
                                $db=new core();
                                $queryforEconomic="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Civic/Islamic Studies' ORDER BY bookcata.ccid DESC limit 5";
                                $result=$db->select($queryforEconomic);

                                while ($row=$result->fetch_array()) :


                                ?>
                                <li id="tab-1">
                                    <div class="s-product">
                                        <div class="s-product-img">
                                            <img width="151px" height="218px" src="images/upcoming-release/thumb/<?php echo $row['pic'];?>" alt="">
                                            <div class="s-product-hover">
                                                <div class="position-center-x">
                                                    <a href="javascript:;" class="plus-icon"><?php echo $row['book_price']."&nbsp;af"; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row['bname']; ?>"                 data-whatever1="<?php echo $row['auth_name']; ?>"
                                                           data-whatever2="<?php echo $row['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row['btext']); ?>"
                                                           data-whatever4="<?php echo $row['type'];?>">Quick view</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h6><a href="#"><?php echo $row['bname']; ?></a></h6>
                                        <span><?php echo $row['auth_name']; ?></span>
                                    </div>
                                </li>
                            <?php endwhile;  ?>
                                <?php
                                $queryforLegal="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Medical' ORDER BY bookcata.ccid DESC limit 5";
                                $resultl=$db->select($queryforLegal);

                                while ($row1=$resultl->fetch_array()) :


                                    ?>
                                    <li id="tab-2">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="images/upcoming-release/thumb/<?php echo $row1['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row1['book_price']."&nbsp;af"; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row1['bname']; ?>"                 data-whatever1="<?php echo $row1['auth_name']; ?>"
                                                           data-whatever2="<?php echo $row1['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row1['btext']); ?>"
                                                           data-whatever4="<?php echo $row1['type'];?>">Quick view</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row1['bname']; ?></a></h6>
                                            <span><?php echo $row1['auth_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php

                                $queryforHistory="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Engineering' ORDER BY bookcata.ccid DESC limit 5";
                                $resultHistory=$db->select($queryforHistory);

                                while ($row2=$resultHistory->fetch_array()) :


                                    ?>
                                    <li id="tab-3">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="images/upcoming-release/thumb/<?php echo $row2['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row2['book_price']."&nbsp;af"; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row2['bname']; ?>"                 data-whatever1="<?php echo $row2['auth_name']; ?>"
                                                           data-whatever2="<?php echo $row2['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row2['btext']); ?>"
                                                           data-whatever4="<?php echo $row2['type'];?>">Quick view</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row2['bname']; ?></a></h6>
                                            <span><?php echo $row2['auth_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php

                                $queryforEngineering="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Legal/Political' ORDER BY bookcata.ccid DESC limit 5";
                                $resultEngineering=$db->select($queryforEngineering);

                                while ($row3=$resultEngineering->fetch_array()) :


                                    ?>
                                    <li id="tab-4">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="images/upcoming-release/thumb/<?php echo $row3['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row3['book_price']."&nbsp;af"; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row3['bname']; ?>"                 data-whatever1="<?php echo $row3['auth_name']; ?>"
                                                           data-whatever2="<?php echo $row3['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row3['btext']); ?>"
                                                           data-whatever4="<?php echo $row3['type'];?>">Quick view</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row3['bname']; ?></a></h6>
                                            <span><?php echo $row3['auth_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php

                                $queryforAgricultural="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Economics' ORDER BY bookcata.ccid DESC limit 5";
                                $resultAgricultural=$db->select($queryforAgricultural);

                                while ($row4=$resultAgricultural->fetch_array()) :


                                    ?>
                                    <li id="tab-5">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="images/upcoming-release/thumb/<?php echo $row4['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row4['book_price']."&nbsp;af"; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row4['bname']; ?>"                 data-whatever1="<?php echo $row4['auth_name']; ?>"
                                                           data-whatever2="<?php echo $row4['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row4['btext']); ?>"
                                                           data-whatever4="<?php echo $row4['type'];?>">Quick view</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row4['bname']; ?></a></h6>
                                            <span><?php echo $row4['auth_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php

                                $queryforAgricultural1="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Agriculture' ORDER BY bookcata.ccid DESC limit 5";
                                $resultAgricultural1=$db->select($queryforAgricultural1);

                                while ($row5=$resultAgricultural1->fetch_array()) :


                                    ?>
                                    <li id="tab-6">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="images/upcoming-release/thumb/<?php echo $row5['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row5['book_price']."&nbsp;af"; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row5['bname']; ?>"                 data-whatever1="<?php echo $row5['auth_name']; ?>"
                                                           data-whatever2="<?php echo $row5['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row5['btext']); ?>"
                                                           data-whatever4="<?php echo $row5['type'];?>">Quick view</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row5['bname']; ?></a></h6>
                                            <span><?php echo $row5['auth_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>


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
                        </div> -->
                        <!-- Pagination -->

                    </div>
                </div>
                <!-- Collection Content -->

            </div>
            <!-- Book Collections Tabs -->

        </div>
    </div>
    <script>

    </script>
</section>