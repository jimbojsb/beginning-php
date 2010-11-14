<?php
echo "<pre>";

for ($c = 0; $c < 5; $c++) {
    include "include_b.php";
}

for ($c = 0; $c < 5; $c++) {
    include_once "include_b.php";
}

echo "</pre>";