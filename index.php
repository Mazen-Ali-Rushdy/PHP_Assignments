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