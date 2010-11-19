<?php

function myFunction($myArgument1, $myArgument2)
{
    echo "$myArgument1 $myArgument2";
}

function addNumbers($number1, $number2)
{
    return $number1 + $number2;
}

function testInputAndReturn($var) 
{
    // we want to require that $var is an array with at least 1 item.
    if (is_array($var) && count($var)) {
        return true; //if the if statement passes, immediately return true
    }    
    return false; // we could have written an else statement here but it would be superfluous
}