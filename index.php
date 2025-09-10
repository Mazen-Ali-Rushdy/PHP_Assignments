<?php

// ======== Array Built-In Functions ========

// **** Assignment 1 ****
$friends = [
  "AG" => "Ahmed Gamal",
  "OM" => "Osama Mohamed",
  "MG" => "Mahmoud Gamal",
  "AS" => "Ahmed Samy",
  "FA" => "Farid Ahmed",
  "SM" => "Sayed Mohamed"
];

$friends = array_chunk(array_change_key_case($friends), 2);

echo "<pre>";
print_r($friends);
echo "</pre>";

// Output
// Array
// (
//   [0] => Array
//     (
//       [ag] => Ahmed Gamal
//       [om] => Osama Mohamed
//     )
//   [1] => Array
//     (
//       [mg] => Mahmoud Gamal
//       [as] => Ahmed Samy
//     )
//   [2] => Array
//     (
//       [fa] => Farid Ahmed
//       [sm] => Sayed Mohamed
//     )
// )

// **** Assignment 2 ****
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

$new_arr = array_change_key_case(array_combine($codes, $means));

echo "<pre>";
print_r($new_arr);
echo "</pre>";


// Output
// Array
// (
//   [h] => HTML
//   [c] => CSS
//   [j] => JavaScript
// )

// **** Assignment 3 ****
$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

$new_arr = array_change_key_case(array_flip(array_reverse($friends, true)));

echo "<pre>";
print_r($new_arr);
echo "</pre>";

// Output
// Array
// (
//   [as] => Ahmed Samy
//   [mg] => Mahmoud Gamal
//   [om] => Osama Mohamed
//   [ag] => Ahmed Gamal
// )

// **** Assignment 3 ****
$nums = [10, 20, 30];

echo array_sum($nums) . "<br>";

$product = array_reduce($nums, fn ($acc, $curr) => $acc + $curr);
echo $product . "<br>";

// Output
// 60
// 60

// **** Assignment 3 ****
$nums = [5, 10, 20, 5, 30, 40];

$nums_without_5 = array_filter($nums, fn ($num) => $num != 5);

echo array_reduce($nums_without_5, fn ($acc, $curr) => $acc + $curr) . "<br>";

// Output
// 100