<?php
function redirect($url)
{
    if ($url) {
        header("Location: " . $url);
        exit();
    }
}