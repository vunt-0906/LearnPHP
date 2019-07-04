<?php

class Laptop
{
    public static $soluong = 0;
    public $name;
    /**
     * Laptop constructor.
     */
    public function __construct()
    {
        self::$soluong ++;
    }

    public static function inSoLuong(){
        echo Laptop::$soluong;
    }

}

$pc1 = new Laptop();
$pc2 = new Laptop();

echo Laptop::inSoLuong();
