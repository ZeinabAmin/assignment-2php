<?php

$names = ['ahmed', 'mohammed', 'hasan'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>

<?php foreach($names as $name){ ?>

<li> <?php echo $name ?></li>

<?php }?>

</ul>

</body>
</html>




