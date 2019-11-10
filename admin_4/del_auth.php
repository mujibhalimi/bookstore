<?php
$id=$_GET['id'];
include "config.php";
include "core.php";
$db=new core();
$select = "SELECT * FROM author WHERE auth_id = $id" ;
$result=$db->select($select);
$row=$result->fetch_array();

$pic=$row['photo'];

unlink("../images/aurthors/$pic") ;

$query="delete from author WHERE auth_id='$id'";

$run=$db->delete($query);

header("location:v_auth.php?msg=deleted");