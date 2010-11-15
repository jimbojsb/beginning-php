<?php

function myHandler()
{
    echo "caught an error. now what?";
}

set_error_handler("myHandler");

//we can manually trigger an error in our code
trigger_error("A test Error", E_USER_ERROR);