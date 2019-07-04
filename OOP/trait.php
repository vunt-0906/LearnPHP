<?php

trait SetGetName
{
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
}

trait SetGetAge
{
    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }
}

trait SetInfo
{
    public function setName($name){
        $this->name = $name;
        echo "Info has been updated\n";
    }

    public function setAge($name){
        $this->name = $name;
    }
}

trait SetGetInfo
{
    use SetGetName;
    use SetGetAge;
}

class People
{
    private $name = 'A';
    private $age = 20;
//    use SetGetName, SetInfo {
//        SetInfo::setName insteadof SetGetName;
//    }
    use SetGetInfo;
    function showInfo(){
        echo $this->name . " " . $this->age . "\n" ;
    }
}

class Animal
{
    use SetInfo{
        setName as private;
    }
}

$p = new People();
$p->setName("VU");
$p->setAge(20);
$p->showInfo();

// Output:
// Info has been updated
// Vu 20
