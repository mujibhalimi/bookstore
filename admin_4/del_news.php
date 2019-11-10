<?php
$id=$_GET['id'];
include "config.php";
include "core.php";
$db=new core();

$queryunlink="SELECT * FROM b_news WHERE id='$id'";
$unlinkresult=$db->select($queryunlink);

$row1=$unlinkresult->fetch_array();

$pic=$row1['pic'];

unlink("../images/add-banners/add-books/$pic");

$query="delete from b_news WHERE id='$id'";

$run=$db->delete($query);

header("location:v_news.php?msg=deleted");