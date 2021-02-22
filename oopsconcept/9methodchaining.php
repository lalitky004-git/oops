<?php
class empdetails
{
  private $id="0"; 
  public $name="";
  public $address="";
  public function setempid($id)
  {
    $this->id=$id;  
  }
  public function setempname($name)
  {
    $this->name=$name;  
  }
  public function setaddress($address="20")
  {
    $this->address=$address;
  }
 
  public function getempInfo()
  {
    return "Hello, My name is ".$this->name." and my id is ".$this->id. "and my address is".$this->address;
  }
}
 
$emp = new empdetails();
  $emp->setempid(10);
  $emp->setempname("lalit");
  $emp->setaddress("30");
  print_r($emp->getempInfo());
 ?>
