<?php  session_start(); if(empty($_SESSION['access'])) { header("location:index.php"); } ?>

<?php
include "config.php";
include "core.php";
$db=new core();
if (isset($_POST['btn']))
{
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $fullname=$_POST['fullname'];
    $gender=$_POST['gender'];
    $type=$_POST['type'];

    $dir='../assets/layouts/layout4/img/';
    $uploadfile1=$dir.basename($_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile1)){
        $filename1=$_FILES['file']['name'];
    }

    $query="INSERT INTO user (username,password,email,fullname,p_no,gender,pic,type) VALUES ('$username',MD5('$pass'),'$email','$fullname','$phone','$gender','$filename1','$type')";
    $run=$db->insert($query);

}





?>
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Momand Books Store</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="#Momand Books Store"
          name="description" />
    <meta content="Momand Books Store" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="../assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="../assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="../images/favLogo.png" /> </head>
<!-- END HEAD -->

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<?php   include "header.php"; ?>
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
            <?php include "menu.php"; ?>
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
                    <h1>Bootstrap Form Wizard
                        <small>bootstrap form wizard demos using Twitter Bootstrap Wizard Plugin</small>
                    </h1>
                </div>
                <!-- END PAGE TITLE -->
                <!-- BEGIN PAGE TOOLBAR -->

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
                    <div class="portlet light bordered" id="form_wizard_1">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-red"></i>
                                <span class="caption-subject font-red bold uppercase"> Form Registration user -
                                            <span class="step-title"> Step 1 of 2 </span>
                                        </span>
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
                        <div class="portlet-body form">
                            <form class="form-horizontal" action="insert_user.php" enctype="multipart/form-data" id="submit_form" method="POST">
                                <div class="form-wizard">
                                    <div class="form-body">
                                        <ul class="nav nav-pills nav-justified steps">
                                            <li>
                                                <a href="#tab1" data-toggle="tab" class="step">
                                                    <span class="number"> 1 </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Account Setup </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
                                                    <span class="number"> 2 </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Profile Setup </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                            <div class="progress-bar progress-bar-success"> </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="alert alert-danger display-none">
                                                <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                            <div class="alert alert-success display-none">
                                                <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                            <div class="tab-pane active" id="tab1">
                                                <h3 class="block">Provide your account details</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Username
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="username" />
                                                        <span class="help-block"> Provide your username </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Password
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="password" class="form-control" name="password" id="submit_form_password" />
                                                        <span class="help-block"> Provide your password. </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Confirm Password
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="password" class="form-control" name="rpassword" />
                                                        <span class="help-block"> Confirm your password </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Email
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="email" />
                                                        <span class="help-block"> Provide your email address </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <h3 class="block">Provide your profile details</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Fullname
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="fullname" />
                                                        <span class="help-block"> Provide your fullname </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Phone Number
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="phone" />
                                                        <span class="help-block"> Provide your phone number </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Gender
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <div class="radio-list">
                                                            <label>
                                                                <input type="radio" name="gender" value="M" data-title="Male" checked /> Male </label>
                                                            <label>
                                                                <input type="radio" name="gender" value="F" data-title="Female" /> Female </label>
                                                        </div>
                                                        <div id="form_gender_error"> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">user photo
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="file" class="form-control" name="file" />
                                                        <span class="help-block"> Provide your photo </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">user type
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                       <select class="form-control"  name="type" >
                                                           <option value="Admin">admin</option>
                                                           <option value="User">User</option>
                                                       </select>
                                                        <span class="help-block"> Provide your photo </span>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <a href="javascript:;" class="btn default button-previous">
                                                    <i class="fa fa-angle-left"></i> Back </a>
                                                <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <button type="submit" class="btn green button-submit" name="btn">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include "footer.php"; ?>
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
<script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/pages/scripts/form-wizard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>