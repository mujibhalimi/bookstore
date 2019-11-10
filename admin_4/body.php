<?php  if(empty($_SESSION['access'])) { header("location:index.php"); } ?>
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- BEGIN SIDEBAR -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">

            <?php include ("menu.php"); ?>
    <!-- END SIDEBAR -->
            </div>
        </div>
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>Admin Dashboard
                        <small>reports</small>
                    </h1>
                </div>
                <!-- END PAGE TITLE -->
                <!-- BEGIN PAGE TOOLBAR -->
                <div class="page-toolbar">

                    <!-- BEGIN THEME PANEL -->
                    <div class="btn-group btn-theme-panel">
                        <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-settings"></i>
                        </a>
                        <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <h3>HEADER</h3>
                                    <ul class="theme-colors">
                                        <li class="theme-color theme-color-default active" data-theme="default">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Dark Header</span>
                                        </li>
                                        <li class="theme-color theme-color-light " data-theme="light">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Light Header</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                    <h3>LAYOUT</h3>
                                    <ul class="theme-settings">
                                        <li> Theme Style
                                            <select class="layout-style-option form-control input-small input-sm">
                                                <option value="square">Square corners</option>
                                                <option value="rounded" selected="selected">Rounded corners</option>
                                            </select>
                                        </li>
                                        <li> Layout
                                            <select class="layout-option form-control input-small input-sm">
                                                <option value="fluid" selected="selected">Fluid</option>
                                                <option value="boxed">Boxed</option>
                                            </select>
                                        </li>
                                        <li> Header
                                            <select class="page-header-option form-control input-small input-sm">
                                                <option value="fixed" selected="selected">Fixed</option>
                                                <option value="default">Default</option>
                                            </select>
                                        </li>
                                        <li> Top Dropdowns
                                            <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                <option value="light">Light</option>
                                                <option value="dark" selected="selected">Dark</option>
                                            </select>
                                        </li>
                                        <li> Sidebar Mode
                                            <select class="sidebar-option form-control input-small input-sm">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected="selected">Default</option>
                                            </select>
                                        </li>
                                        <li> Sidebar Menu
                                            <select class="sidebar-menu-option form-control input-small input-sm">
                                                <option value="accordion" selected="selected">Accordion</option>
                                                <option value="hover">Hover</option>
                                            </select>
                                        </li>
                                        <li> Sidebar Position
                                            <select class="sidebar-pos-option form-control input-small input-sm">
                                                <option value="left" selected="selected">Left</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </li>
                                        <li> Footer
                                            <select class="page-footer-option form-control input-small input-sm">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected="selected">Default</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                </div>
                <!-- END PAGE TOOLBAR -->
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span class="active">Dashboard</span>
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
            <?php if (isset($_GET['insert'])){

                echo '<div class="alert alert-success">'.$_GET['insert'].'</div>';
            }
            ?>
            <?php if (isset($_GET['update'])){

                echo '<div class="alert alert-success">'.$_GET['update'].'</div>';
            }
            ?>
            <?php if (isset($_GET['delete'])){

                echo '<div class="alert alert-danger">'.$_GET['delete'].'</div>';
            }
            ?>

            <?php

            $db=new core();
            $user=$_SESSION['access'];
            $query="SELECT * FROM user WHERE id='$user'";
            $result=$db->select($query);
            $row=$result->fetch_array();

            if ($row['id']=='1')
            {
            ?>
            <div class="row">
                <div class="col-lg-3 col-md-3  col-sm-6 col-xs-12">
                    <div class="dashboard-stat2 bordered">

                        <div class="display">

                            <?php
                            $querycountbook="select * from bookcata";

                            $resultforbook=$db->select($querycountbook);

                            $count=$resultforbook->num_rows;

                            ?>

                            <div class="number">
                                <h3 class="font-green-sharp">
                                    <span data-counter="counterup" data-value="<?php echo $count; ?>">0</span>
                                    <small class="font-green-sharp"></small>
                                </h3>
                                <small>TOTAL books</small>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
                                        <span style="width: <?php echo $count; ?>%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only"><?php echo $count; ?>% books</span>
                                        </span>
                            </div>
                            <div class="status">
                                <div class="status-title"> books </div>
                                <div class="status-number"> <?php echo $count; ?>% </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2 bordered">
                        <div class="display">
                            <?php
                            $querycountauthor="select * from author";

                            $resultforauthor=$db->select($querycountauthor);

                            $countauthor=$resultforauthor->num_rows;

                            ?>
                            <div class="number">
                                <h3 class="font-red-haze">
                                    <span data-counter="counterup" data-value="<?php echo $countauthor; ?>">0</span>
                                </h3>
                                <small>Total Author</small>
                            </div>
                            <div class="icon">
                                <i class="fa fa-pencil-square"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
                                        <span style="width: <?php echo $countauthor; ?>%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only"> <?php echo $countauthor; ?>% author</span>
                                        </span>
                            </div>
                            <div class="status">
                                <div class="status-title"> author </div>
                                <div class="status-number">  <?php echo $countauthor; ?>% </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2 bordered">
                        <div class="display">
                            <?php
                            $querycountblog="select * from blog";

                            $resultforblog=$db->select($querycountblog);

                            $countblog=$resultforblog->num_rows;

                            ?>
                            <div class="number">
                                <h3 class="font-blue-sharp">
                                    <span data-counter="counterup" data-value="<?php echo $countblog; ?> "></span>
                                </h3>
                                <small>total blogs</small>
                            </div>
                            <div class="icon">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
                                        <span style="width: <?php echo $countblog; ?>%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only"><?php echo $countblog; ?>% blogs</span>
                                        </span>
                            </div>
                            <div class="status">
                                <div class="status-title"> blogs </div>
                                <div class="status-number"> <?php echo $countblog; ?>% </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="dashboard-stat2 bordered">
                        <div class="display">
                            <div class="number">
                                <?php
                                $querycountuser="select * from user";

                                $resultforuser=$db->select($querycountuser);

                                $countuser=$resultforuser->num_rows;

                                ?>
                                <h3 class="font-purple-soft">
                                    <span data-counter="counterup" data-value="<?php echo $countuser; ?>"></span>
                                </h3>
                                <small>total USERS</small>
                            </div>
                            <div class="icon">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
                                        <span style="width: <?php echo $countuser; ?>%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only"><?php echo $countuser; ?>% users</span>
                                        </span>
                            </div>
                            <div class="status">
                                <div class="status-title"> users </div>
                                <div class="status-number"><?php echo $countuser; ?>% </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->


    <!-- END QUICK SIDEBAR -->
</div>
