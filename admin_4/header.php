<?php
require_once ("config.php");
require_once ("core.php");
$db=new  core();
$username=$_SESSION['access'];
$userq="SELECT * FROM user WHERE id='$username'";

$userresult=$db->select($userq);

$userrow=$userresult->fetch_array();
?>
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="home.php">
                <img src="../images/footerlogo.png" width="120px" height="40" alt="logo" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->

        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->
            <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->

            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"> </li>

                    <!-- END NOTIFICATION DROPDOWN -->
                    <li class="separator hide"> </li>
                    <!-- BEGIN INBOX DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    <!-- END INBOX DROPDOWN -->
                    <li class="separator hide"> </li>
                    <!-- BEGIN TODO DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    <!-- END TODO DROPDOWN -->

                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile"> <?php echo $userrow['username']; ?></span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            <img alt="" class="img-circle" src="../assets/layouts/layout4/img/<?php echo $userrow['pic']; ?>" /> </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="v_profile.php">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="logout.php">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>