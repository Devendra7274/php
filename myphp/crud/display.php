<?php
        
      include("db.php");
        
      $sql="SELECT * FROM details";
      $result=mysqli_query($conn,$sql);
        
      ?>  
<!DOCTYPE html>
<html lang="en">

<table border=1>

        <tr>
            <th>SR.NO</th>
            <th>First name</th>
            <th>Last name</th>
            <th>email</th>
            <th>city</th>
            <th>mobile no.</th>
            <th>Action</th>

        </tr>

       <?php  
       while($fetch=mysqli_fetch_assoc($result))
       {
            ?>
                    <tr>
                        <td><?php echo $fetch['sr_no'];?></td>
                        <td><?php echo $fetch['fname'];?></td>
                        <td><?php echo $fetch['lname'];?></td>
                        <td><?php echo $fetch['email'];?></td>
                        <td><?php echo $fetch['city'];?></td>
                        <td><?php echo $fetch['mobile'];?></td>
                        <td><a href="edit.php?id=<?php echo $fetch['sr_no'];?>">Edit </a><a href="delete.php?id=<?php echo $fetch['sr_no'];?>"> delete</a></td>

                    </tr>       
      <?php }?> 
</table>
</html>