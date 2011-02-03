<pre><?php

$fh = fopen('crimepun.txt', 'r');

$crimeandpunishment = '';
while (!feof($fh)) {
    $crimeandpunishment .= fread($fh, 8192);
}
fclose($fh);



$fh = fopen('crimepun.txt', 'r');
$crimeandpunishment = '';
while (!feof($fh)) {
    $crimeandpunishment .= fgets($fh);
}
//echo strlen($crimeandpunishment);
fclose($fh);

$fh = fopen('crimepun.txt', 'r');
$crimeandpunishment = array();
while (!feof($fh)) {
    $crimeandpunishment[] = trim(fgets($fh));
}
//print_r(array_unique($crimeandpunishment));


fclose($fh);




$fh = fopen('crimepun.txt', 'r');
$crimeandpunishment = '';
while (!feof($fh)) {
    $crimeandpunishment .= fgets($fh);
}
$reversed = strrev($crimeandpunishment);

fclose($fh);
$fh = fopen('puncrime.txt', 'w');
fwrite($fh, $reversed);
fclose($fh);


$fh = fopen('test.csv', 'r');
while (!feof($fh)) {
    $lines[] = fgetcsv($fh, "\t");
}
$headers = array_shift($lines);
print_r($headers);
print_r($lines);

?></pre>

