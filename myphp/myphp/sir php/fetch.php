<?php
$conn=new mysqli('localhost','root','','DU');
$sql="select * from student";
$result=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-dark">
        <tr>
                <th>Sr</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
        </tr>
        <?php 
        while($fetch=mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?php echo $fetch['sid'] ;?></td>
                <td><?php echo $fetch['sname']; ?></td>
                <td><?php echo $fetch['semail']; ?></td>
                <td><a href="edit.php?id=<?php echo $fetch['sid'] ;?>" class="btn btn-info">Edit</a><a href="delete.php?id=<?php echo $fetch['sid'] ;?>" class="btn btn-danger">Delete</a>
        </tr>
        <?php }?>

</body>
</html>