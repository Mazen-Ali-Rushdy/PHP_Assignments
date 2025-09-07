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
echo "@@@@@@@@@@@<br>";

// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03

// Assignment 3
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($i = $start; $i < count($mix); $i++) {
  if ($mix[$i] == $mix[$start] || is_string($mix[$i])) continue;
  echo $mix[$i] . "<br>";
}
echo "@@@@@@@@@@@<br>";

// Output
// 2
// 3
// 4

// Assignment 4
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach($money as $name => $cost) {
  echo "The Name Is $name And I Need $cost Pound From Him<br>";
}
echo "@@@@@@@@@@@<br>";

// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"