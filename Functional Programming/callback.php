<?php

/**
 * callable; Goi ham trong ham
 */


function getUser(){
    return "Dat09";
}

function kickUser($function){
    echo $function()." da bi kick ra khoi phong choi";
}

// function getUser is callable
kickUser('getUser');


