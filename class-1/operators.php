<?php

//asignment (and implicit declaration)
$myVariable1 = "Test Value";
$anotherString = "Test Value 2";
$myNumber = 1;
$myOtherNumber = 2;

//short hand
$myTotal -= $myNumber;
//echo($myTotal);

//concatenation, put any number of things together as a string
//shorthand works for this too, .=
$myFullText = $myVariable1 . $anotherString;


//is this variable defined at all?
$exists = isset($myNumber);
?>