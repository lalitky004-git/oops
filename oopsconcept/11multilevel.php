<?php
class grandfather
{
public function function_gf(){
echo 'its the parent class';
}
}

class father extends grandfather
{
public function function_f(){
echo 'its the child class having parent function_gf';
}
}

class son extends father
{
public function function_s(){
echo 'its a child class which inherits properties of 2 classes';
}
}

echo son::function_s();
echo '<br>';
echo son::function_f();
echo '<br>';
echo son::function_gf();

?>