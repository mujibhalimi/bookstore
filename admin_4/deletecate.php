<?php
$id=$_GET['id'];
include "config.php";
include "core.php";
$db=new core();

$query="delete from catagories WHERE cid='$id'";

$run=$db->delete($query);

header("location:v_slide.php?msg=deleted");