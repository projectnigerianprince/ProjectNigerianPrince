<?php
session_start();
$nameU = $_SESSION['user'];

require 'phpcall.php';

$betAmnt = $_POST['betAmnt'];
$teamPick = $_POST['teamPick'];
$gameID = $_POST['gameID'];

$sql = "UPDATE `ProjectNigerianPrince`.`userData` SET Dodge2 = Dodge2 - $betAmnt WHERE  userName = '$nameU' ";


$sql2 = "INSERT INTO `ProjectNigerianPrince`.`GameBets` SET 
userName = '$nameU',
GameID=$gameID,
Team=$teamPick,
Amount=$betAmnt";
$mysqli->query($sql2);

if($mysqli->query($sql)=== TRUE)
{header("location: stats.php");}
else{
	header("location: stats.php");}



?>