<?php
/* EXAMPLE OF array_walk()
$fruit=[
    "a"=>"Lemon",
    "b"=>"Banana",
    "c"=>"Guava",
    "d"=>"Graphs"
];

array_walk($fruit,"myFunction");

function myFunction($value,$key){
    echo "$key : $value <br>";
}


// foreach($fruit as $key=>$value){
//     print "$key => $value <br>";
// }

*/
/* EXAMPLE OF array_walk_recursive()
    $new=[
        "1"=>"Monu Singh",
        "2"=>"Sonu Singh"
    ];
$fruit=[
    $new,
    "a"=>"Lemon",
    "b"=>"Banana",
    "c"=>"Guava",
    "d"=>"Graphs"
];

array_walk_recursive($fruit,"myFunction");

function myFunction($value,$key){
    echo "$key : $value <br>";
}


// foreach($fruit as $key=>$value){
//     print "$key => $value <br>";
// }

*/
function myFunction($n){
    return $n * $n ."<br>";
 }
$num = [1,2,3,4,5,6];

   $newarr=array_map("myFunction",$num);
        print_r($newarr);
?>