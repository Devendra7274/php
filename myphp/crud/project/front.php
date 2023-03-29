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
        .main{
               width:350px;
               height:400px;
               margin:auto;
               margin-top: 50px;
               
        }
        .login{
                width:350px;
                height:500px;
                padding:20px;
                margin-top: 30px;
                margin-left: 80px;
                border-radius: 20px 0px 20px 0px ;
                box-shadow: 10px 10px 10px red;
                background-color:rgba(0, 0, 0, 0.603);
        }
        input{
             padding:5px;
        }
      
    </style>
</head>
<body>
<div class="main">
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
            <input type="submit" value="submit" class="btn btn-primary" >
           
</form>
</div>

    
</body>
</html>