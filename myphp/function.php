<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>

<?php

            // function test(&$value){
                
            //     echo $value,'<br>';
            //     $value++;
            // }

            // $a=10;
            // test($a);
            // test($a);


         function test($value){

                    for($i=0;$i<count($value);$i++)
                    {
                        for($j=1;$j<count($value);$j++)
                        {
                            if($value($i)>$value($j))
                            {
                                  $temp=$value($i);
                                  $value($i)=$value($j);
                                  $value($j)=$temp;
                            }
                                echo $temp;
                           
                        }
                    }
         }

         $a=[9,4,8,2,1,5];
         test($a);
        
          
      




?>
    
</body>
</html>