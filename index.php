<?php

// ======== File System ========

// Assignment 1
echo round(disk_total_space("E:") / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte<br>";
echo round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte<br>";

// Output Examples
// "1.37 Terabyte"
// "0.46 Terabyte"

// Assignment 2
if (!file_exists("Programming/PHP")) {
    mkdir("Programming/PHP", 0700, true);
}
else {
    rmdir("Programming/PHP");
    echo "Directory Programming/PHP Removed<br>";
    rmdir("Programming");
    echo "Directory Programming Removed<br>";
}

// Output
// "Directory Programming/PHP Removed"
// "Directory Programming Removed"

// Assignment 3

// elzero.txt Content
// Hello Elzero Web
// School
// No Need To Read

// first Way
$handel = fopen("elzero.txt","r");
echo fgets($handel) . fgets($handel) . "<br>";

// Second Way
echo file_get_contents("elzero.txt", false, null, 0, 23) . "<br>";

// Third Way
echo file("elzero.txt")[0] . file("elzero.txt")[1] . "<br>";

// Needed Output
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"