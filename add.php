<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
session_start();
if($_SESSION["cheaked"]==true);
{
 $name=$_SESSION["name"];
 echo "WelCome $name";

if(isset($_GET["add"]))
{
    $value1=$_GET["value1"];
    $value1=$_GET["value2"];
    $sum=$value1+$value2;
    echo "the sum is $sum";
}
}


else
{
echo "you are not a valid user";
include("login.php");
}
?>


    <form method="get" action="first.php">
        <input type="text" name="value1" placeholder="enter the first number" ><br><br> 
        <input type="text" name="value2" placeholder="enter the second number" ><br><br> 
        <input type="submit" name="Add" value="addition"><br><br>
              



    </form>
    
</body>
</html>