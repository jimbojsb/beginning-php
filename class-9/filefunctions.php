<pre>
<?php

$crimeandpunishment = file_get_contents('crimepun.txt');

$linesOfCp = file('crimepun.txt');
//echo count($linesOfCp);

$counts = array();
foreach ($linesOfCp as $line) {
    $counts[] = str_word_count($line);
}
$avg = array_sum($counts) / count($counts);
echo $avg;



$reversed = strrev($crimeandpunishment);
file_put_contents('puncrime.txt', $reversed);

if (file_exists('puncrime.txt')) {
    echo 'succesfully reversed the file';
}

?></pre>