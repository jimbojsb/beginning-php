<?php
session_start();
if ($_GET['name']) {
    $name = $_GET['name'];
    $_SESSION['name'] = $name;
} else if ($_SESSION['name']) {
    $name = $_SESSION['name'];   
}
if ($name) {
    
    echo "name: $name";
}