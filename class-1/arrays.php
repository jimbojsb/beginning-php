<?php
// define an array with 3 items
$myArray = array(1, 2, 3);

// use count() to find out how big an array is
$numItems = count($myArray); 

// access items with [#], 0 is the first element
$myFavoriteNumber = $myArray[2]; //$myFavoriteNumber == 3;

// several ways to add items to an array
$newArray = array(); //has no items
$newArray[] = 1; // now [1];
$newArray[] = 2; // now [1,2];
array_unshift($newArray, 3); // now [3,1,2];
array_push($newArray, 4); //now [3,1,2,4];

// remove items from an array
$item = array_pop($newArray); // now [3,1,2];, $item == 4;
$item = array_shift($newArray); // now [1,2];, $item == 3;
unset($newArray[1]); //now [1]


// similar examples to above for associative


// define an array
$myArray = array("myKey" => "myValue", "foo" => "bar");

$numItems = count($myArray); // 2

//access items by key
$myValue = $myArray["myKey"]; // $myValue == "myValue"];

// add items
$myArray["favorite_color"] = "red";

//remove items
unset($myArray["favorite_color"]); 

// printing out arrays to the screen
// don't use echo
echo $myArray; // prints out "Array"

print_r($myArray); //do this instead

echo($myArray['myKey']); //with print out "myValue"