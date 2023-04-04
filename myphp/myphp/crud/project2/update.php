<?php
        require('db.php');
     if(isset($_POST['submit']))
     {
        $id=$_POST['sr_no'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $city=$_POST['city'];
        $mobile=$_POST['mobile'];

        
        $sql="UPDATE details SET fname='$fname' lname='$lname' email='$email' city='$city' mobile=$mobile
        
          WHERE sr_no ='$id'";
          
     $result=mysqli_query($conn,$sql);
        
            if($result)
            {
            
                header("location:display.php");
            }
        }

?>