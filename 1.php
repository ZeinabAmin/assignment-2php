<?php
//1- Write a script to get longest name of array $names 

$names = [ 'Ali' ,'Ahmed','Hassan' , 'Abdelrahman' ];

$longestName= '';
// or $longestName=$names[0];


foreach($names as $name){
    if(strlen($name) > strlen($longestName)){
        $longestName = $name;
    }
}

echo $longestName ;


?>