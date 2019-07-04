<?php
class Car
{
    private $gas=0;
    protected $price;

    private function addGas($amount){
        $this->gas += $amount;
    }

    public function buyGas($amount){
        $this->addGas($amount);
    }

    public function showPrice(){
        echo "$this->price";
    }
}

class Lamborghini extends Car
{
    public function __construct()
    {
        $this->price = 500000;
    }

    function discountPrice($percent){
        $this->price = $this->price * (1-$percent);
    }


}

$car1 = new Car();

$car2 = new Lamborghini();
$car2->discountPrice(0.2); // 500000 * (1-0.2) = 400000

$car2->showPrice(); //400000