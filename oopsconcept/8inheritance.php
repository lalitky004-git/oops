<?php
    class firstabs {
      public function getdata() {
         echo "this is a function in parent class";
      }
   }
   class child extends firstabs{
      public function absfun(){
         echo "this is in child class";
      }
   }
   $obj = new child();
   $obj->absfun() ;
   echo '<br>';
   $obj->getdata();
?>