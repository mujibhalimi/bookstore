<?php
$id=$_GET['id'];
include "config.php";
include "core.php";
$db=new core();
$select = "SELECT * FROM blog WHERE blog_id = $id" ;
$result=$db->select($select);
$row=$result->fetch_array();
$file=$row['photo'];


unlink("../images/large-blog/$file") ;


$query="delete from blog WHERE blog_id='$id'";

$run=$db->delete($query);
