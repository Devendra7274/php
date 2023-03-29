<?php
$conn=new mysqli('localhost','root','','DU');
$id=$_GET['id'];
$sql="delete from student where sid='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    
    header("Location:fetch.php");
    
}

?>