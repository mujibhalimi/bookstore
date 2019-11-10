<?php  session_start(); if(empty($_SESSION['access'])) { header("location:index.php"); } ?>
<?php
include ("config.php");
include ("core.php");
$db=new core();
if (isset($_POST['btn']))
{
    $id=$_POST['cate'];
    $name=$_POST['english_name'];
    $pname=$_POST['pashto_name'];
    $pbody=$_POST['body2'];
    $body=$_POST['body1'];
    $author_type=$_POST['author_type'];
    $author_name=$_POST['author_name'];
    $price=$_POST['price'];
    $year=$_POST['year'];
    $pages=$_POST['pages'];
    $dir='../file/';
    $uploadfile=$dir.basename($_FILES['file1']['name']);
    if(move_uploaded_file($_FILES['file1']['tmp_name'],$uploadfile)){
        $filename=$_FILES['file1']['name'];
    }

    $dir='../images/upcoming-release/thumb/';
    $uploadfile1=$dir.basename($_FILES['file2']['name']);
    if(move_uploaded_file($_FILES['file2']['tmp_name'],$uploadfile1)){
        $filename1=$_FILES['file2']['name'];
    }

    $query="INSERT INTO bookcata(cata_id,bname,btext,file,pic,pbookname,pbooktext,book_price,auth_id,p_type_id,print_year,pages) VALUES ('$id','$name','$body','$filename','$filename1','$pname','$pbody','$price','$author_name','$author_type','$year','$pages')";
    $db->insert($query);
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
<?php include("menu.php");  ?>
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
                    <h1>Insert File
                        <small>Be Carefully to insert vaild file here!</small>
                    </h1>
                </div>
                <!-- END PAGE TITLE -->
                <!-- BEGIN PAGE TOOLBAR -->
                <div class="page-toolbar">
                    <!-- BEGIN THEME PANEL -->
                    <!-- END THEME PANEL -->
                </div>
                <!-- END PAGE TOOLBAR -->
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                    <i class="fa fa-"></i>
                </li>
                <li>
                    <span class="active">insert file</span>
                </li>
            </ul>
            <?php if (isset($_POST['msg']))
            {


                    echo '<div class="alert alert-success">'.$msg.'</div>';
                }
                    ?>

            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-12">

                    <div class="portlet light bordered" id="form_wizard_1">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class=" icon-layers font-red"></i>
                                <span class="caption-subject font-red bold uppercase"> Form Wizard -
                                            <span class="step-title"> Step 1 of 2 </span>
                                        </span>
                            </div>
                            <div class="actions">
                                <a class="btn btn- btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-cloud-upload"></i>
                                </a>
                                <a class="btn btn- btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn- btn-icon-only btn-default" href="javascript:;">
                                    <i class="icon-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form class="form-horizontal" action="insert_file.php" enctype="multipart/form-data" id="submit_form" method="POST">
                                <div class="form-wizard">
                                    <div class="form-body">
                                        <ul class="nav nav-pills nav-justified steps">
                                            <li>
                                                <a href="#tab1" data-toggle="tab" class="step">
                                                    <span class="number"> 1 </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Chose Categories </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
                                                    <span class="number"> 2 </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Insert File </span>
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
                                                <h3 class="block">Chose the Catagories for file</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Username
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">

                                                       <select class="form-control" name="cate" required>
                                                       <option disabled >!--select category--!</option>
                                                           <?php
                                                           $query="select * from catagories ";
                                                           $db=new core();
                                                           $result=$db->select($query);
                                                           while ($row=$result->fetch_array()):

                                                           ?>
                                                           <option value="<?php echo $row['cid']; ?>" ><?php echo $row['ct_name']; ?> </option>
                                                           <?php endwhile; ?>
                                                       </select>

                                                        <span class="help-block"> Chose File category </span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <h3 class="form-section">write the information in pashto</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">chose file
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="file" class="form-control "  name="file1" />
                                                        <span class="help-block"> chose file </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">chose photo
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="file" class="form-control" required name="file2" />
                                                        <span class="help-block"> chose photo </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Book Name for pashto
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" required style="text-align: right" name="pashto_name" />
                                                        <div id="form_gender_error"> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">About Book in pashto
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <textarea rows="15" required class="ckeditor form-control" style="text-align: right" name="body2"></textarea>
                                                        <span class="help-block"> Provide information about book </span>
                                                    </div>
                                                </div>
                                                <h3 class="form-section">write the information in english</h3>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Book Name for english
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control " required name="english_name" />
                                                        <div id="form_gender_error"> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">About Book in english
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-8">
                                                       <textarea rows="15" required class="ckeditor form-control" name="body1"></textarea>
                                                        <span class="help-block"> Provide information about book </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Chose Author/Translator
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="author_type" id="">
                                                            <?php $db=new core();
                                                            $queryforaut="select * from p_type ";
                                                            $result=$db->select($queryforaut);
                                                            while ($row=$result->fetch_array()) :
                                                                ?>
                                                                <option value="<?php echo $row['p_id']; ?>"><?php echo $row['type']; ?></option>

                                                            <?php endwhile; ?>
                                                        </select>
                                                        <span class="help-block"> Chose Author /Translator </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Chose Author/Translator name
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="author_name" id="">
                                                            <?php $db=new core();
                                                            $queryforaut="select * from author ";
                                                            $result=$db->select($queryforaut);
                                                            while ($row=$result->fetch_array()) :
                                                            ?>
                                                            <option value="<?php echo $row['auth_id']; ?>"><?php echo $row['auth_name']; ?></option>

                                                            <?php endwhile; ?>
                                                        </select>
                                                        <span class="help-block"> Chose Author /Translator name</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">enter the total price
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="price" class="form-control">
                                                        <span class="help-block">enter the total price</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">enter the total book pages
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="pages" class="form-control">
                                                        <span class="help-block">enter the total pages</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">enter the print year
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-8">
                                                        <input type="date" name="year" class="form-control form-control-inline input-medium date-picker">
                                                        <span class="help-block">enter the print year</span>
                                                    </div>
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
                                                <button type="submit" name="btn" class="btn green button-submit">Save</button>
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
    <!-- BEGIN QUICK SIDEBAR -->

    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include ("footer.php")
?>
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
<script src="../assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
</body>

</html>