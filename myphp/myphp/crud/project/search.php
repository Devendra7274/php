<?php

        include "db.php";
        if(isset($_POST['search']))
        {
                $name=$_GET['name'];
                $sql="SELECT * FROM employe WHERE name LIKE  ".$name%"";
                $result=mysqli_query($conn,$sql);
                if($result)
                {
                    echo "done"; 
                }
       }  

?>