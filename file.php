<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
if(isset($_REQUEST["submit"]))
{

$path="file/";

 
$filename=$path.$_FILES["file"]["name"];
$tempfile=$_FILES["file"]["tmp_name"];
  
if(move_uploaded_file($tempfile,$filename))
{
  echo "File uploaded successfully";
}
else
{

  echo "File not uploaded";
}
}






?>
<h1>Upload Your File</h1>
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
<input type="file" name="file"><br><br>
<input type="submit" name="submit" value="Upload File"><br>
</form>
    
</body>
</html>