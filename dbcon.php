<?php 
$sname = "localhost";
$uname = "root";
$password = "";
$dbname = "appdb";

$conn = mysqli_connect($sname, $uname, $password, $dbname);

if(!$conn) {
    echo "Connection Failed";
}

?>