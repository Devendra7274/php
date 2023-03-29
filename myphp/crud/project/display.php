<?php

    include("db.php");
    $sql="select *from employe";
    $result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
           .navbar{
                    width:100%;
                    height:50px;
                    background-color: red;
           }
           ul{
               
           }
           li{
                float: left;
                list-style-type: none;
                margin-left: 10px;
                font-size: 20px;

           }
    </style>
</head>
<body>
<div class="navbar">
          <ul>
              <li><a href="front.php" class="btn btn-primary">Add</a></li>
              <li><form action="search.php" method="GET">
                    <input type="search" name="search"  placeholder="search.." required >
                    <input type="submit" value="search"  class="btn btn-success">
              </form></li>
          </ul>
           
    </div>
      <table class="table table-light">
                <tr >
                    <th>SR_NO</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Pincode</th>
                    <th>Action</th>

                </tr>

             <?php
                
                  while($fetch=mysqli_fetch_assoc($result))
                  { $id=$fetch['id']; ?>

                     <tr>
                            
                            <td><?php echo $id;?></td>
                            <td><?php echo $fetch['fname'];?></td>
                            <td><?php echo $fetch['lname'];?></td>
                            <td><?php echo $fetch['email'];?></td>
                            <td><?php echo $fetch['city'];?></td>
                            <td><?php echo $fetch['phone'];?></td>
                            <td><?php echo $fetch['pincode'];?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $id;?>" class="btn btn-danger">Edit</a>
                                <a href="delete.php?id=<?php echo $id;?>" class="btn btn-info">delete</a>
                             </td>

                     </tr>
                  <?php
                  }
             ?>   
          

      </table>
    
</body>
</html>