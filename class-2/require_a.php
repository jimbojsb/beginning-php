<?php
echo "<pre>";
require "include_b.php";

echo __FILE__ . " sees the value of myVar as: " . $myVar . PHP_EOL;

require_once "include_b.php";

// include "include_a.php";

echo "</pre>";