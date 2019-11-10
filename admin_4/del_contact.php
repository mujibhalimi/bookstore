<?php
$id=$_GET['id'];
include "config.php";
include "core.php";
$db=new core();
$query="delete from messages WHERE id='$id'";

$run=$db->delete($query);