<?php
$conn=new mysqli('localhost','root','','DU');
$id=$_GET['id'];
$sql="select * from student where sid='$id'";
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

    <form action="update.php" method="post">
   
    <input type="hidden" name='id' value='<?php echo $fetch['sid'] ;?>'><br>
    <input type="text" name='name' value='<?php echo $fetch['sname'] ;?>'><br>
    <input type="email" name='email' value='<?php echo $fetch['semail'] ;?>'><br>
    <input type="submit" value="Update">
   
</form> <?php }?>
</body>
</html>