<?php

include('db.php');

$name=$_POST['name'];
$batch=$_POST['batch'];
$jdate=$_POST['jdate'];




$sql="INSERT INTO cstudent(name,batch,jdate)VALUES('$name','$batch','$jdate')";

$result=mysqli_query($conn,$sql);
if($result)
{
    echo "Data added";
}






?>