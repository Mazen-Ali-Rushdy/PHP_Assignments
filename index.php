<?php

// ======== String Built-In Functions ========

// **** Assignment 1 ****
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str = str_replace([$str[(int)$num_two], $str[$num_one]], [$let_two, $let_one], $str);

echo $str . "<br>"; // Elzero

// **** Assignment 2 ****
$str = "Orezle";

echo ucfirst(strrev(strtolower($str))) . "<br>";

// Elzero

// **** Assignment 3 ****
$str = 'aAa';
$num = 3;
$char = "_";

echo str_repeat(strtolower($str) . $char, $num) . '<br>';

// aaa_aaa_aaa_

// **** Assignment 3 ****
$str = "<div><b>Elzero</b></div>";

echo strip_tags($str, "<b>") . "<br>";

// <b>Elzero</b>

// **** Assignment 3 ****
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $e, $four) . "<br>";
echo substr_count($str, $e) . "<br>";

// 1
// 2

// **** Assignment 3 ****
$chars = ["E", "l", "z", "e", "r", "o"];

echo implode($chars) . "<br>";

// Output
// "Elzero"

