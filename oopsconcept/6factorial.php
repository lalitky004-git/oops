<?php

Class factorialcl
{

  public function factorial1($n)
  {
    $factorial = 1;
    for($i = 1; $i<=$n; $i++) 
     {
       $factorial = $factorial *$i;
     }
   return $factorial;
  }
}

//Instantiating the above class,

$fact = New factorialcl();

echo $fact->factorial1(8);

?>