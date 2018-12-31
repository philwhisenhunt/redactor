<?php

$theVariable = $_POST['theMessage'];

function reverser($input){
    $output = strrev($input);
    return $output;
}

reverser($theVariable);