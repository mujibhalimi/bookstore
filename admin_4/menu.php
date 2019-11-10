<?php
$db=new core();
$user=$_SESSION['access'];
$query="SELECT * FROM user WHERE id='$user'";
$result=$db->select($query);
$row=$result->fetch_array();

?>

        <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start active open">
                <a href="home.php" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            <?php if ($row['id']=='1')
            {
            ?>
            <li class="heading">
                <h3 class="uppercase">Features</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-book"></i>
                    <span class="title">Book detail with file</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="insert_file.php" class="nav-link ">
                            <span class="title">insert detail</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="v_file.php" class="nav-link ">
                            <span class="title">view  detail</span>
                        </a>
                    </li>
                </ul>
            </li>

         <!--   <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">News</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="insert_news.php" class="nav-link ">
                                        <span class="title">insert news
                                        </span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="v_news.php" class="nav-link ">
                            <span class="title">view news</span>
                        </a>
                    </li>
                </ul>
            </li>
            -->
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-bulb"></i>
                    <span class="title">Services</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="insert_ser.php" class="nav-link ">
                            <span class="title">insert services</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="v_ser.php" class="nav-link ">
                            <span class="title">view services</span>
                        </a>
                    </li>
                </ul>
            </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-buysellads"></i>
                        <span class="title">Advertisement</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="insert_ads.php" class="nav-link ">
                                <span class="title">insert ads</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="v_ads.php" class="nav-link ">
                                <span class="title">view ads</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-user-secret"></i>
                        <span class="title">Subscribers</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="v_sub.php" class="nav-link ">
                                <span class="title">view Subscribers</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-envelope"></i>
                        <span class="title">Contact Us</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="v_contact.php" class="nav-link ">
                                <span class="title">view contact us</span>
                            </a>
                        </li>
                    </ul>
                </li>
            <?php } ?>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-newspaper-o"></i>
                    <span class="title">Blogs</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <?php if ($row['id']=='1')
                    {
                    ?>
                    <li class="nav-item ">
                        <a href="approving.php" class="nav-link ">Approving blog </a>
                    </li>
                        <li class="nav-item ">
                            <a href="v_all_blog.php" class="nav-link "> view all blogs </a>
                        </li>
                    <?php } ?>
                    <li class="nav-item ">
                        <a href="insert_blog.php" class="nav-link "> insert blogs </a>
                    </li>
                    <li class="nav-item ">
                        <a href="v_blog.php" class="nav-link "> view blogs </a>
                    </li>
                </ul>
            </li>
            <?php if ($row['id']=='1')
            {
            ?>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Authors</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="insert_auth.php" class="nav-link ">
                            <span class="title">insert authors</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="v_auth.php" class="nav-link ">
                            <span class="title">view authors</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="heading">
                <h3 class="uppercase">Control</h3>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">insert book categories</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <?php  ?>
                        <a href="insert_slideshow.php" class="nav-link ">
                            <span class="title">insert category</span>
                        </a>
                        <?php

                        ?>

                    </li>
                    <li class="nav-item  ">
                        <a href="v_slide.php" class="nav-link ">
                            <span class="title">view category</span>
                        </a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">User</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <?php if ($row['id']=='1')
                    {
                    ?>
                    <li class="nav-item  ">
                        <a href="insert_user.php" class="nav-link ">
                            <span class="title">insert user</span>
                        </a>
                    </li>
                    <?php } ?>
                    <li class="nav-item  ">
                        <a href="v_profile.php" class="nav-link ">
                            <span class="title">view profile</span>
                        </a>
                    </li>
                </ul>
            </li>


        </ul>
        <!-- END SidEBAR MENU -->