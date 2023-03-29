<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="conditional_op.php" method='get'>

    <input type="text" name='first'>
    <br>
    <br>
    <input type="text" name='second'>
    <br>
    <br>
    <input type="text" name='third'>
    <br>
    <br>

    <input type="submit" value='add' >
    </form>

    <?php

        $a=$_GET['first'];
        $b=$_GET['second'];
        $c=$_GET['third'];

    
        // $a=50;
        // $b=50;
        // $c=30;

        if($a>$b)
        {
                if($a>$c)
                {
                    echo "A";
                }
                else
                {
                      echo "C";
                }
        }
        else
        {
                if($b>$c)
                {
                    echo "B";
                }
                else
                {
                    echo "C";
                }
        }
    
    ?>
</body>
</html>