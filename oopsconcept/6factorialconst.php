<?php

Class factorialcl
{
    public $integer;
    function __construct($integer) {
        $this->integer = $integer;
    }
  public function factorial1()
  {
    $factorial = 1;
    for($i = 1; $i<=$this->integer; $i++) 
     {
       $factorial = $factorial *$i;
     }
   return $factorial;
  }
}

//Instantiating the above class,

$fact = New factorialcl(8);

echo $fact->factorial1();

?>