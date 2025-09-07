<?php

// Loop Assignments

// Assignment 1
$index = 10;

for ($i = 10; $i >= 1; $i--) {
  echo "$i<br>";
}
echo "@@@@@@@@@@@<br>";

// Needed Output
// 10
// 9
// 8
// 7
// 6
// 5
// 4
// 3
// 2
// 1

// Assignment 2
$start = 10;
$end = 0;
$stop = 3;

for ($i = $start; $i >= $stop; $i--) {
  if ($i < 10) {
    echo "0";
  }
  echo $i . "<br>";
}

// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03