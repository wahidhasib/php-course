<?php

/* Variable is just a container where we store value
* It should able to change this value continueously 
* If they are not It will be constant
* variable name will be just only alpha numeric and can't start with number
*/

$age = 25;
$name = "Hasib";
$type = "age";
$question = "How are your?";

// echo $$type;

// Output $$type = 25

//? Php recomends always use a single variable declearation type

echo 'MY name is' . $name . ' ' . $question; //this is very bad practise
echo "MY name is $name, $question\n";
echo "MY name is {$name}, {$question}\n";

// todo those are perfectly fine but always recomend to the last way for better readablity

$name = "john";
echo $name;
echo "\n";

// ? php variable are also muteable means also change able
// that's why now output is john

// Decleare a constant
define('PI', 3.14159);

// echo "Value of PI = {$PI}"; //this is the wrong way and also they retun null value

echo "Value of PI = " . PI; //this is the right way to return constant value
echo "\n";
// ! can't be able to change constant value anytime


/*
============== 
*Data Types
==============

*string
*integer / int
*double / float
*Boolean
*Null
*Array
*Object
*Resource
*/

$varStr = "Hi";
$varInt = 52;
$varFloat = 25.22;
$varBool = true;
$varNull = null;
$varArray = [
    'Mango',
    25,
    true,
    null,
];

class Car
{
    public $brand;
    public $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }
}

$varObj = new Car("Toyota", 2025);

var_dump($varStr);
var_dump($varInt);
var_dump($varFloat);
var_dump($varBool);
var_dump($varNull);
var_dump($varArray);
var_dump($varObj);

// ! var_dump is use to show the datatype of variables;

/*
==============
*Printf()
==============

*/
printf("My %s name is %s %s", "full", 25, $varStr); //this is the simplest way to print multiple value with simplicity and more functional oparation
echo "\n";
print_r("My %s name is %s %s"); //But print _r returns only a single value and also skip %s as a dynamic value

// ? %s means they receive only string datatypes;
