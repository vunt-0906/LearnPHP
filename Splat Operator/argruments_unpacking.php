<?php

function getThreeUser($user1, $user2, $user3)
{
    echo $user1. " " . $user2 . " " . $user3;
}

$user = array("Dat09", "DatGreen", "MyCrush");

getThreeUser(...$user);