
<?php
          session_start();
          if(!isset($_session['log']))
          {
               header("location:login.php");
          }
        include("db.php");
       
        $id=$_GET['id'];
        
        $sql="DELETE FROM employe WHERE id='$id'";
       
        $result=mysqli_query($conn,$sql);
        if($result)
        { 
        
            header("location:display.php");
        }

?>



