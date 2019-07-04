<?php

// Abstract Class
abstract class Shape
{
    // Correct
    var $color;

    // Incorrect
    abstract function getArea();

    // use normal function in abstract class
    function setColor($color){
        $this->color = $color;
    }
}

class Square extends Shape
{
    var $edge;

    function getArea()
    {
        return $this->edge * $this->edge;
    }
}

class Circle extends Shape
{
    var $radius;

    function getArea()
    {
        return M_PI * $this->radius;
    }
}

// Incorrect
// $shape = new Shape();


abstract class Phone
{
    abstract function nghe();
    abstract function goi();
}

class CucGach extends Phone
{
    function nghe(){
        // code
    }

    function goi(){
        // code
    }
    
}

abstract class SmartPhone extends Phone
{
    abstract function nhantin();
    abstract function nghenhac();
    abstract function luotweb();
}

class Iphone extends SmartPhone
{
    function nghe(){
        // code
    }

    function goi(){
        // code
    }

    function nhantin(){
        // code
    }

    function nghenhac(){
        // code
    }

    function luotweb(){
        // code
    }
    function dangnhapIcloud(){

    }
}


