<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['user']){
}
else{
    header("location: login.html");
}
$nameU = $_SESSION['user'];
echo "welcome $nameU";


$name = $_POST["userName"];
$upassword = $_POST["passWord"];

$servername = "localhost:3306";

$username = "aj";

$password = "Raffik12";

$dbname = "ProjectNigerianPrince";

/*$dbhandle= new mysqli($localhost, $root, $Raffik12);*/
$mysqli = new mysqli($servername, $username, $password, $dbname);
/*$conn = "mysqli_connect('localhost','aj','Raffik12','ProjectNigerianPrince')";*/
if (mysqli_connect_errno())
//20
  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }


$sql = "Select * FROM `ProjectNigerianPrince`.`userData` WHERE userName = '$nameU' ";
$result = mysqli_query($mysqli,$sql);

$NumOfBets = " ";
$TotalWinnings = " ";
$NumOfWBets = " ";
$WinP = " ";


if (mysqli_num_rows($result) >0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$NumOfBets = $row["NumOfBets"];
		$TotalWinnings = $row["TotalWinnings"];
		$NumOfWBets = $row["NumOfWBets"];
		$WinP = $row["Win%"];
	}
}





?>

<head>
<title>User Statistics</title>
</head>
<body>

<h1>User Statistics</h1>
//the below "name" variable is just to test if variables are working, which so far they are not for me
<p>Total Bets: <?php echo "$NumOfBets"; ?></p>
<p>Win Percentage: </p>
<p>Total Cash Winnings: </p>


<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<p><a href="http://nigerianprince.ddns.net/home.php>Home</a></p>
</body>





</html>