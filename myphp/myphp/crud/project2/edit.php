<?php
        include("db.php");
        $id=$_GET['id'];
        $sql="select * from details where sr_no='$id'";
        $result=mysqli_query($conn,$sql);
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         while($fetch=mysqli_fetch_assoc($result))
         {?>

<form action="update.php" method="POST">


<input type="hidden" name="sr_no" value="<?= $fetch['sr_no'];?>">
<input type="text" name="fname" value='<?php echo $fetch['fname'];?>' placeholder="first name..">
<br>
<br>
<input type="text" name="lname" value='<?php echo $fetch['lname'];?>' placeholder="last name">
<br>
<br>
<input type="email" name="email" value='<?php echo $fetch['email'];?>' placeholder="email" >
<br>
<br>
<input type="text" name="city" value='<?php echo $fetch['city'];?>' placeholder="city">
<br>
<br>
<input type="mobile" name="mobile" value='<?php echo $fetch['mobile'];?>' placeholder="mobile">
<br>
<input type="submit" name="submit" value="send" >

        </form>
   <?php
        //        }
        //          if(isset($_POST['submit']))
        //          {
        //                 {
        //                         $fname=$_POST['fname'];
        //                         $lname=$_POST['lname'];
        //                         $email=$_POST['email'];
        //                         $city=$_POST['city'];
        //                         $phone=$_POST['mobile'];

                          
        //                         $update="UPDATE details SET fname='$fname',lname='$lname',email='$email', city='$city', mobile='$phone'
        //                               WHERE id='$id'";
        //                         $result=mysqli_query($conn,$update);
        //                         if($result)
        //                         {
        //                               header("location:display.php");
        //                         }  
                          
        //                      }   
                 }
        ?>
        
    
</body>
</html>
