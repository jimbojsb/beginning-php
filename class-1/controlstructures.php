<?php

$myVariable = true;
if ($myVariable) {
    // do something if $myVariable is true
    // pretty much anything can go here
}

if (!$myVariable) {
    // do something if $myVariable is false
}

$anotherTest = false;
if ($myVariable) {
    // do something if $myVariable is true
} else if ($anotherTest) {
    // do something different if $anotherTest is true
} else {
    // finally, if neither of those worked, do this default thing
}


$favoriteColor = 'red';
switch ($favoriteColor) {
    case 'red':
        echo('Red is an awesome color'); // this happens if $favoriteColor is set to red
        break;
    case 'blue':
        echo('Blue makes me sad'); // this happens if $favoriteColor is set to blue
        break;
    case 'green':
        echo('Green is the color of envy'); //this happens if $favoriteColor is green
    case 'yellow':
        echo('Yellow is a good color as well'); //this happens if $favoriteColor is green OR yellow,
        break;                                  //because there is no break after greeen
    default:
        echo('All other colors are lame'); //if nothing above matched, this happens instead    
}

$doIKnowAnyJokes = true;
$whatPeopleThinkOfMe = $doIKnowAnyJokes ? "Pretty Funny" : "Pretty Boring";
// format is (boolean expression) ? (value to return if 
// the expression is true) : (value to return if it's false)
// in this case, $whatPeopleThinkOfMe will be set to "Pretty Funny"