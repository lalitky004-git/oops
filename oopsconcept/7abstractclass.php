<?php
   abstract class firstabs {
      abstract function absfun();
      public function getdata() {
         echo "this is a non abstract method as it can have both abstract and non abstract";
      }
   }
   class child extends firstabs{
      public function absfun(){
         echo "always override abstract method";
      }
   }
   $obj = new child();
   $obj->absfun() ;
   $obj->getdata();
?>