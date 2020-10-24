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

if(isset($_REQUEST["submit"]))
{
$name=$_REQUEST["name"];
$pwd=$_REQUEST["pwd"];
if( $pwd=="kiet")
{
   $_SESSION["cheaked"]=true;
   $_SESSION["name"]=$name;

  header("Location:add.php");
}
else
{
  echo "<h1>Please enter correct username and password</h1>";
}


}



?>






<h2>LOG in YourSelf:</h2>
<form action="login.php" method="GET">

    <input type="text" name="name" placeholder="Enter your name"><br><br>
    <input type="password" name="pwd" placeholder="Enter your password"><br><br>
    <input type="submit" name="submit">

</form>
    
</body>
</html>