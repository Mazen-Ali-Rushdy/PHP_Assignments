<?php

// ======== Math Functions And Filters ========

// Assignment 1
echo rand(11, 19);

// Example
// 13
// 14
// 19
// 12

// Assignment 2
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

echo "<Br>" . $friends[array_rand($friends)] . "<br>";

// Example
// Ibrahim
// Ahmed

// Assignment 3
$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1, 0, PHP_ROUND_HALF_DOWN) . "<br>";
echo round($num2, 1) . "<br>";
echo round($num3, 0, PHP_ROUND_HALF_ODD) . "<br>";

// Assignment 3

$values = filter_list();
$kes = [];

foreach ($values as $value) {
    array_push($kes, filter_id($value));
}

$filters = array_combine($kes, $values);

echo "<pre>";
print_r($filters);
echo "</pre>";
// Array
// (
//   [257] => int
//   [258] => boolean
//   [259] => float
//   [272] => validate_regexp
//   [277] => validate_domain
//   [273] => validate_url
//   [274] => validate_email
//   [275] => validate_ip
//   [276] => validate_mac
//   [513] => stripped
//   [514] => encoded
//   [515] => special_chars
//   [522] => full_special_chars
//   [516] => unsafe_raw
//   [517] => email
//   [518] => url
//   [519] => number_int
//   [520] => number_float
//   [523] => add_slashes
//   [1024] => callback
// )