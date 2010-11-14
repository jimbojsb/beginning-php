<?php


error_reporting(E_ALL); //show me all errors, no matter how trivial
echo $foo; //E_NOTICE, because $foo is undefined. annoying.

error_reporting(E_ALL & ~E_NOTICE); // ok I don't care about notices
echo $foo;

$foo = "";
echo array_shift($foo); //generates a warning, but we can still proceed
$foo[] = "test string";

echo "<pre>";
print_r($foo);
echo "</pre>";


// lets pretend i want to ignore that array shift error:
$bar = "";
echo @array_shift($bar);
// because we silenced with @, no output is given, however, the 
// error still happened. If you silence a fatal error, how will you 
// know what the problem is?

require_once 'filethatdoesnotexist';  //because this is require it throws a fatal error

// this will never happen beacuse we encountered a fatal error above.
echo "here";