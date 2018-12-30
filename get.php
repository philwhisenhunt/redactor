<?php

$receivedText = $_POST['theMessage'];

function reverseIt($input){
    $reversed = strrev($input);
    return $reversed;
}

reverseIt($receivedText); //is echo needed here?