<?php
//$con=mysqli_connect('localhost','root','','bookstore');
include "admin_4/config.php";
include "admin_4/core.php";
$db=new core();
if (isset($_POST['done']))
{
    $comment=$_POST['comment'];
    $name=$_POST['username'];
  //  $email=$_POST['email'];
    //$subject=$_POST['subject'];
   // $p_no=$_POST['p_no'];
   // $id=$_POST['id'];
    $query="INSERT INTO jan(username,comment) VALUES ('$name','$comment')";
  //  mysqli_query($con,$query);
    $run=$db->insert($query);
    exit();
}
    if (isset($_POST['display']))
    {
        $query="select * from jan";
    //    $result=mysqli_query($con,$query);
      //  while ($row=mysqli_fetch_array($result))
        $result=$db->select($query);
        while ($row=$result->fetch_array()) :

            echo "<p>".$row['username']."</p>";
            echo "<p>".$row['comment']."</p>";
       endwhile;
    }
    exit();

