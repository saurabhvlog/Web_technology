<?php
class AC{
	public $model;
	public $name;
	public $date;
	function __construct($name ,$model,$date)
	{
	  $this->name=$name;
	$this->model=$model;
	$this->date=$date;	
        }
         function display()
          {
      echo "<br>Name=$this->name";
 	echo "<br>Model=$this->model";
        echo "<br>Date of Purchase=$this->date";           
            }
           }
   $ac1=new AC("LG" , "V03" , "10/10/2020");
   $ac1->display();

 
class smartAC extends AC
{          
         function __construct($name,$model,$date)
         {
            parent::__construct($name,$model,$date);
	}

         public $wifi="YES";
         public $cloud_storage="YES";
         public $music="NO";
	function smartACinfo()
        {
         $this->display();
         echo "<br>WIFI=$this->wifi";
         echo "<br>storage=$this->cloud_storage";
	 echo "<br>music=$this->music"; 
          }
}
   $sac1=new smartAC("Voltas" , "v01113" , "20/20/2020");
  // $sac1->display();
   $sac1->smartACinfo();
                         
?>