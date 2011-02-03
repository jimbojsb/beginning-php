<?php
//$file = file('crimepun.txt');
//echo count($file) . '<br>';

//echo memory_get_peak_usage(true) / 1024;

//die;

echo memory_get_peak_usage(true) / 1024;

$fh = fopen('crimepun.txt', 'r');

while (!feof($fh)) {
    fgets($fh);
    $count++;
}
echo $count . '<br>';
echo memory_get_peak_usage(true) / 1024;
