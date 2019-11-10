<?php  session_start(); if(empty($_SESSION['access'])) { header("location:index.php"); } ?>
<?php
$id=$_GET['id'];
include "core.php";
include "config.php";
$db = new core();
if (isset($_POST['btn'])) {

    $head1=$_POST['head1'];

    $head2=$_POST['head2'];

    $query = "UPDATE catagories SET ct_name='$head1', pt_name='$head2' WHERE cid='$id'";

    $run = $db->update($query);
}

$select_query="select * from catagories WHERE cid='$id'";

$result=$db->select($select_query);

$row=$result->fetch_array();

$cid=$row['cid'];
$ct_name=$row['ct_name'];
$pt_name=$row['pt_name'];
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
                                        <i class="fa fa-book"></i>
                                        <span class="caption-subject font-red-sunglo bold uppercase">update book category</span>
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
                                    <form action="edit_slide.php?id=<?php echo $id=$cid; ?>" method="post" enctype="multipart/form-data" class="horizontal-form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">insert Category</label>
                                                        <input type="text"  name="head1" class="form-control input-" value="<?php echo $ct_name; ?>" placeholder="insert category">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">د کټګورۍ داخلول</label>
                                                        <input type="text"  name="head2" class="form-control input-" value="<?php echo $pt_name; ?>" placeholder="کټهګورې داخله کړئ">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                        </div>
                                        <div class="form-actions left">
                                            <button type="button" class="btn default">Cancel</button>
                                            <button type="submit" name="btn" class="btn blue">
                                                <i class="fa fa-check"></i> update</button>
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
</body>

</html>