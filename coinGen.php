<?php
session_start();
$nameU = $_SESSION['user'];

require 'phpcall.php';

$sql = "UPDATE `ProjectNigerianPrince`.`userData` SET Dodge2 = Dodge2 + 10000 WHERE  userName = '$nameU' ";


if($mysqli->query($sql)=== TRUE)
{header("location: stats.php");}
else{
	header("location: home.php");}












?>