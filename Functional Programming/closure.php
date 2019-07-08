<?php
/**
 *  Closure: Anonymous function co the truy cap bien global
 */

$user = "LangTuDaTinh";

// create closure
$kick = function () use (&$user){
    echo $user . " da bi kick ra khoi phong choi";
};

$kick();

$user = "Dat09";

$kick();
