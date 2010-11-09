<?php

//asignment (and implicit declaration)
$myVariable1 = "Test Value";
$anotherString = "Test Value 2";
$myNumber = 1;
$myOtherNumber = 2;

// math operators work as you'd expect
$myTotal = $myNumber + $myOtherNumber;

//short hand
$myTotal += $myNumber;

//concatenation, put any number of things together as a string
//shorthand works for this too, .=
$myFulText = $myVariable1 . $anotherString;

//is this variable defined at all?
$exists = isset($myNumber);