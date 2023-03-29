<?php
      $conn=new mysqli('localhost','root','','company');
  

      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $city=$_POST['city'];
      $phone=$_POST['phone'];
      $pincode=$_POST['pincode'];

    $sql="INSERT INTO employe(fname,lname,email,city,phone,pincode)VALUES('$fname','$lname','$email','$city','$phone','$pincode')";
    
    $result=mysqli_query($conn,$sql);
    if($result)
    { 
       
        header("location:display.php");
    }
    
    




?>