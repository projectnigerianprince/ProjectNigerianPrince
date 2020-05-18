
<?php
$G=$Game;


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
$StreamLink = " ";

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
$StreamLink = $row["StreamLink"];
}
}

echo "  $Team1 	";

?>