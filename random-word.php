<?php
$file = "alphabet.txt";
$file_arr = file($file);
$num_lines = count($file_arr);
$last_arr_index = $num_lines - 1;
$rand_index = rand(0, $last_arr_index);
$rand_text = $file_arr[$rand_index];
echo $rand_text;
?>