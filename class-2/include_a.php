<?php
echo "<pre>";
include "include_b.php";

echo __FILE__ . " sees the value of myVar as: " . $myVar . PHP_EOL;

 include "include_a.php";

echo "</pre>";