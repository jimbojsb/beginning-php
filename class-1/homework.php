<?php

$colors = array('red', 'green', 'blue', 'yellow', 'purple');

$numbers = array("lessthan10" => array(1,2,3,4,5,6,7,8,9),
                 "lessthan20" => array(10,11,12,13,14,15,16,17,18,19));

// #1
// update your list of colors to be sorted in alphabetical order
sort($colors);

// #2
// print out your list of colors, each one on a new line
foreach ($colors as $color) {
    echo $color . '<br>';
}

// #3
// create another array of colors that are available as M&M
// create a new array that contains only the items from $colors that 
// are available as M&M's
$mms = array("red", "green", "blue", "yellow", "brown", "orange");
$overlap = array_intersect($mms, $colors);

// many of you probably did some variation ofthis
foreach ($colors as $color) {
    if (in_array($color, $mms)) {
        $overlapColors[] = $color;
    }
}

// #4
// calculate the sum of all the numbers contained in $numbers
$sum = 0;
foreach ($numbers as $numberArray) {
    $sum += array_sum($numberArray);
}

// #5
// Write a program that prints the numbers from 1 to 100. 
// But for multiples of three print “Fizz” instead of the number and for 
// the multiples of five print “Buzz”. For numbers which are multiples 
// of both three and five print “FizzBuzz”.
echo '<pre>';
for ($c = 1; $c <= 100; $c++) {
    $output = $c;
    if (!($c % 15)) {
        $output = 'FIZZBUZZ';
    } else if (!($c % 5)) {
        $output = 'BUZZ';
    } else if (!($c % 3)) {
        $output = 'FIZZ';
    }
    echo $output . PHP_EOL;
}
echo '</pre>';