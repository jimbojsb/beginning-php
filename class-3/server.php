<?php
// the address of this page
$thisUri = $_SERVER['REQUEST_URI'];

// the browser being used
$browser = $_SERVER['HTTP_USER_AGENT'];

// user's IP address
$ip = $_SERVER['REMOTE_ADDR'];

// what page did this visit refer from?
$referer = $_SERVER['HTTP_REFERER'];