<?php


//4- Write a script to generate a random password with a given $length. 
//The password can contain any ASCII character starting from 33 (! symbol) to 126 (~ symbol)
//https://www.asciitable.com/

$len = 10;
$password = '';

for($i=0 ; $i < $len; $i++){
    $dec = rand(33,126);
    $chr = chr($dec);
    $password .= $chr ;
    echo $dec."<br>";
}


echo $password;



?>