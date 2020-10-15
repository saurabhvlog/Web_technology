<html>
<head>
<title>Date Time</title></head>
<body>

<?php
echo "Today is " . date("d") ,"-",date("m"),"-",date("y"). "<br>";
echo "The time is " . date("h:i:sa");
?>
<h1>Reverse a String</h1>

<?php
if(!empty($_POST['input1'])){
$inputstr=$_POST['input1'];
$length=strlen($inputstr);
for($i=($length-1);$i>=0;$i--){
	echo $inputstr[$i];
}
}
?>

<form  method="POST">
Enter a string to reverse! <input type="text" name="input1" />
<input type="submit" value="Reverse" />
</form>


</body>
</html>