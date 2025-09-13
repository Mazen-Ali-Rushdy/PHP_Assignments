<?php

// ======== Sessions & Cookies ========

// Assignment 1
setcookie("site[layout]", "Boxed", strtotime("+2 months 5 days"), "/");
setcookie("site[font]", "Swat", strtotime("+2 months 5 days"), "/");
setcookie("site[color]", "Blue", strtotime("+2 months 5 days"), "/");

// Assignment 2
$cookie_cont = $_COOKIE;

echo "<pre>";
print_r($cookie_cont);
echo "</pre>";

echo "Your Color Is " . $cookie_cont["site"]["color"] . " And Your Font Is " . $cookie_cont["site"]["font"] . "<br>";

// Array
// (
//   [site] => Array
//     (
//       [color] => blue
//       [font] => Swat
//       [layout] => boxed
//     )
// )
// "Your Color Is blue And Your Font Is Swat"