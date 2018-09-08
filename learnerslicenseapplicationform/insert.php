<?php
session_start();
$_SESSION["email"]=$_GET["email"];
$x=$_GET["name"];
$y=$_GET["file"];
$z=$_GET["email"];
$a=$_GET["gender"];
$b=$_GET["phno"];
$c=$_GET["aadhar"];
$d=$_GET["address"];
$e=$_GET["landmark"];
$f=$_GET["district"];
$g=$_GET["testcenter"];
$h=$_GET["gear"];
$r=$_GET["pss"];
$j=$_GET["cpss"];

$conn=new mysqli("localhost", "root", "dhannu123", "dhannu");
if($conn->connect_error)
{
    die("connect failed".$conn->connect_error);
}
foreach ($_GET["wheeler"]as $i)
{
    $sql="insert into form values('$x','$z','$a','$b','$c','$d','$e','$f','$g','$i','$h','$r','$j')";
    $conn->query($sql); 
}
include 'table.html';
$conn->close();


?>
