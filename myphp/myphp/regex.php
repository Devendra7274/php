<?php
        // $a="hello how are you3 4 6 2 and tell me something about yourself 201 202 203 204";
        $a="https://www.google.com";
        // $reg=preg_match('/Hello/i',$a);
        // $reg=preg_match('/He[a-z][a-z]o/i',$a);
        // $reg=preg_match_all('/o/i',$a,$array);
    //    $reg=preg_match_all("/https:[\D][\D][a-z][a-z][a-z]\.[a-z][a-z][a-z][a-z][a-z][a-z]\.[a-z][a-z][a-z]/i",$a,$array);
            // $reg=preg_match_all("/[\w]/i",$a,$array);
            // echo '<pre>';
            // print_r($array);
            // echo '</pre>';
            
    //    $arr=['red','green','black','pink','yellow','white'];
    //    $narr=array_chunk($arr,3);
    //    echo '<pre>';
    //    print_r($narr);
    //    echo '</pre>';

    //    $arr=[1,2,3,4,5];
    //    $narr=array_rand($arr);

    //    echo '<pre>';
    //    print_r($narr);
    //    echo '</pre>';


    // function square($a){
    //     $a*=$a;
    //     return $a;
    //  }    
    // $arr=[1,2,3,4,5,9,8,7];
    // $arr1=array_map('square',$arr);
    
    //    echo '<pre>';
    //    print_r($arr1);
    //    echo '</pre>';

    // $arr=[1,2,3,4,5,9,8,7];

    // sort($arr);
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';
      
    // $arr=[10,20,30,40,50,90,80,70];
    // // $arr1=array_reduce($arr,'abc');

    // foreach($arr as $value)
    // {
    //         $value-=10;
    //         echo '<pre>';
    //         print_r($value);
    //         echo '</pre>';
    // }


    // function abc($n){
    // $n-=5;                              
    // return $n;

    // }

//   $arr=[1,2,3,4,5];
//    $arr1=array_map('square',$arr);
   
//    echo '<pre>';
//    print_r($arr1);
//    echo '</pre>';

//    echo '<pre>';
//    print_r($arr);
//    echo '</pre>';

//    function square($n){

//             $n*=$n;
//             return $n;
//    }


// $arr=[9,5,8,3,2,5,1];

//   sort($arr);
//   echo '<pre>';
//   print_r($arr);
//   echo '</pre>';


    $a=[
         array('ram'=>10,
                'rahul'=>20,
                'mohan'=>30
                )
    ];

    foreach($a as $values=>$keys)
    {
          echo '<pre>';
          print_r($keys);
          echo '</pre>';
    }
?>