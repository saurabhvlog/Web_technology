<?php
$key="amazone";
$pwd="product";

setcookie($key,$pwd,time()+1);

if(isset($_COOKIE["amazone"]))
{
    echo "<h1>your cookie key= $key and password= $pwd</h1> <br>";

}
else{
    echo "<h2>Cookie not found</h2>";
}





?>