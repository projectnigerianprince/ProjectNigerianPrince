<!DOCTYPE html>
<html>
<link href="Styles.css" rel="stylesheet" type="text/css">


<head>

</head>
 
<body>

<?php
$name = $_GET["UserName"];
$upassword = $_GET["Password"];/*crypt()*/
$servername = "localhost:3306";
$Cpassword = password_hash('$upassword', PASSWORD_DEFAULT);

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

$sql =  "INSERT INTO `ProjectNigerianPrince`.`userData` (`userName` , `passWord`) VALUES ('$name','$Cpassword')";


 if (mysqli_query($mysqli, $sql)) {

               echo "New record created successfully";
				

               
            } else {

               echo "Error: " . $sql . "" . mysqli_error($mysqli);

            }

            $mysqli->close();


?>


<p><a href="http://nigerianprince.ddns.net/login.php">Home</a></p>
</body> 
