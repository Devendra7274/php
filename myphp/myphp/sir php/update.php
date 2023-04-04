<?php
$conn=new mysqli('localhost','root','','DU');
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];

$sql="update student set sname='$name',semail='$email' where sid='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    echo "alert('Data Added')";
    header("Location:fetch.php");
    
}