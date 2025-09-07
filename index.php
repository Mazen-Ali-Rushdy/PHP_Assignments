<?php

// Function Assignments

// Assignment 1
// Write Function Content Here
function greeting($name, $gender = null) {
  $title = "";
  if ($gender === "Male") {
    $title = "Mr ";
  } elseif ($gender === "Female") {
    $title = "Miss ";
  }
  return "Hello " . $title . $name . "<br>";
}

// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh

// Assignment 2
// Write Function Content Here

function get_arguments(...$args) {
  $result = "";
  foreach ($args as $arg) {
    $result .= $arg . " ";
  }
  return $result . "<br>";
} 

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP

// Assignment 2
function check_status($a, $b, $c) {
  $result = "";
  $str = "";
  $age;
  $bool;

  if (is_string($a)) $str = $a;
  elseif (is_string($b)) $str = $b;
  elseif (is_string($c)) $str = $c;

  if (is_int($a)) $age = $a;
  elseif (is_int($b)) $age = $b;
  elseif (is_int($c)) $age = $c;

  if (is_bool($a)) $bool = $a;
  elseif (is_bool($b)) $bool = $b;
  elseif (is_bool($c)) $bool = $c;

  if ($bool == true)
    $result .= "Hello $str, Your Age Is $age, You Are Available For Hire<br>";
  else if ($bool == false) 
    $result .= "Hello $str, Your Age Is $age, You Are Not Available For Hire<br>";
  return $result;
}

// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"