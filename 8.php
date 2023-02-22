<?php
$instructors = [
    'kareem fouad' => [
        'job' => 'backend developer',
        'track' => 'php',
    ],
    'ahmed bahnasy' => [
        'job' => 'frontend developer',
        'track' => 'angular',
    ],
    'ahmed nasr' => [
        'job' => 'backend developer',
        'track' => '.net',
    ],
];


// echo "<ul>";
// foreach($instructors as $key => $value){ 
// echo "<li> $key <ul>";
// foreach($value as $key2 => $value2){ 
// echo "<li> $key2 is $value2 </li>";
//  }
//  echo "</ul> </li>";
//  }
//  echo "</ul>";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<ul>
<?php foreach($instructors as $key => $value){ ?>
<li> <?php echo $key ?>
<ul>
<?php foreach($value as $key2 => $value2){ ?>
<li><?= $key2 ."is". $value2 ?>
</li>
<?php }?>
</ul>
</li>
<?php }?>
</ul>

</body>
</html>
