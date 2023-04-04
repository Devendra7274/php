<?php
     session_start();
     if(!isset($_session['log']))
     {
          header("location:login.php");
     }
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
        body{
            background-image: url("b.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
      
        .login{
                width:350px;
                height:450px;
                padding:20px;
                margin-top: 30px;
                margin-left: 460px;
                border-radius: 20px 0px 20px 0px ;
                box-shadow: 10px 10px 10px red;
                background-color:rgba(0, 0, 0, 0.603);
                
        }
        input{
             padding:5px;
        }
        #adds{
           
               margin-left:500px;
               margin-top:10px;
               
             
        }
      
    </style>
</head>
<body>
<h1 id="adds">Add Student</h1>


<form action="add.php" method="POST" class="login">


            <input type="text" name="fname" placeholder="first name" required>
            <br><br>
            <input type="text" name="lname" placeholder="last name" required>
            <br><br>
            <input type="email" name="email" placeholder="email" required>
            <br><br>
            <input type="text" name="city" placeholder="city" required>
            <br><br>
            <input type="number" name="phone" placeholder="phone No." required>
            <br><br>
            <input type="number" name="pincode" placeholder="pincode" required>
            <br><br>
            <input type="password" name="pass" placeholder="password" required>
            <br><br>
            <input type="submit" value="submit" class="btn btn-primary" >
           
</form>


    
</body>
</html>