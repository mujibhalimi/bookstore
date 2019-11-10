<?php
ini_set('display_errors',"0");
ini_set('error_reporting',E_ALL^E_NOTICE^E_STRICT);
$name=$_GET['q'];
include ("admin_4/config.php");

include ("admin_4/core.php");

$db=new core();
$heading_en='%'.$name.'%';
$query="select * from blog WHERE heading LIKE '$heading_en'";

$res=$db->select($query);



    $row = $res->fetch_array();
    $id=$row['blog_id'];


    echo "<a href='blog-detail.php?id=$id'>".$row['heading']."</a>";
