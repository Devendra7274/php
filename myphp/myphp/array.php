<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>

<?php



    // index array

                // $a=array('ram','shyam','rahul','golu');
                // $a=['ram','shyam','rahul','golu'];
                // echo '<pre>';
                // print_r($a);
                // echo '</pre>';


 //   Associate array

                //    $a=array(

                //                 'ram'=>20,
                //                 'shyam'=>30,
                //                 'rahul'=>40,
                //                 'golu'=>50

                //    );

                //    echo $a['golu'];
                //  foreach($a as $value)
                //  {
                //       echo $value ,'<br>';
                //  }


//        multidimentional array

                // $a=array(

                //         array('ram','rahul','vansh','mohit','varun'),
                //         array('ram','shyam','rahul','golu')

                    
                // );
                    
                // foreach($a as $value=>$key){
                   
                //     foreach($key as $subkeys)
                //     {
                //         echo $subkeys,'<br>';
                //     }
                   
                // }


    //      multidimentional associate array
    
                        //         $a=array(
                                        
                        //                 'ram'=>[
                        //                     'shyam'=>'red',
                        //                 'mohan'=>'blue',
                        //                 'neha'=>'pink'
                        //                 ],
                        //                 'rohit'=>[

                        //                     'vishal'=>'white',
                        //                     'ajay'=>'black',
                        //                     'shivam'=>'red'
                        //                 ]


                        //                 );
                                        
                        // //   echo '<pre>';
                        // //   print_r($a);
                        // //   echo '</pre>';

                        //  foreach($a as $value=>$keys){
                        //       foreach($keys as $subkeys)
                        //       { 
                        //         echo $subkeys,'<br>';
                        //       }
                        //  }



            $arr=array(

                    array(1,'rahul','noida','201310'),
                    array(2,'vishal','noida','201319'),
                    array(3,'ram','noida','201318'),
                    array(4,'shivam','noida','201312')
            );
              
            foreach($arr as $value=>$keys)
            { 
            
                foreach($keys as $subkeys)
                {
                    echo $subkeys;
                }
                echo '<br>';
            }
          
               
?>
    
</body>
</html>