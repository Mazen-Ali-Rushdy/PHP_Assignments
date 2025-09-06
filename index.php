<?php 

$a = "10";

echo (int) $a;
echo "<br>";
echo gettype((int) $a);
echo "<br>";

echo +$a;
echo "<br>";
echo gettype(+$a);
// Needed Ouput
// 10
// "integer"
// 10
// "integer"
// 10
// "integer"