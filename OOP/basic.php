<?php

// Class Example
class Person
{
    const MAX_AGE = 60;
    const MIN_AGE = 18;
    var $name;
    var $age;


    public function __construct(){
        $this->age = 20;
        $this->name = "Vu";
    }
    function showInfo(){
        //code here
        echo "$this->name : $this->age";
    }

    function getAge(){
        //code here
    }

    function setAge(){
        //code here
    }

    function isValidAge(){
        return $this->age > self::MIN_AGE and $this->age < self::MAX_AGE;
    }
}

$ps = new Person();
$ps->showInfo();
echo $ps->isValidAge();

class ConNguoi
{
    public function __deconstruct()
    {
        echo "class da duoc huy";
    }
}

function getSoChan(){
    return self::sochan;
}

$p = new ConNguoi();
$p->name;
ConNguoi::soChan;