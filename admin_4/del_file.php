<?php
$id=$_GET['id'];
include "config.php";
include "core.php";
$db=new core();
$select = "SELECT * FROM bookcata WHERE ccid = $id" ;
$result=$db->select($select);
$row=$result->fetch_array();
$file=$row['file'];
$pic=$row['pic'];

unlink("../file/$file") ;
unlink("../images/upcoming-release/thumb/$pic") ;

$query="delete from bookcata WHERE ccid='$id'";

$run=$db->delete($query);

header("location:v_file.php?msg=deleted");