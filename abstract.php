<?php
 abstract class Father{
      function disp(){
          echo "Normal method";
        }
        abstract function absmethod();
        }
  

  class Son extends Father{
      public function absmethod(){
           echo "Abstract Method <br>";
      }
  }
  $obj=new Son;
  $obj->absmethod();
  ?>