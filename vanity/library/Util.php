<?php
class Util
{
    public static function redirect($url)
    {
        if ($url) {
            header("Location: " . $url);
            exit();
        }
    }
}