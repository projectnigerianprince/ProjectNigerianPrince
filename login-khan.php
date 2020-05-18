<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="shortcut icon" type="image/png" href="WebNav/favicon.png">

<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta meta name="viewport" content=  
            "width=device-width, user-scalable=no" /> 
            <link href="Styles.css" rel="stylesheet" type="text/css"/>
	
	
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


	
<title>login/register</title>
<style type="text/css">



</style>
</head>



<?php 
require 'phpcall.php';
?>

<body>
<div class="auto-style4" >
	<br />
	<a href="\default-Landing.php"><img alt="" height="73" src="WebNav\Logo.png" style="float: left" width="913"><br />
</a>
	
</div>

<div class="auto-style4">

<img alt="" height="73" src="Logo.png" style="float: left" width="913" /><br /><br/><br/><br/><br/>
</div>
<div style=" background-color: silver; Height: 340px; width: 340px; padding-left: 30px; padding-top: 10px; border-radius: 25px; border-right: 5px solid black; border-top: 5px	solid black; border-bottom: 5px solid black;">
	<form action="loginPhp.php" method="post" style=" width: 311px; height: 263px;" class="auto-style2">
	<img src="WebNav/afb839f536a7b834c0b2f101a297c03d.png" height="53" width="187"/><br/><br/>
	<label for="userName">Enter User Name</label><br>
	<input type="text" name="userName"/><br/><br/>
	
	<label for="passWord">Enter Password</label><br/>
	<input type="password" name="passWord"/><br/><br/>

		
		
	<input type="submit" name="login" value="Login"/>
	</form>
</div>
<br/>


<div style=" background-color: silver; Height: 350px; width: 350px; padding-left: 30px; padding-top: 10px; border-radius: 25px; border-right: 5px solid black; border-top: 5px	solid black; border-bottom: 5px solid black;">
<form method="GET" action="testDnew.php" style="width: 311px; height: 265px; " class="auto-style2">
<img src="WebNav/20bdb7c648f68555a5e510207b19b832.png" height="53" width="305"/><br/><br/>
<label for="userName">Enter User Name</label><br/>
	<input id="uName"  type="text" name="UserName"><br><br>
	<label for="Password"> Password </label><br>
    <input id="uPass"  type="Password" name="Password"><br><br>
	<div class="form-group">
       <div class="g-recaptcha" data-sitekey="6LewOu8UAAAAADxSrgTrGDG5T7XfclvDkXYSg9u4"></div>
       <span id="captcha_error" class="auto-style4"></span><br>
      </div>
	
    <input id="theSubmitButton" type="submit" style="length:30px" value="Register"><br> <br>
	
	
	
</form><br/>
</div>

</br>

<div style="height: 220px; background-color: silver; padding-left: 30px; padding-top: 10px; border-radius: 25px; border-right: 5px solid black; border-top: 5px	solid black; border-bottom: 5px solid black;" >
<img src="WebNav/ea0c31c99c34fdaf904d190ed1de2a5a.png" width="310" height="40"/>
</br>

<div style= "font: 20px Helvetica";>
<?php

$sql =  "SELECT  * FROM `ProjectNigerianPrince`.`Testemonials`";

$result = mysqli_query($mysqli,$sql);

$AutoNum = " ";
$Testemonial = " ";


if (mysqli_num_rows($result) >0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$AutoNum = $row["AutoNum"];
		$Testemonial= $row["Testemonial"];
		echo "$Testemonial </br></br>";
	
	}
}

?>
</div>





</div><br/><br/>

<div class="Slightly-Not-Right" style="right: 0%; top: -744px; width: 483px; height: 426px; background-color:silver; text-align: center; font: 20px Helvetica;">
 RECENT WINNERS</br></br>
<?php

$sql =  "SELECT  * FROM `ProjectNigerianPrince`.`RecentWinners`";

$result = mysqli_query($mysqli,$sql);

$AutoNum = " ";
$WName = " ";
$AmountWon = " ";

if (mysqli_num_rows($result) >0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$AutoNum = $row["AutoNum"];
		$WName = $row["WName"];
		$AmountWon = $row["AmountWon"];
		echo "$WName , $AmountWon !! </br>";
	
	}
}

?>


</div>




</body>

</html>
