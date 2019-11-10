<?php  session_start(); if(empty($_SESSION['access'])) { header("location:index.php"); } ?>
<?php
include "core.php";
include "config.php";
$db = new core();
if (isset($_POST['btn'])) {
    $auth_name=$_POST['aut_name_en'];
    $auth_fname_en=$_POST['aut_fname_en'];
    $bio=$_POST['bio_en'];
    $auth_email=$_POST['auth_email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $authp_name=$_POST['aut_name_p'];
    $authpf_name=$_POST['aut_fname_p'];
    $authp_bio=$_POST['aut_bio_p'];

    $dir='../images/aurthors/';
    $uploadfile=$dir.basename($_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)){
        $filename=$_FILES['file']['name'];
    }
    $query = "INSERT INTO `author` (`auth_name`, `f_name`, `bio`,`phone`,`photo`,`p_author_name`,`p_author_fname`,`p_bio`) VALUES ( '$auth_name','$auth_fname_en','$bio','$phone','$filename','$authp_name','$authpf_name','$authp_bio')";
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
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="portlet light portlet-fit portlet-form bordered" id="form_wizard_1">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-green"></i>
                                <span class="caption-subject font-green sbold uppercase">insert author and registration form</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-cloud-upload"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <!-- BEGIN FORM-->
                            <form action="insert_auth.php" enctype="multipart/form-data" method="post" class="form-horizontal">
                                <div class="form-body">
                                    <h3 class="form-section">write the information in pashto</h3>
                                    <!--for pashto-->

                                    <div class="form-group">
                                        <label class="control-label col-md-3">Name:</label>
                                        <div class="col-md-4">
                                            <input type="text" name="aut_name_p" class="form-control">
                                            <span class="help-block"> insert author or translator Name </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">father name:</label>
                                        <div class="col-md-4">
                                            <input type="text" name="aut_fname_p" class="form-control">
                                            <span class="help-block"> insert author or translator father name </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Bio:</label>
                                        <div class="col-md-9">
                                            <textarea rows="15" name="aut_bio_p" required class="ckeditor form-control"></textarea>                                            <span class="help-block"> insert author or translator bio </span>
                                        </div>
                                    </div>

                                    <h3 class="form-section">write the information in english</h3>
                                    <!--for english-->
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Name:</label>
                                        <div class="col-md-4">
                                            <input type="text" name="aut_name_en" class="form-control">
                                            <span class="help-block"> insert author or translator Name </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">father name:</label>
                                        <div class="col-md-4">
                                            <input type="text" name="aut_fname_en" class="form-control">
                                            <span class="help-block"> insert author or translator father name </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">phone nomber:</label>
                                        <div class="col-md-4">
                                            <input type="text" name="phone" class="form-control">
                                            <span class="help-block"> insert author or translator phone</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">chose photo for author</label>
                                        <div class="col-md-4">
                                            <input type="file" name="file" class="form-control">
                                            <span class="help-block"> insert author or translator photo  </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Bio:</label>
                                        <div class="col-md-9">
                                            <textarea rows="15"  required class="ckeditor form-control" name="bio_en"></textarea>                                            <span class="help-block"> insert author or translator bio </span>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" name="btn" class="btn green">Submit</button>
                                            <button type="button"  class="btn default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
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