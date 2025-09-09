<?php

// ======== String Built-In Functions ========

// **** Assignment 1 ****
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str = str_replace([$str[(int)$num_two], $str[$num_one]], [$let_two, $let_one], $str);

echo $str; // Elzero
