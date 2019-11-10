<?php
$con=mysqli_connect('localhost','root','','bookstore');
//include "admin_4/config.php";
//include "admin_4/core.php";
//$db=new core();
if (isset($_POST['done']))
{
    $comment=$_POST['comment'];
    $name=$_POST['username'];
//    $subject=$_POST['subject'];
  //  $p_no=$_POST['p_no'];
    //$id=$_POST['id'];
    $query="INSERT INTO pc(comment,fullname) VALUES ('$comment','$name')";
   mysqli_query($con,$query);
    //$run=$db->insert($query);
    exit();
}
