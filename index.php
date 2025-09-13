<?php

// ======== File System ========

// Assignment 1
echo round(disk_total_space("E:") / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte<br>";
echo round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte<br>";

// Output Examples
// "1.37 Terabyte"
// "0.46 Terabyte"