<?php

// ======== Date & Time ========

// Assignment 1
date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get() . "<br>";
echo date_format(date_create("now"), "D, d M y - h:i:s A") . "<br>";
echo date_format(date_create("now"), "l, d F Y - h:i:s A") . "<br>";

// Output Needed
// "Asia/Riyadh"
// "Wed, 09 Nov 22 - 07:11:22 PM"
// "Wednesday, 09 November 2022 - 07:11:22 PM"

// Assignment 2
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get() . "<br>";

$date = "2005-10-02";

$date = date_create( "2005-10-02");
date_add($date, date_interval_create_from_date_string("15 hours 15 minutes 15 seconds"));
echo date_format($date, "Y, F, l H:i:s");

// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:15"