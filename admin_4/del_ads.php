<?php
$id=$_GET['id'];
include "config.php";
include "core.php";
$db=new core();
$select = "SELECT * FROM ads WHERE ads_id = $id" ;
$result=$db->select($select);
$row=$result->fetch_array();

$pic=$row['photo'];

unlink("../images/add-banners/add-books/$pic") ;

$query="delete from ads WHERE ads_id='$id'";

$run=$db->delete($query);