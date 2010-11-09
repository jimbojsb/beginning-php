<?php

$numbers = array(1,2,3,4,5);
for ($c = 0; $c < count($numbers); $c++) {
    //^^^^^^
    // initialize a counter variable, $c and 
    // set it to 0, which is the beginning of our
    // array
    
    //      ^^^^^^^^^^^^^^^^^^^^^^
    // run this loop for as many items as there are
    // in the $numbers array
    
    //                            ^^^^^^
    // every time we run the loop add 1 to the
    // value of $c
    
    // now do something each time the loop runs
    // print out the value of numbers at index $c
    echo $numbers[$c];
}

$numbers = array(1,2,3,4,5);
$colors = array("red" => "apple", "yellow" => "banana", "purple" => "grape");
foreach ($number as $number) {
    // walk accross $numbers and for every
    // item you find, assign it's value to 
    // $number, and make $number accessible
    // inside the loop
    echo $number; // prints 1, then 2, then 3, and so on
}

foreach ($colors as $color => $fruit) {
    // walk across the associative array $colors
    // and for each key-value pair you find, assign
    // the key to $color and the value to $fruit
    // and make that available inside the loop
    echo("A " . $fruit . " is " . $color); //prints "A apple is red" and so on
    // yes, I realize the grammar doesn't quite work
}

$sum = 0;
while ($sum < 6) {
    // continue to run this loop until the value
    // of sum exceeds 5
    $sum += 2;
    echo $sum; //prints 2, then 4, then 6 
}