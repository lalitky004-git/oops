<?php
class cars {
  public $name;
  public $torque;

  function __construct($name, $torque) {
    $this->name = $name;
    $this->torque = $torque;

}
}
$car1 = new cars('Venue','150nm');
$car2 = new cars('XUV 300','130nm');
echo $car1->name . '<br>' ;
echo $car2->torque;
?>