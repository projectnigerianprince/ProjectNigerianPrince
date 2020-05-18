<!DOCTYPE html>
<html>
<head>
<title>User Statistics</title>
<link href="Styles.css" rel="stylesheet" type="text/css">
</br>
	<a href="\default-Landing.php"><img alt="" height="73" src="WebNav\Logo.png" style="float: left" width="913"><br /></a>
</head>

<div class="auto-style4">
	<br />

	</br>
	
	</div>
</br>
 


<?php
session_start();
if ($_SESSION['user']){
}
else{
    header("location: login.html");
}
$nameU = $_SESSION['user'];

require 'phpcall.php';

$sql = "Select * FROM `ProjectNigerianPrince`.`userData` WHERE userName = '$nameU' ";
$result = mysqli_query($mysqli,$sql);

$NumOfBets = " ";
$TotalWinnings = " ";
$NumOfWBets = " ";
$WinP = " ";
$wallet = " ";

if (mysqli_num_rows($result) >0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$NumOfBets = $row["NumOfBets"];
		$TotalWinnings = $row["TotalWinnings"];
		$NumOfWBets = $row["NumOfWBets"];
		$WinP = $row["WinPerc"];
		$wallet = $row["Dodge2"];	
	}
}
?>




<body>


<h1>User Statistics</h1>
<div border="2px" style = "background-color:#FFFAA8; width: 200px;float: left; padding: 8px; border-radius: 15px 15px 15px 15px; ">
<p>Total Bets: <?php echo "$NumOfBets"; ?></p>
<p>Winning Bets : <?php echo "$NumOfWBets";?></p>
<p>Win Percentage: <?php echo "$WinP"; ?></p>
<p>Total Cash Winnings: <?php echo "$TotalWinnings"; ?></p>
<P>Remaining Coins: <?php echo "$wallet";?></p>


</p>





<form action="coinGen.php" method="post">
<input id="addCoins" type="submit" value="Get Coins">
</form>

<p>
<a href="http://nigerianprince.ddns.net/home.php">Home</a></p>

</div>


<div style = "width: 1000px; height:750px; float: right;">

<?php 
include_once('phpcall.php');
$sql = "Select * FROM `ProjectNigerianPrince`.`GameBets` WHERE userName = '$nameU' ";
$result = mysqli_query($mysqli,$sql);

$BetID = " ";
$GameID = " ";
$Team = " ";
$Amount = " ";



?>


<table id="tablespice" style=" width: 950px; font-size: 13px; font-weight: 400; background: #FFFAA8; border-top: 4px solid #blue; border-bottom: 1px solid #fff; color: #darkgreen; padding: 8px; text-align: left; border-radius: 15px 15px 15px 15px;"  >
	
	<tr>
		<th colspan="4" style="text-align: center;"><h1>Recent Bets</h1></th>
		
	</tr>
	<t>
		<th> BetID </th>
		<th> GameID </th>
		<th> Team </th>
		<th> Amount </th>
	</t>
	<?php
		echo($result2);
		while ($row = mysqli_fetch_assoc($result)) {
 
	?>
		<tr>
			<td><?php echo $row["BetID"]; ?></td>
			<td><?php echo $row["GameID"]; ?></td>
			<td><?php echo $row["Team"]; ?></td>
			<td><?php echo $row["Amount"]; ?></td>
		</tr>	
	<?php	
		}
	?>




</div>





</body>






</html>