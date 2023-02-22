<?php

//5- Write a script to shuffle array elements. (Don’t use shuffle predefined function)


$nums = [1,2,3,4,5,6,7,8,9];
$shuffle = count($nums);

for($i=0; $i<$shuffle;$i++){
    $shufflenum1 = rand(0,count($nums)-1);
    $shufflenum2 = rand(0,count($nums)-1);

if($shufflenum1 != $shufflenum2){

$temp = $nums[$shufflenum1];
$nums[$shufflenum1]=$nums[$shufflenum2];
$nums[$shufflenum2]= $temp;

    }
}


echo '<pre>';
 print_r($nums);
 echo '</pre>';


 //shuffle()

 $my_arr=array(3,5,6,8,9,5);
 shuffle($my_arr);
 print_r($my_arr);
?>