<?php
// write a function that fills creates an array with 10 
// random numbers as elements (http://php.net/rand)
function generateRandom()
{
    $rand = array();
    for ($c = 0; $c < 10; $c++) {
        $rand[] = rand(1,10);
    }
    return $rand;
}


// write your own function to calculate the average value
// for an array of numbers
function calcAvg($myValues)
{
    $total = array_sum($myValues);
    $avg = $total / count($myValues);
    return $avg;
}


// finally, write a function that generates 10 random arrays 
// using the first function. then calculate the average values
// of those arrays. Output the averages, each on it's own line



// Now that you have that last function written, call it.
function generateArraysAndPrintThem()
{
    for ($c = 0; $c < 10; $c++) {
        
        $randArray = generateRandom();
        $avg = calcAvg($randArray);
        echo $avg . '<br>';
        // or: echo calcAvg(generateRandom());
        
    }
}

generateArraysAndPrintThem();