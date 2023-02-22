<?php

// 3- We have an array $salaries which contains integers and floats.
//Write a script to round the floats and format all numbers.



$salaries = [4000 , 7000.69, 8765.40 , 987.90 , 3000];

foreach($salaries as &$value){
    if (is_float($value)) {
        $value=round($value);
        echo $value."<br>";
    }
    }
    
     echo '<pre>';
     print_r($salaries);
     echo '</pre>';

 echo "<br>";
 ////////////////////////////////////////
     foreach($salaries as &$value){
            $value=number_format($value);
           // $value=number_format($value,2);//default zero
            echo $value."<br>";
        }
        
         echo '<pre>';
         print_r($salaries);
         echo '</pre>';
    
echo "<br>";
////////////////////////////////////////
//array_map(fun(){},$arr);

// or $salaries=array_map(function($value){
$formattedsalaries=array_map(function($value){
return number_format($value);
},$salaries);

print_r($salaries);
echo "<br>";
print_r($formattedsalaries);
echo "<br>";



    ?>