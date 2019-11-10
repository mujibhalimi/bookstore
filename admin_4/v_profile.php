<?php  session_start(); if(empty($_SESSION['access'])) { header("location:index.php"); } ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Metronic | The Ultimate Multi-purpose Bootstrap Admin Dashboard Theme | Theme #4 | New User Profile | Account</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page of Theme #4 for user account page"
          name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="../assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="../assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="../images/favLogo.png" />
</head>
<!-- END HEAD -->

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<?php include ("header.php"); ?>
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
<?php include ("menu.php"); ?>
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
                    <h1>New User Profile | Account
                        <small>user account page</small>
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
                    <a href="home.php">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span class="active">User</span>
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
            <?php
            $db=new core();
            $user=$_SESSION['access'];
            $query="SELECT * FROM user WHERE id='$user'";
            $result=$db->select($query);
            $row=$result->fetch_array();
            ?>

            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet bordered">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img src="../assets/layouts/layout4/img/<?php echo $row['pic']; ?>" class="img-responsive" alt=""> </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"><?php echo $row['fullname']; ?></div>
                                <div class="profile-usertitle-job"> <?php echo $row['type']; ?> </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <!-- SIDEBAR BUTTONS -->
                            <!-- END SIDEBAR BUTTONS -->
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="v_profile.php">
                                            <i class="icon-settings"></i> Account Settings </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                        <!-- END PORTLET MAIN -->
                        <!-- PORTLET MAIN -->

                        <!-- END PORTLET MAIN -->
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                <form role="form" method="post" action="v_profile.php">
                                                    <div class="form-group">
                                                        <label class="control-label">full Name</label>
                                                        <input type="text" name="fullname" placeholder="first name" value="<?php echo $row['fullname']; ?>" class="form-control" /> </div>
                                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                    <div class="form-group">
                                                        <label class="control-label">user Name</label>
                                                        <input type="text" name="username" placeholder="username" value="<?php echo $row['username']; ?>" class="form-control" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mobile Number</label>
                                                        <input type="text" placeholder="" name="p_no" value="<?php echo $row['p_no']; ?>" class="form-control" /> </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Occupation</label>
                                                        <input type="text" disabled placeholder="" value="<?php echo $row['type']; ?>" class="form-control" /> </div>
                                                    <div class="margiv-top-10">
                                                        <button type="submit" name="btn" class="btn green">Save Changes</button>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->
                                            <!-- CHANGE AVATAR TAB -->
                                            <div class="tab-pane" id="tab_1_2">
                                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod. </p>
                                                <form action="v_profile.php" method="post" enctype="multipart/form-data" role="form">
                                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                    <div class="form-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> Select image </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="file"> </span>
                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix margin-top-10">
                                                            <span class="label label-danger">NOTE! </span>
                                                            <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-10">
                                                       <button type="submit" name="btnimg" class="btn green">Submit</button>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE AVATAR TAB -->
                                            <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_3">
                                                <form action="v_profile.php" method="post">
                                                    <div class="form-group">
                                                        <label class="control-label">Current Password</label>
                                                        <input type="password" name="cp" class="form-control" /> </div>
                                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                    <div class="form-group">
                                                        <label class="control-label">New Password</label>
                                                        <input type="password" name="np" class="form-control" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Re-type New Password</label>
                                                        <input type="password" class="form-control" /> </div>
                                                    <div class="margin-top-10">
                                                        <button type="submit" name="btnp" class="btn green"> Change Password </button>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE PASSWORD TAB -->
                                            <!-- PRIVACY SETTINGS TAB -->

                                            <!-- END PRIVACY SETTINGS TAB -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE CONTENT -->
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include ("footer.php"); ?>
<!-- END FOOTER -->
<!-- BEGIN QUICK NAV -->

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
<script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>
<?php
if (isset($_POST['btn']))
{
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $p_no=$_POST['p_no'];
    $id=$_POST['id'];

    $updateinfo="update user set fullname='$fullname',username='$username',p_no='$p_no' WHERE id='$id'";

    $run=$db->update($updateinfo);

}


if (isset($_POST['btnimg']))
{
    $dir='../assets/layouts/layout4/img/';
    $uploadfile=$dir.basename($_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)){
        $filename=$_FILES['file']['name'];
    }
    $id=$_POST['id'];

    $select="SELECT * FROM user WHERE id='$id'";

    $res=$db->select($select);

    $rew=$res->fetch_array();

    $pic=$rew['pic'];

    unlink("../assets/layouts/layout4/img/$pic");

    $updatepic="update user set pic='$filename' WHERE id='$id'";

    $run=$db->update($updatepic);

}
if (isset($_POST['btnp']))
{
    $id=$_POST['id'];

    $cp=$_POST['cp'];
    $np=$_POST['np'];

    $selectp="SELECT * FROM user WHERE id='$id'";

    $resu=$db->select($selectp);

    $re=$resu->fetch_array();

    $pas=$re['password'];

    if ($pas!=$cp)
    {
    echo "<script>alert('please enter current correct password') </script>";
    }
    else {
        $updatepas = "update user set password=md5('$np') WHERE id='$id'";

        $run = $db->update($updatepas);
    }
}
?>