<?php
$id=$_GET['id'];
include "config.php";
include "core.php";
$db=new core();

$query="delete from services WHERE id='$id'";

$run=$db->delete($query);

header("location:v_ser.php?msg=deleted");