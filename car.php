<?php
class CAR{
	public $model;
	public $name;
	public $avg;
	function __construct($name ,$model,$avg)
	{
	  $this->name=$name;
	$this->model=$model;
	$this->avg=$avg;	
        }
         function display()
          {
      echo "<br>Name=$this->name";
 	echo "<br>Model=$this->model";
        echo "<br>Average of Car=$this->avg";           
            }
           }
   $ob1=new CAR("MARUTI" , "2018" , "50");
   $ob1->display();

 
class Z_CAR extends CAR
{          
         function __construct($name,$model,$avg)
         {
            parent::__construct($name,$model,$avg);
	}

         public $Air_Bag="YES";
         public $DoG_Mode="YES";
         public $Power_Backup="YES";
	function newCARinfo()
        {
         $this->display();
         echo "<br><br>Air_Bag=$this->Air_Bag";
         echo "<br>DoG_Mode=$this->DoG_Mode";
	 echo "<br>Power_Backup=$this->Power_Backup"; 
          }
}
   $sob1=new Z_CAR ("SUZUKI" , "2020" , "60");
  // $sob1->display();
   $sob1->newCARinfo();
                         
?>
