<?php

function Show($urlValue)
{
    echo "<pre>";
    print_r($urlValue);
    echo "</pre>";
}

function esc($str){

    return htmlspecialchars($str);
}

function redirect($path){

    header("Location:".ROOT."/".$path);
    die;
    
}