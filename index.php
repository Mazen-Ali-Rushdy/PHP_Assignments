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