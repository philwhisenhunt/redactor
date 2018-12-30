<?php

$inputString = $_POST["theMessage"];
function reverseIt($inputString){
    return strrev($inputString);
}
echo reverseIt($inputString);

?>