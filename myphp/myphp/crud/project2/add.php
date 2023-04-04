<?php
        $conn=new mysqli('localhost','root','','person');

        
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $city=$_POST['city'];
        $mobile=$_POST['mobile'];
        

        $sql="insert into details(fname,lname,email,city,mobile)values('$fname','$lname','$email','$city',$mobile)";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            header("location:display.php");
        }




?>