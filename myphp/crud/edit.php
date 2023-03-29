<?php
        include("db.php");
        $id=$_GET['id'];
        $sql="select *from details where sr_no=$id";
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

<form action="update.php" method="GET">



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
<input type="submit" value="send" >

        </form>
        <?php
               }
        ?>
    
</body>
</html>
