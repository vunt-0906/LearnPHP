<?php

function concat(...$args){
    $string = '';
    foreach($args as $arg){
        $string .= $arg;
    }
    return $string;
}

echo concat("dat", "09");