<?php
session_start();
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


?>
