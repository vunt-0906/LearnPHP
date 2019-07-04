<?php
//php do not automatically call parent class constructor at all if child class has constructor so you have to call parent class constructor explicitly, however parent class constructor is called automatically if child class has no constructor
class MyClass
{
    function construct1($value1)
    {
        echo "<br/> dummy constructor is called with 1 arguments and it is $value1";
    }
    function construct2($value1,$value2)
    {
        echo "<br/> dummy constructor is called with 2 arguments and it is $value1, $value2";
    }
    function construct3($value1,$value2,$value3)
    {
        echo "<br/> dummy constructor is called with 3 arguments and it is $value1, $value2 , $value3";
    }
    public function __construct()
    {
        $NoOfArguments = func_num_args(); //return no of arguments passed in function
        $arguments = func_get_args();
        echo "<br/> child constructor is called $NoOfArguments";
        switch ($NoOfArguments) {
            case 1:
                self::construct1($arguments[0]);
                break;
            case 2:
                self::construct2($arguments[0],$arguments[1]);
                break;

            case 3:
                self::construct3($arguments[0],$arguments[1],$arguments[2]);
                break;

            default:
                echo "Invalid No of arguments passed";
                break;
        }
    }


}
$c = new MyClass();
$c2 = new MyClass("ankit");
$c2 = new MyClass("ankit","Jiya");
$c2 = new MyClass("ankit","Jiya","Kasish");