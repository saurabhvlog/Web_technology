<html>
<head><title>Insert data</title>
</head>
<body>
<centre>
<h1>Student information !! </h1>
<form action="insert.php" method="post">
<input type="text" name="sid" placeholder="Enter the student id"><br><br>
<input type="text" name="sname" placeholder="Enter the student name"><br><br>
<input type="text" name="section" placeholder="Enter the student section"><br><br>
<input type="text" name="semester" placeholder="Enter the student semester"><br><br>
<input type="text" name="college" placeholder="Enter the student college"><br><br>
<input type="submit" name="insert">

</form>
</centre>
</body>
</html>
<?php
if(isset($_REQUEST["insert"]))
{
    $hostname="localhost";
    $username="root";
    $pwd="";
    $dbname="student";
    $sid=(int)$_REQUEST["sid"];
    $sname=$_REQUEST["sname"];
    $section=$_REQUEST["section"];
    $semester=$_REQUEST["semester"];
    $college=$_REQUEST["college"];
    $iquery="insert into student values($sid,'$sname','$section','$semester','$college')";
    $conn=new mysqli($hostname,$username,$pwd,$dbname);
    if($conn->connect_error)
    {
        die("error in connection".$conn->connect_error);
    }
    else{
        if($conn->query($iquery))
        {
            echo "Record inserted";
        }
        else
        {
            echo "Error".$conn->error;
        }
    }
}
include("display.php");

?>