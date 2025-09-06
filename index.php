<?php

$txt = <<< 'str'
Hello "'Elzero'"
We Love \$Programming$
Languages Specially "PHP"
str;

echo nl2br($txt);



// Needed Output
/*
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
*/