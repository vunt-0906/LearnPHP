<?php


class Shape
{
    function getArea(){

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
