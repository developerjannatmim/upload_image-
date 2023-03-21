<?php

class person{
  public $name;
  public $age;

  function __construct($n = "No Name", $age  = 0)
  {
    $this->name = $n;
    $this->age = $age;

  }
  function show()
  {
    echo "Name: " . $this->name . " and Age: " . $this->age;
  }
}


$pr = new person("jannat",20);

echo $pr->show();




/*class MyClass{

public $a, $b, $c;

function sum(){
  $this->c = $this->a + $this->b;
  return $this->c;
}

function sub(){
  $this->c = $this->a - $this->b;
  return $this->c;
}

}

$c1 = new MyClass();

$c1->a = 10;
$c1->b = 40;

echo $c1->sum() . "<br>";

$c2 = new MyClass();

$c1->a = 30;
$c1->b = 40;
echo $c1->sub();*/

?>