<section class="book-collection">
    <div class="container">
        <div class="row">

            <!-- Book Collections Tabs -->
            <div id="book-collections-tabs">

                <!-- collection Name -->
                <div class="col-lg-3 col-md-3 col-sm-12 pull-none pull-left">
                    <div class="sidebar">
                        <h4>د کتابونو برخې</h4>
                        <ul>
                            <?php $db=new core();
                            $name1="";
                            $query="select * from catagories ";
                            $resultforcat=$db->select($query);
                            $i=1;
                            while ($run=$resultforcat->fetch_array()) :
                            ?>
                            <li><a href="#tab-<?php echo $i++; ?>"><?php echo $run['pt_name'];?></a></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <!-- collection Name -->

                <!-- Collection Content -->
                <div class="col-lg-9 col-md-9 col-sm-12 pull-none pull-right">
                    <div class="collection">

                        <!-- Secondary heading -->
                        <div class="sec-heading">
                            <h3>د خرڅلاو<span class="theme-color">کتابونو</span> ټولګه</h3>
                            <a class="view-all" href="book-list.php">ټول کتابونه کتل<i class="icon-angle-double-left"></i></a>
                        </div>
                        <!-- Secondary heading -->

                        <!-- Collection Content -->
                        <div class="collection-content">
                            <ul>
                                <?php
                                $db=new core();
                                $queryforEconomic="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Economics'";
                                $result=$db->select($queryforEconomic);

                                while ($row=$result->fetch_array()) :


                                ?>
                                <li id="tab-1">
                                    <div class="s-product">
                                        <div class="s-product-img">
                                            <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row['pic'];?>" alt="">
                                            <div class="s-product-hover">
                                                <div class="position-center-x">
                                                    <a href="javascript:;" class="plus-icon"><?php echo $row['book_price'].""; ?></a>
                                                    <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                       data-whatever="<?php echo $row['pbookname']; ?>"                 data-whatever1="<?php echo $row['p_author_name']; ?>"
                                                       data-whatever2="<?php echo $row['pic']; ?>"
                                                       data-whatever3="<?php echo strip_tags($row['pbooktext']); ?>"
                                                       data-whatever5="<?php echo strip_tags($row['book_price']); ?>"
                                                       data-whatever4="<?php echo $row['type_p'];?>">بشپړ مالومات</a> </div>
                                            </div>
                                        </div>
                                        <h6><a href="#"><?php echo $row['pbookname']; ?></a></h6>
                                        <span><?php echo $row['p_author_name']; ?></span>
                                    </div>
                                </li>
                                <?php endwhile;  ?>
                                <?php
                                $queryforLegal="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Legal/Political'";
                                $resultl=$db->select($queryforLegal);

                                while ($row1=$resultl->fetch_array()) :
                                ?>
                                <li id="tab-2">
                                    <div class="s-product">
                                        <div class="s-product-img">
                                            <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row1['pic'];?>" alt="">
                                            <div class="s-product-hover">
                                                <div class="position-center-x">
                                                    <a href="javascript:;" class="plus-icon"><?php echo $row1['book_price'].""; ?></a>
                                                    <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                       data-whatever="<?php echo $row1['pbookname']; ?>"                 data-whatever1="<?php echo $row1['p_author_name']; ?>"
                                                       data-whatever2="<?php echo $row1['pic']; ?>"
                                                       data-whatever3="<?php echo strip_tags($row1['pbooktext']); ?>"
                                                       data-whatever5="<?php echo strip_tags($row1['book_price']); ?>"
                                                       data-whatever4="<?php echo $row1['type_p'];?>">بشپړ مالومات</a> </div>
                                            </div>
                                        </div>
                                        <h6><a href="#"><?php echo $row1['pbookname']; ?></a></h6>
                                        <span><?php echo $row1['p_author_name']; ?></span>
                                    </div>
                                </li>
                                <?php endwhile; ?>
                                <?php

                                $queryforHistory="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='History/Geographical'";
                                $resultHistory=$db->select($queryforHistory);

                                while ($row2=$resultHistory->fetch_array()) :


                                ?>
                                <li id="tab-3">
                                    <div class="s-product">
                                        <div class="s-product-img">
                                            <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row2['pic'];?>" alt="">
                                            <div class="s-product-hover">
                                                <div class="position-center-x">
                                                    <a href="javascript:;" class="plus-icon"><?php echo $row2['book_price'].""; ?></a>
                                                    <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                       data-whatever="<?php echo $row2['pbookname']; ?>"                 data-whatever1="<?php echo $row2['p_author_name']; ?>"
                                                       data-whatever2="<?php echo $row2['pic']; ?>"
                                                       data-whatever3="<?php echo strip_tags($row2['pbooktext']); ?>"
                                                       data-whatever5="<?php echo strip_tags($row2['book_price']); ?>"
                                                       data-whatever4="<?php echo $row2['type_p'];?>">بشپړ مالومات</a> </div>
                                            </div>
                                        </div>
                                        <h6><a href="#"><?php echo $row2['pbookname']; ?></a></h6>
                                        <span><?php echo $row2['p_author_name']; ?></span>
                                    </div>
                                </li>
                                <?php endwhile; ?>
                                <?php

                                $queryforEngineering="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Engineering'";
                                $resultEngineering=$db->select($queryforEngineering);

                                while ($row3=$resultEngineering->fetch_array()) :


                                ?>
                                    <li id="tab-4">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row3['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row3['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row3['pbookname']; ?>"                 data-whatever1="<?php echo $row3['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row3['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row3['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row3['book_price']); ?>"
                                                           data-whatever4="<?php echo $row3['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row3['pbookname']; ?></a></h6>
                                            <span><?php echo $row3['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php

                                $queryforAgricultural="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Agriculture'";
                                $resultAgricultural=$db->select($queryforAgricultural);

                                while ($row4=$resultAgricultural->fetch_array()) :


                                ?>
                                    <li id="tab-5">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row4['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row4['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row4['pbookname']; ?>"                 data-whatever1="<?php echo $row4['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row4['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row4['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row4['book_price']); ?>"
                                                           data-whatever4="<?php echo $row4['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row4['pbookname']; ?></a></h6>
                                            <span><?php echo $row4['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php
                                $queryforScience="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Computer Science'";
                                $resultScience=$db->select($queryforScience);

                                while ($row5=$resultScience->fetch_array()) :
                                ?>
                                    <li id="tab-6">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row5['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row5['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row5['pbookname']; ?>"                 data-whatever1="<?php echo $row5['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row5['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row5['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row5['book_price']); ?>"
                                                           data-whatever4="<?php echo $row5['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row5['pbookname']; ?></a></h6>
                                            <span><?php echo $row5['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php
                                $queryforMathematics="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Mathematics'";
                                $resultMathematics=$db->select($queryforMathematics);

                                while ($row6=$resultMathematics->fetch_array()) :

                                ?>
                                    <li id="tab-7">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row6['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row6['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row6['pbookname']; ?>"                 data-whatever1="<?php echo $row6['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row6['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row6['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row6['book_price']); ?>"
                                                           data-whatever4="<?php echo $row6['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row6['pbookname']; ?></a></h6>
                                            <span><?php echo $row6['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php
                                $queryforLinguistic="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Linguistic'";
                                $resultLinguistic=$db->select($queryforLinguistic);

                                while ($row7=$resultLinguistic->fetch_array()) :
                                ?>
                                    <li id="tab-8">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row7['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row7['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row7['pbookname']; ?>"                 data-whatever1="<?php echo $row7['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row7['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row7['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row7['book_price']); ?>"
                                                           data-whatever4="<?php echo $row7['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row7['pbookname']; ?></a></h6>
                                            <span><?php echo $row7['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php

                                $queryforPsychology="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Psychology'";
                                $resultPsychology=$db->select($queryforPsychology);

                                while ($row8=$resultPsychology->fetch_array()) :
                                ?>
                                    <li id="tab-9">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row8['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row8['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row8['pbookname']; ?>"                 data-whatever1="<?php echo $row8['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row8['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row8['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row8['book_price']); ?>"
                                                           data-whatever4="<?php echo $row8['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row8['pbookname']; ?></a></h6>
                                            <span><?php echo $row8['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php
                                $db=new core();
                                $queryforJournalism="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Journalism'";
                                $resultJournalism=$db->select($queryforJournalism);

                                while ($row9=$resultJournalism->fetch_array()) :

                                ?>
                                    <li id="tab-10">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row9['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row9['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row9['pbookname']; ?>"                 data-whatever1="<?php echo $row9['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row9['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row9['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row9['book_price']); ?>"
                                                           data-whatever4="<?php echo $row9['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row9['pbookname']; ?></a></h6>
                                            <span><?php echo $row9['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php
                                $db=new core();
                                $queryforCivic="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Civic/Islamic Studies'";
                                $resultCivic=$db->select($queryforCivic);

                                while ($row10=$resultCivic->fetch_array()) :

                                ?>
                                    <li id="tab-11">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row10['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row10['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row10['pbookname']; ?>"                 data-whatever1="<?php echo $row10['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row10['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row10['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row10['book_price']); ?>"
                                                           data-whatever4="<?php echo $row10['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row10['pbookname']; ?></a></h6>
                                            <span><?php echo $row10['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php
                                $db=new core();
                                $queryforEducational="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Education'";
                                $resultEducational=$db->select($queryforEducational);

                                while ($row11=$resultEducational->fetch_array()) :
                                ?>
                                    <li id="tab-12">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row11['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row11['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row11['pbookname']; ?>"                 data-whatever1="<?php echo $row11['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row11['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row11['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row11['book_price']); ?>"
                                                           data-whatever4="<?php echo $row11['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row11['pbookname']; ?></a></h6>
                                            <span><?php echo $row11['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php
                                $db=new core();
                                $queryforKankor="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Kankor'";
                                $resultKankor=$db->select($queryforKankor);

                                while ($row12=$resultKankor->fetch_array()) :
                                ?>
                                    <li id="tab-13">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row12['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row12['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row12['pbookname']; ?>"                 data-whatever1="<?php echo $row12['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row12['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row12['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row12['book_price']); ?>"
                                                           data-whatever4="<?php echo $row12['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row12['pbookname']; ?></a></h6>
                                            <span><?php echo $row12['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php
                                $db=new core();
                                $queryforDictionary="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Dictionaries'";
                                $resultDictionary=$db->select($queryforDictionary);

                                while ($row13=$resultDictionary->fetch_array()) :
                                ?>
                                    <li id="tab-14">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row13['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row13['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row13['pbookname']; ?>"                 data-whatever1="<?php echo $row13['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row13['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row13['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row13['book_price']); ?>"
                                                           data-whatever4="<?php echo $row13['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row13['pbookname']; ?></a></h6>
                                            <span><?php echo $row13['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php
                                $db=new core();
                                $queryforAcademic="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Academic'";
                                $resultAcademic=$db->select($queryforAcademic);

                                while ($row14=$resultAcademic->fetch_array()) :
                                ?>
                                    <li id="tab-15">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row14['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row14['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row14['pbookname']; ?>"                 data-whatever1="<?php echo $row14['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row14['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row14['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row14['book_price']); ?>"
                                                           data-whatever4="<?php echo $row14['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row14['pbookname']; ?></a></h6>
                                            <span><?php echo $row14['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php
                                $db=new core();
                                $queryforMaps="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Maps/Posters'";
                                $resultMaps=$db->select($queryforMaps);

                                while ($row15=$resultMaps->fetch_array()) :

                                ?>
                                    <li id="tab-16">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row15['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row15['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row15['pbookname']; ?>"                 data-whatever1="<?php echo $row15['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row15['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row15['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row15['book_price']); ?>"
                                                           data-whatever4="<?php echo $row15['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row15['pbookname']; ?></a></h6>
                                            <span><?php echo $row15['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php
                                $db=new core();
                                $queryforMedical="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Medical'";
                                $resultMedical=$db->select($queryforMedical);

                                while ($row16=$resultMedical->fetch_array()) :
                                ?>
                                    <li id="tab-17">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row16['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row16['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row16['pbookname']; ?>"                 data-whatever1="<?php echo $row16['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row16['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row16['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row16['book_price']); ?>"
                                                           data-whatever4="<?php echo $row16['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row16['pbookname']; ?></a></h6>
                                            <span><?php echo $row16['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                                <?php
                                $db=new core();
                                $queryforPoetry="SELECT * FROM catagories,bookcata,author,p_type WHERE catagories.cid=bookcata.cata_id AND author.auth_id=bookcata.auth_id AND p_type.p_id=bookcata.p_type_id AND catagories.ct_name='Poetry'";
                                $resultPoetry=$db->select($queryforPoetry);

                                while ($row17=$resultPoetry->fetch_array()) :
                                ?>
                                    <li id="tab-18">
                                        <div class="s-product">
                                            <div class="s-product-img">
                                                <img width="151px" height="218px" src="../images/upcoming-release/thumb/<?php echo $row17['pic'];?>" alt="">
                                                <div class="s-product-hover">
                                                    <div class="position-center-x">
                                                        <a href="javascript:;" class="plus-icon"><?php echo $row17['book_price'].""; ?></a>
                                                        <a class="btn-1 sm shadow-0"  data-target="#quick-view" href="#" data-toggle="modal"
                                                           data-whatever="<?php echo $row17['pbookname']; ?>"                 data-whatever1="<?php echo $row17['p_author_name']; ?>"
                                                           data-whatever2="<?php echo $row17['pic']; ?>"
                                                           data-whatever3="<?php echo strip_tags($row17['pbooktext']); ?>"
                                                           data-whatever5="<?php echo strip_tags($row17['book_price']); ?>"
                                                           data-whatever4="<?php echo $row17['type_p'];?>">بشپړ مالومات</a> </div>
                                                </div>
                                            </div>
                                            <h6><a href="#"><?php echo $row17['pbookname']; ?></a></h6>
                                            <span><?php echo $row17['p_author_name']; ?></span>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                        <!-- Collection Content -->

                        <!-- Pagination -->

                        <!-- Pagination -->

                    </div>
                </div>
                <!-- Collection Content -->

            </div>
            <!-- Book Collections Tabs -->

        </div>
    </div>
</section>