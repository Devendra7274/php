<?php
include("db.php");

$id=$_GET['id'];

$sql="delete from details where sr_no=$id";

$result=mysqli_query($conn,$sql);

if($result)
{
    header("location:display.php");
}





?>