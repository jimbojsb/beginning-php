<?php
$username = 'josh';
$password = 'password';
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Script"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
} else {
   $submittedUser = $_SERVER['PHP_AUTH_USER'];
   $submittedPassword = $_SERVER['PHP_AUTH_PW'];
   // this is probably some database lookups instead of hard coded

   if (($username == $submittedUser) && ($password == $submittedPassword)) {
       // your code goes here
       echo 'authenticated';
   } else {
       header('HTTP/1.0 401 Unauthorized');
       echo 'unauthorized';
   }
   
}