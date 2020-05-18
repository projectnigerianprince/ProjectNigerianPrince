<!DOCTYPE html>
<html>
<head>
<?php


require 'phpcall.php';
session_start();
$name = $_SESSION['user'];

$G= $_GET["Game"];


$sql =  "SELECT  * FROM `ProjectNigerianPrince`.`gameBase`
WHERE GameId=$G";

$result = mysqli_query($mysqli,$sql);


$GameID = " ";
$GameType = " ";
$DateOfGame = " ";
$Team1 = " ";
$Team1Icon = " ";
$Team2 = " ";
$Team2Icon = " ";
$StatCalc = " ";

if (mysqli_num_rows($result) >0) {
while ($row = mysqli_fetch_assoc($result)) {
$GameID = $row["GameID"];
$GameType = $row["GameType"];
$DateOfGame = $row["DateOfGame"];
$Team1 = $row["Team1"];
$Team1Icon = $row["Team1Icon"];
$Team2 = $row["Team2"];
$Team2Icon = $row["Team2Icon"];
$StatCalc = $row["StatCalc"];
}
}
?>

<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta meta name="viewport" content=  
            "width=device-width, user-scalable=no" /> 
            <link href="Styles.css" rel="stylesheet" type="text/css">
<title>Bet Here</title>
<style type="text/css">


.auto-style2 {
	font-size: small;
}
.auto-style3 {
	color: #A48400;
}
.auto-style4 {
	text-align: right;
}
</style>

<link rel="shortcut icon" type="image/png" href="WebNav/favicon.png">

<div class="auto-style4">
	<br />
	<a href="\default-Landing.php"><img alt="" height="73" src="WebNav\Logo.png" style="float: left" width="913"><br /></a> <br> <br>
 
 <?php 
 if ($_SESSION['user']){
	echo "Welcome $name			";
	echo '<a href="stats.php">Stats </a>' ;}
else{
echo '<a href="login.php">Login/Sign Up</a>';}
?>


</br>
 
</head>

<body>

<div style="background-color:lightgrey;color:black;border-radius: 25px; float: left; width: 40%">

</div>

<div style="background-color:lightgrey;color:black;border-radius: 25px; float: left; padding: 10px">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">
		<center><p><b>ESL</b></p></center>
		<center>6:00 PM </center>	
		<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px"><p>
</br>

<?php
$Game=$_GET["Game"];
require 'GameCall.php';

?>
</br>
 
<div style="background-color: #FFFAA8; border-radius: 25px; float: center; width: 50%; border-style: solid; border-color: black; border-width: thin;">

<h3>Betting</h3>
<?php

//ADDed by Felix
 
$servername = "nigerianprince.ddns.net";
$username = "aj";
$password = "Raffik12";
$dbname = "ProjectNigerianPrince";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Dodge2 FROM userData WHERE userName='$name'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "BetID: " . $row["BetID"]. " - Name: " . $row["userName"]. " " . $row["GameID"]. "<br>";
		$coinNum = $row["Dodge2"];
		echo "<b>Your coins:</b> " . $row["Dodge2"]."<br>";
		echo "<script> var maxCoins = $coinNum </script>";
    }
} else {
    echo "0 results";
}

$conn->close();
 
//Added by Felix
?>


<form action="/coinBet.php" method="post">
  <input type="hidden" name="gameID" value="<?php echo $G?>" >

  <label for="betAmnt"><b>Bet amount:</b></label>
  <input type="number" id="betAmnt" name="betAmnt" min="1" max="10" style="width: 75px;" required><br>
  <script> document.getElementById("betAmnt").max = maxCoins</script>  
  
  <b>Team:</b>
  <input type="radio" id="team1" name="teamPick" value="1" required>
  <label for="team1"><?php $Game=$_GET["Game"]; require 'Team1Call.php'; ?></label>   
  
  <input type="radio" id="team2" name="teamPick" value="0" required>
  <label for="team2"><?php $Game=$_GET["Game"]; require 'Team2Call.php'; ?></label>
  
  <br> <br>
  <input type="submit" value="Submit">
</form>

<br>

</div>

<br>

<?php




$sql =  "SELECT  * FROM `ProjectNigerianPrince`.`gameBase`
WHERE GameId=$G";

$result = mysqli_query($mysqli,$sql);


$StreamLink = " ";
$StreamChat = " ";

if (mysqli_num_rows($result) >0) {
while ($row = mysqli_fetch_assoc($result)) {
$StreamLink = $row["StreamLink"];
$StreamChat = $row["StreamChat"];
}
}

echo " $StreamLink  ";
echo "<p style='float:left;padding-left: 20%;'> $StreamChat </p>";
?>
</body>
</html>
