<?php

$servername="localhost";
$username= "root";
$password="root";
$db_name="sign";

$conn= new mysqli($servername,$username,$password,$db_name,3306);
if($conn->connect_error){
                              die("connection error".$conn->connect_error);
}

echo ""

?>

