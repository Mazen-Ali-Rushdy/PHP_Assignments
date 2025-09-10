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

// **** Assignment 4 ****
$nums = [10, 20, 30];

echo array_sum($nums) . "<br>";

$product = array_reduce($nums, fn ($acc, $curr) => $acc + $curr);
echo $product . "<br>";

// Output
// 60
// 60

// **** Assignment 5 ****
$nums = [5, 10, 20, 5, 30, 40];

$nums_without_5 = array_filter($nums, fn ($num) => $num != 5);

echo array_reduce($nums_without_5, fn ($acc, $curr) => $acc + $curr) . "<br>";

// Output
// 100

// **** Assignment 6 ****
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

$new_arr = array_pad($chars, (count($chars) * strlen($char)), $char[$zero]);

echo "<pre>";
print_r($new_arr);
echo "</pre>";

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
//   [4] => E
//   [5] => @
//   [6] => @
//   [7] => @
//   [8] => @
//   [9] => @
// )

// **** Assignment 7 ****
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// Write Line Here
next($names);
// Write Line Here
next($names);

echo current($names) . "<br>"; // "Sayed"

// Write Line Here
end($names);

echo current($names) . "<br>"; // "Ali"

// Write Line Here
reset($names);

echo current($names) . "<br>"; // "Osama"

end($names);
// Write Line Here
prev($names);
// Write Line Here

echo current($names) . "<br>"; // "Mahmoud"

// **** Assignment 7 ****
$nums = [10, 100, -20, 50, 30];

echo array_reduce($nums, fn ($acc, $curr) => $acc > $curr ? $acc : $curr);

// Output
// 100