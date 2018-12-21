<?php

//try changing this to get request
$input = $_POST["pastedMessage"];

function redactor($input){
    $nowArray = explode(' ', $input);
    
    foreach($nowArray as $word){
        echo '<span class = "text-element" >' . $word . ' ' . '</span>';
    }
}

redactor($input);

?>