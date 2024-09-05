<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function isUrl($value)
{
    // echo $value . '   +  ' . $_SERVER['REQUEST_URI'];
    echo $_SERVER['REQUEST_URI'] === $value;
}
