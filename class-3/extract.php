<?php
// http://localhost/beginning-php/class-3/extract.php?name=josh

extract($_GET);

if ($name == 'josh') {
    $showName = true;
}

if ($showName) {
    echo $name;
}

