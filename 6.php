<?php

//6- Write a script to calculate the number of digits in an integer. (Without converting it to any other data type)

$x=22883;
$flag=0;

while($x>1){
    $x/=10;
    $flag++;
};

echo $flag;
echo "<br>";
////////////////////////////////////////
$num=22883;
$digits=0;
$result=$num;

do{
    $result/=10;
    $digits++;
}while($result>1);

echo $digits;
echo "<br>";
////////////////////////////////////////
$num=22883;
$divisor=10;
$digits=1;
$result=$num/$divisor;

while($result>1){
    $digits++;
    $divisor*=10;
    $result=$num/$divisor;
};

echo $digits;


echo "<br>";
////////////////////////////////////////
$num=22883;
$divisor=10;
$digits=0;

do{
    $result=$num/$divisor;
    $divisor*=10;
    $digits++;
}while($result>1);

echo $digits;

?>
