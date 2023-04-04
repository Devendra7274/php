<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>

</head>
<body>
       <form action="switch.php" method="get">

       <input type="text" name="name">
       <br><br>
       <input type="submit" >
       </form>


    <?php
            $a=$_GET['name'];

            switch($a)
            {
                case 1:echo 'sunday';
                break;
                case 2:echo 'monday';
                break;
                case 3:echo 'tuesday';
                break;
                case 4:echo 'wednesday';
                break;
                case 5:echo 'thrusday';
                break;
                case 6:echo 'friday';
                break;
                case 7:echo 'saturday';
                break;
                default:echo 'enter valid no..';
                break;

            }
    
    ?>
</body>
</html>