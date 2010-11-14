<?php

// isset requires (), echo does not
$test = true;
echo isset($test);

// in order to pass multiple arguments to echo, omit the ()
echo "My ", "Name ", "Is ", "Josh ", PHP_EOL;
