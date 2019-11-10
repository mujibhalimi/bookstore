<?php  session_start(); if(empty($_SESSION['access'])) { header("location:index.php"); } ?>
<?php
include "core.php";
include "config.php";
$db = new core();
if (isset($_POST['btn'])) {
    $head1=$_POST['head1'];
    $body1=$_POST['body1'];
    $head2=$_POST['head2'];
    $body2=$_POST['body2'];
    $footer=$_POST['footer'];
    $pfooter=$_POST['pfooter'];
    $price=$_POST['price'];
    $dir='../images/add-banners/add-books/';
    $uploadfile=$dir.basename($_FILES['file1']['name']);
    if(move_uploaded_file($_FILES['file1']['tmp_name'],$uploadfile)){
        $filename=$_FILES['file1']['name'];
    }

    $query = "INSERT INTO `b_news` (`heading`, `pashto_head`, `body`, `pic`, `pashto_body`, `pashto_footer`,`footer`,`price`) VALUES ( '$head1', '$head2', '$body1', '$filename', '$body2', '$pfooter','$footer','$price')";
    $run = $db->insert($query);
}


?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8">
    <?php include("head.php"); ?>
</head>
<!-- END HEAD -->

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<?php include("header.php"); ?>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <?php include("menu.php"); ?>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <?php if (isset($_GET['msg']))
                {
                    echo "<div class='alert alert-success'>".$_GET['msg']."</div>";
                }
                ?>
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>Form Layouts
                        <small>form layouts</small>
                    </h1>
                </div>
                <!-- END PAGE TITLE -->
                <!-- BEGIN PAGE TOOLBAR -->
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
                    <span class="active">Form Stuff</span>
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line boxless tabbable-reversed">
                        <div class="tab-pane" id="tab_1">
                            <div class="portlet light bg-inverse">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-equalizer font-red-sunglo"></i>
                                        <span class="caption-subject font-red-sunglo bold uppercase">Insert Slide Show</span>
                                        <span class="caption-helper"></span>
                                    </div>
                                    <div class="tools">
                                        <a href="" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        <a href="" class="reload"> </a>
                                        <a href="" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form action="insert_news.php" method="post" enctype="multipart/form-data" class="horizontal-form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">heading</label>
                                                        <input type="text"  name="head1" class="form-control circle" placeholder="heading">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">عنوان</label>
                                                        <input type="text" id="head2" name="head2" class="form-control circle" placeholder="عنوان">

                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">body</label>
                                                        <textarea rows="15" class="ckeditor form-control" name="body1"  cols="" ></textarea>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">متن</label>
                                                        <textarea rows="15" class="ckeditor form-control" name="body2" style="text-align: right;" cols="" ></textarea>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">file</label>
                                                            <input type="file" class="form-control circle" name="file1" id="file">
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">د لیکوال یا ژباړن نوم</label>

                                                            <input type="text" name="pfooter" class="form-control circle" id="">

                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label">The Writer or translator name</label>

                                                                <input type="text" name="footer" class="form-control circle" id="">

                                                            </div>
                                                    </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">price</label>

                                                                <input type="text" name="price" class="form-control circle" id="">

                                                            </div>
                                                    <!--/span-->
                                                </div>
                                            </div>
                                            <div class="form-actions left">
                                                <button type="button" class="btn default"></button>
                                                <button type="submit" name="btn" class="btn blue">
                                                    <i class="fa fa-check"></i> Save</button>
                                            </div>
                                    </form>
                                    <!-- END FORM-->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include("footer.php"); ?>
<!-- END FOOTER -->
<!-- BEGIN QUICK NAV -->

<div class="quick-nav-overlay"></div>
<!-- END QUICK NAV -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<script src="../assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/pages/scripts/form-samples.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script src="../assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
</body>

</html>