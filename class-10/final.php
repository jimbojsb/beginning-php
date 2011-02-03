<?php
// write the output of the following code snippets
// assume each snippet is from a separate PHP file and
// is run independently of the others

//1
$a = array(1,2,3,4,5,5,4,4,7,4,1);
//echo count(array_unique($a));

//2
$a = array(1,2,3,4,5,5,4,4,7,4,1);
sort($a);
$string = implode(',', array_slice($a, 0, 4));
//echo $string;

//3
$string = "my test string";
$array = explode(' ', $string);
//echo $array;

//4
$string = "my test string";
$array = explode(' ', $string);
//echo count($string);

//5
$string = "my test string";
//echo strtoupper(ucwords(strtolower($string)));

//6
for ($c = 0; $c < 5; $c++) {
    $total += $c;
}
//echo $total;

//7
//echo date("Y-m-d H:i:s", mktime(1, 1, 1, 1, 1, 2010));

//8
$query = "name=josh&id=7";
parse_str($query, $vals);
//echo implode(',', $vals);

//9
$array1 = array('name' => 'josh', 'id' => 7);
$array2 = array('name' => 'joe', 'id' => 6);
$array3 = array($array1, $array2);
foreach ($array3 as $key => $val) {
//   echo count(array_keys($val)) . PHP_EOL; 
}

//10
$c = 5;
$count = 0;
while ($c < 50) {
    $c += ($c - $count);
    echo $c . PHP_EOL;
    $count++;
}
echo $count;       