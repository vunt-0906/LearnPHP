<?php

//An example about inheritance in php

class People
{
    public $name = 'Noname';
    public $age = 18;

    function showInfo(){
        $this->name = "hj";
        echo "Name: $this->name \nAge: $this->age\n";
    }
}

class Student extends People
{
    var $student_code = "170211378";
    var $school = "UET";

    function an(){
        //code
    }

    function ngu(){
        //code
    }

    function showInfo()
    {
        parent::showInfo();
        $this->name = 'k';
        echo "Student_code: $this->student_code \nSchool: $this->school\n";
    }
}

$p1 = new People();
$p1->name = "Vu";
$p1->showInfo();
// Name: Vu
// Age: 18


$p2 = new Student();
$p2->name = "Vu";
$p2->showInfo();
//Name: Vu
//Age: 18
//Student_code: 170211378
//School: UET

