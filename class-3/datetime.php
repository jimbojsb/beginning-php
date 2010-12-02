<?php
// what time is it?
$time = time();  //integer

// what's the full date?
$formatted = date("Y-m-d H:i:s"); //implict time() as second param

// what's the timestamp for 1/1/2011 12:01 AM?
$newyears = mktime(0, 1, 1, 1, 1, 2011);

// for some reason, convert our formatted date from above
// back into a timestamp
$backToTimestamp = strtotime($formatted);
echo $backToTimestamp;