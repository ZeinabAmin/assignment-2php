<?php

//2- Removing elements from numeric arrays causes missing indexes. Write a script to reset the array indexes. (You can use any predefined functions)

$nums = range(1,10);

unset($nums[2]);

$nums = array_values($nums);

echo '<pre>';
print_r($nums);

echo '</pre>';

//or
//array_shift();
//array_unshift();

//or array_merge();


?>