<?php
// write a function that fills creates an array with 10 
// random numbers as elements (http://php.net/rand)
function generateRandom()
{
    // create an empty array. this line could be omitted.
    $rand = array(); 
    
    // loop 10 times and each time add a random number to the array
    for ($c = 0; $c < 10; $c++) {
        $rand[] = rand(1,10); //if you omitted line 7, this implicitly creates an array
    }
    return $rand; //return the array back to the caller of this function
}

// store the return value of generateRandom into $myRandomArray;
$myRandomArray = generateRandom();



// write your own function to calculate the average value
// for an array of numbers
function calcAvg($myValues)
{
    $total = array_sum($myValues);
    $avg = $total / count($myValues);
    return $avg;
}

// pass our variable which contains the random array 
// as an argument to our new function, calcAvg(). store the
// result of calcAvg() into $average.
$average = calcAvg($myRandomArray); 


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
        // or: echo calcAvg(generateRandom()); (we don't need to bother storing these as values intermittently
        
    }
}

// call your function here to execute the code inside of it.
generateArraysAndPrintThem();