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