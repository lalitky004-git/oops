<?php
trait trait1 {
public function msg1() {
    echo "this is trait 1 message which can be used by use method in another class  ";
  }
}
trait trait2 {
    public function msg2() {
        echo "this is message 2";
      }
    }

class use1 {
  use trait1;
}
class use2 {
    use trait1,trait2;
  }

$obj = new use1();
$obj->msg1();
echo '<br>';
$obj = new use2();
$obj->msg1();
echo '<br>';
$obj->msg2();
?>