<?php

$conn=new mysqli('localhost','root','','DU');
$name=$_POST['name'];
$email=$_POST['email'];
$sql="insert into student(sname,semail)values('$name','$email')";
$result=mysqli_query($conn,$sql);
if($result){
 
    header("Location:fetch.php");
}



?>