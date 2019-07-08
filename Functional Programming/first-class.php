<?php
/**
 * First class: Function duoc su dung nhu object
 */
$input = array(1, 2, 3, 4, 5, 6);

// Creates a new anonymous
$filter_even = function ($item) {
    return ($item % 2)==0;
};

// Built-in function
$output = array_filter($input, $filter_even);

print_r($output);