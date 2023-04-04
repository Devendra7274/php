<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .wrapper {
	margin-top: 80px;
	margin-bottom: 80px;
}

.form-signin {
	max-width: 380px;
	padding: 15px 35px 45px;
	margin: 0 auto;
	background-color: #fff;
	border: 1px solid rgba(0, 0, 0, 0.1);
}

.form-signin .form-signin-heading,
.form-signin .checkbox {
	margin-bottom: 30px;
}

.form-signin .checkbox {
	font-weight: normal;
}

.form-signin .form-control {
	position: relative;
	font-size: 16px;
	height: auto;
	padding: 10px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.form-signin .form-control:focus {
	z-index: 2;
}

.form-signin input[type="text"] {
	margin-bottom: -1px;
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
}

.form-signin input[type="password"] {
	margin-bottom: 20px;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}
    </style>
</head>
<body>
    <div class="wrapper">
        <form class="form-signin" action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
           <h2 class="form-signin-heading">Please login</h2>
           <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
           <input type="password" class="form-control" name="pass" placeholder="Password" required=""/>      
           <label class="checkbox">
           <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
           </label>
           <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>   
        </form>
     </div>
	 <?php
	 
	 			
		if(isset($_POST['submit']))
		{
			include "db.php";
			$username=$_POST['email'];
			$pass=$_POST['pass'];
			$sql="SELECT * FROM employe WHERE email='$username' and pass='$pass'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
				session_start();
				$_SESSION['LOGIN']='yes';
				header("location:display.php");
			}
			else
			{
				echo "wrong details";
			}


		}

	 ?>
    
</body>
</html>