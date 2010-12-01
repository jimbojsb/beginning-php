<?php
$strings = array("Austin is the capital of Texas.",
                 "There are 50 states in the United States of America",
                 "There is no better joke about muffins and an oven than this one:",
                 "There are two muffins are in an oven...",
                 "One says to the other: God it is hot in here",
                 "The other one replies: Oh no... It's a talking muffin");


// #1
// write a function that calculates and returns the number of alphanumeric
// characters in a string. 

function numAlphaNumeric($str)
{
    for ($c = 0; $c < strlen($str); $c++) {
        if (ctype_alnum($str{$c})) {
            $numAlpha++;
        }
    }
    return $numAlpha;
}


// #2
// write a function that calculates and returns how many words are in a string
//str_word_count();


// #3
// calculate how many spaces are contained in the array of sample strings
function numSpaces($strArray)
{
    foreach ($strArray as $string) {
        for ($c = 0; $c < strlen($string); $c++) {
            $numSpaces += $string{$c} === ' ' ? 1 : 0;
        }
    }
    return $numSpaces;
}
echo numSpaces($strings) . PHP_EOL;


// #4
// calculate how many capital letters are contained in the array of sample strings
function numCaps($strArray) {
    foreach ($strArray as $string) {
        for ($c = 0; $c < strlen($string); $c++) {
            $numCaps += ctype_upper($string{$c}) ? 1 : 0;
        }
    }
    return $numCaps;
}
echo numCaps($strings) . PHP_EOL;

// #5
// write a function that takes 2 arguments: the first is an array of strings and
// the second is a single string. The function should return the number of times the 
// single string appears within the array of strings
function numOccurences($strings, $search)
{
    $count = 0;
    foreach ($strings as $string) {
        $count += substr_count(strtolower($string), $search);
    }
    return $count;
}


// #6 -- Super Bonus
// Using the function from #5, write a function that outputs some statistics about
// our array of sample strings.  For each word that appears in the array, print out
// how many times it appears in the whole array. Format your output as follows:
// Austin: 1
// talking: 1
// muffins: 2
function wordStats($strings)
{
    $masterWordList = array();
    foreach ($strings as $string) {
        $words = explode(' ', $string);
        foreach ($words as $word) {
            $word = strtolower(trim($word, '.:,!?'));
            $masterWordList[] = $word;
        }
    }
    $masterWordList = array_unique($masterWordList);
    foreach ($masterWordList as $word) {
        echo $word . ": " . numOccurences($strings, $word) . '<br/>';
    }
}


wordStats($strings);

