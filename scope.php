<?php

$age = 56;
// 
// function text(){
// #    echo $age;
// }
// text();
// 
// function text2(){
//     $first_name = "Enoch";
//     echo $first_name;
// 
// }
// text2()

function ref_number(){
    static $ref = 00001;
    global $age;
    echo $ref;
    echo "\n";
    echo $age;
    echo "\n";
    $ref++;
}
ref_number();
ref_number();
ref_number();
?>