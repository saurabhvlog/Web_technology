<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 class student
{
public $name="raj";
public $class="MCA";
function displayname()
{
echo "<br><h1>your name=$this->name and<br> class=$this->class</h1> ";

}

} 
$ob1=new student();
$ob1->displayname();
$ob2=new student(); 
$ob2->name="karan";
$ob2->displayname();

?> 
</body>
</html>