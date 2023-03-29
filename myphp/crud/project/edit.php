
<!DOCTYPE html>
<html lang="en">
      <title></title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
      <style>
      body{
            background-image: url("b.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .main{
               width:350px;
               height:400px;
               margin-left: 400px;
               
        }
        .login{
                width:350px;
                height:500px;
                padding:20px;
                margin-top: 30px;
                margin-left: 550px;
                position: absolute;
                border-radius: 20px 0px 20px 0px ;
                box-shadow: 10px 10px 10px red;
                background-color:rgba(0, 0, 0, 0.603);
        }
        input{
             padding:5px;
        }
        h6{
             color:white;
        }
      </style>

<body>
<?php 
include("db.php");
$id=$_GET['id'];

$sql="SELECT * FROM employe WHERE id=$id";
$result=mysqli_query($conn,$sql);
if($result){
   while($fetch=mysqli_fetch_assoc($result)){ ?>

      <form action="" method="POST" class="login">

        <h6>FIRST NAME :</h6> <input type="text" name="fname" value='<?php echo $fetch['fname'];?>' placeholder="first name">
         <br>
         <h6>LAST NAME :</h6> <input type="text" name="lname"  value='<?php echo $fetch['lname'];?>' placeholder="last name">
         <br>
         <h6>EMAIL  :</h6> <input type="email" name="email" value='<?php echo $fetch['email'];?>' placeholder="email">
         <br>
         <h6>CITY :</h6> <input type="text" name="city" value='<?php echo $fetch['city'];?>' placeholder="city">
         <br>
         <h6>PHONE NO :</h6> <input type="number" name="phone" value='<?php echo $fetch['phone'];?>' placeholder="phone No.">
         <br>
         <h6>PINCODE :</h6> <input type="number" name="pincode"  value='<?php echo $fetch['pincode'];?>' placeholder="pincode">
         <br><br>
         <input type="submit"  name="submit"value="Update" class="btn btn-primary">
      </form>
   <?php
   }
   if(isset($_POST['submit']))
   {
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $city=$_POST['city'];
      $phone=$_POST['phone'];
      $pincode=$_POST['pincode'];

      $update="UPDATE employe SET fname='$fname',lname='$lname',email='$email', city='$city', phone='$phone', pincode='$pincode'
            WHERE id='$id'";
      $res=mysqli_query($conn,$update);
      if($res)
      {
            header("location:display.php");
      }  

   }
}
?>

</body>
</html>