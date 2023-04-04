<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

        // array methods


        // in_array    -> it gives us true/false is array in  

                            // $a=[1,2,3,4,5];
                            // $c=array_search(7,$a);
                            // echo $c;

        //  array_search   -> index value search search karega 


                            // $a=[1,2,3,4,5];
                            // $c=array_search(6,$a);
                            // echo $c;

        //  array_replace    -> replace the value using index 

                            // $a=['apple','kiwi','banana','mango'];
                            // $b=['tomato','potato'];
                            // $c=array_replace($a,$b);
                            // echo '<pre>';
                            // print_r($c);
                            // echo '</pre>';


         //   array_replace_recursive


                                // $a=[
                                //     array('apple','mango','kiwi','banana'),
                                //     array('orange','grapes','guavava')
                                // ];
                                // $b=[
                                //     array('tomato','potato','brinjal'),
                                //     array('beans','capsicum')

                                // ];

                                // $c=array_replace_recursive($a,$b);
                                // echo '<pre>';
                                // print_r($c);
                                // echo '</pre>';


        //    array_pop       ->it delete the last index value 
        
                                // $a=['ram','shyam','golu','mohan'];
                                // array_pop($a);
                                
                                // echo '<pre>';
                                // print_r($a);
                                // echo '</pre>';


        //   array_push         -> it add the value in last index

                                
                                // $a=['ram','shyam','golu','mohan'];
                                // $c=array_push($a,'rahul');
                                
                                // echo '<pre>';
                                // print_r($a);
                                // echo '</pre>'

        //  array_merge        -> it merge two arrays
        
                                // $a=[1,2,3,4,5];
                                // $b=[6,7,8,9];
                                // $c=array_merge($a,$b);
                                
                                // echo '<pre>';
                                // print_r($c);
                                // echo '</pre>'

        //  array_merge_recursive
        
        
                                // $a=[
                                //     array(1,2,3,4),
                                //     array(5,6,7,8)
                                // ];
                                // $b=[
                                //     array(9,10,11,12),
                                //     array(13,14,15)
                                // ];

                                // $c=array_merge_recursive($a,$b);
                                //  echo '<pre>';
                                //  print_r($c);
                                //  echo '</pre>';

        //  array_combine

                                // $a=[1,2,3,4];
                                // $b=['ram','shyam','golu','rahul'];

                                // $c=array_combine($b,$a);
                                // print_r($c);


        //  array_flip
                                

                                // $b=['ram'=>1,'shyam'=>2,'golu'=>3,'rahul'=>4];

                                // $c=array_flip($b);
                                // print_r($c);

                                
        //  array_sum         -> it gives us the sum of values given in arrays


                                //   $a=[1,2,3,34,5,6,];
                                //   $c=array_sum($a);
                                //   echo $c;


        //  array_product     ->   it multipy the whole value given in array
                                    

                                //   $a=[1,2,3,34,5,6,];
                                //   $c=array_product($a);
                                //   echo $c;

        //  array_key         -> it gives us index value


                                //   $a=[1,2,3,34,5,6,];
                                //   $c=array_keys($a);
                                //   echo'<pre>';
                                //   print_r($a);
                                //   echo '</pre>';   


        //  array_key_first      -> it gives first index of array
        
                                    // $a=[1,2,3,34,5,6,];
                                    // $c=array_key_last($a);
                                    // echo '<pre>';
                                    // print_r($c);
                                    // echo '</pre>';


        //  array_key_last          -> it gives us last index of array
        
                                    
                                    // $a=[1,2,3,34,5,6,];
                                    // $c=array_key_last($a);
                                    // echo '<pre>';
                                    // print_r($c);
                                    // echo '</pre>';

        //  array_key_exist
                                  
                                    // $a=['ram'=>2,'rahul'=>3,'golu'=>4];
                                    // $c=array_key_exist(2,$a);
                                    // echo '<pre>';
                                    // print_r($a);
                                    // echo '</pre>';

         //   array_diff
                                    $a=array('a'=>'red','b'=>'green','c'=>'blue','d'=>'black');
                                    $b=array('a'=>'red','b'=>'orange','c'=>'pink');
                                    $c=array_diff($a,$b);
                                    echo '<pre>';
                                    print_r($c);
                                    echo '</pre>';
                                
                                    
                        





?>
    
</body>
</html>