<?php

phpinfo();

function countDown()
{
    $x = rand(1, 20);

    if ($x <= 0 && $x >= 10) {

        error_log("Error: Er is iets fouts gegaan!", 0);
    } else {
        echo $x;
    }
}


countDown();
