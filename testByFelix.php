<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta meta name="viewport" content=
            "width=device-width, user-scalable=no" />
            <link href="Styles.css" rel="stylesheet" type="text/css">
<title>Who are we</title>
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

.IRSshield {
	/*width: 150px;
	height: 150px;*/
	/*margin-top: 20px;*/
	/*margin-right: 20px;*/
  float: right;

	/* I CANNOT PUT THIS AS I WANT !! */
}

</style>

<link rel="shortcut icon" type="image/png" href="WebNav/favicon.png">
</head>

<?php

require 'phpcall.php'

?>



<body>

<div class="auto-style4">
	<br>
	<a href="\default-Landing.php"><img alt="" height="73" src="WebNav\Logo.png" style="float: left" width="913"><br>
	<a href="login.php">Login/Sign Up</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 	<br>
	</div>

<div>
	<marquee> Please <a href="login.php">Sign In </a> to Gamble your life away</marquee>
</div>


<div class="IRSshield">
    <img src="WebNav\IRSfreeAlphaTransparent.png" width="350" style="margin-right:50px">
</div>


<div class="Slightly-Not-Left" style="width: 400px; background-color:silver;">
	<span class="auto-style3">Who are we?</span><br>
	<span class="auto-style2">Here at Project Nigerian Prince, we aim to create
	a wonderfull<br>
	worry free healthy gambling environment for everyone involved.<br>
	Using currency like DOGE2 Coin, we can constantly produce magical<br>
	currency, and have everyone consume whatever we produce<br>
	<br>
	</span><span class="auto-style3">How do I place my first bets?</span><br>
	<span class="auto-style2">Head over to the top right hand corner and sign up
	for our website<br>
	There you will provide your email address and password,<br>
	we will use that information to securly store your bets and currency,<br>
	and also do our best to sell your email address to third party companies<br>
	that just ask us nicely. Please send an email at<br>
	<a href="mailto:webmaster@nigerianprince.com">webmaster@nigerianprince.com</a>
	for inqueries on our email list prices.<br>
	<br>
	</span><span class="auto-style3">How can I trust you with our fake money?</span><br>
	<span class="auto-style2">As the people always say, "If the website is being
	transparent with you<br>
	they are more easily trusted." Thats the policy we bank on. We will <br>
	always tell you what information is sold to who, and give users<br>
	the option to either give us their information in trade of using <br>
	our lovely gambling choices, or opt out freely.<br>
	Users can also delete their account, but that does not change the fact<br>
	that we have access to send you emails when ever we want, and to<br>
	sell that email list to whoever we want.<br>
	<br>
	</span><span class="auto-style3">Is this a scam?</span><br>
	<span class="auto-style2">No.<br>
	<br>
	</span><span class="auto-style3">What Games Can I bet on?</span><br>
	<span class="auto-style2">Starting off, Our webmasters have chosen a few
	game titles to focus on.<br>
	As we get our algorythm more refined, we will add more e-sports titles<br>
	into the mix. To start, we will do Dota, League and Overwatch.<br>
	<br>
	</span><span class="auto-style3">Can I gamble real currency?</span><br>
	<span class="auto-style2">This is not that kind of website yet.<br>
	<br>
	</span><span class="auto-style3">I am under 18, How did I get here?</span><br>
	<span class="auto-style2">I dont know, please ask your parents if you are
	allowed to be here.<br>
	If you arent careful, one of our advertisers might show inappropriate
	content<br>
	and we cant protect your childish eyes from it. You have been warned.</span></div>

	<div class="auto-style6" style="left:445px; position: absolute; top: 110px; width: 800px; height: 900px">


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 900px;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 110%;
}

#Home {background-color: #9e0303;}
#News {background-color: #060182;}
#Contact {background-color: #0297ad;}
#About {background-color: #f99e1a;}
</style>
</head>
<body>

<button class="tablink" onclick="openPage('Home', this, '#9e0303')" id="defaultOpen">
<img src="GameLogos\dota-2-logo.png" style="float: center" width="32" height="32"> </button>
<button class="tablink" onclick="openPage('News', this, '#060182')">
<img src="GameLogos\csgologo.png" style="float: center" width="32" height="32"></button>
<button class="tablink" onclick="openPage('Contact', this, '#0297ad')">
<img src="GameLogos\league-of-legends-logo.png" style="float: center" width="32" height="32"></button>
<button class="tablink" onclick="openPage('About', this, '#f99e1a')">
<img src="GameLogos\overwatchlogo.png" style="float: center" width="32" height="32"></button>

<div id="Home" class="tabcontent">
  <h3>Dota 2</h3>
<?php
$GameID="Game=2";
echo "<a href=GamePage.php?$GameID>";
?>
<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">
		<center><p><b>MDL</b></p></center>
		<right>5:00 PM </right>
		<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px;"><p>
<?php
$Game="2";
require 'GameCall.php';

?>
<br>
</div></center></p>
</div>
</a>
<?php
$GameID="Game=3";
echo "<a href=GamePage.php?$GameID>";
?>

<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">
		<center><p><b>MDL</b></p></center>
		<right>6:00 PM </right>
		<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px"><p>
<br>
<?php
$Game="3";
require 'GameCall.php';

?>

<br>
</div></center></p></div>
</a>

<?php
$GameID="Game=4";
echo "<a href=GamePage.php?$GameID>";
?>
<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">
		<center><p><b>MDL</b></p></center>
		<right>7:00 PM </right>
		<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px"><p>
<br>

<?php
$Game="4";
require 'GameCall.php';

?>
<br>
</div></center></p></div>
</a>

<?php
$GameID="Game=5";
echo "<a href=GamePage.php?$GameID>";
?>

<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">

		<center><b>MDL</b></center>
		<right>8:00 PM </right>
<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px"><p>
<br>
<?php
$Game="5";
require 'GameCall.php';

?>
<br>
</div></center></p></div>
</div>
</a>


<div id="News" class="tabcontent">
  <h3>Counter Strike Global Offensive</h3>
<?php
$GameID="Game=6";
echo "<a href=GamePage.php?$GameID>";
?>
<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">
		<center><p><b>ESL</b></p></center>
		<right>5:00 PM </right>
		<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px;"><p>
<?php
$Game="6";
require 'GameCall.php';

?>
<br>
</div></center></p>
</div>
</a>

<?php
$GameID="Game=7";
echo "<a href=GamePage.php?$GameID>";
?>

<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">
		<center><p><b>ESL</b></p></center>
		<right>6:00 PM </right>
		<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px"><p>
<br>
<?php
$Game="7";
require 'GameCall.php';

?>

<br>
</div></center></p></div>
</a>

<?php
$GameID="Game=8";
echo "<a href=GamePage.php?$GameID>";
?>

<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">
		<center><p><b>ESL</b></p></center>
		<right>7:00 PM </right>
		<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px"><p>
<br>


<?php
$Game="8";
require 'GameCall.php';

?>
<br>
</div></center></p></div>
</a>

<?php
$GameID="Game=9";
echo "<a href=GamePage.php?$GameID>";
?>

<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">

		<center><b>ESL</b></center>
		<right>8:00 PM </right>
<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px"><p>
<br>
<?php
$Game="9";
require 'GameCall.php';

?>
</div>
</div>
</div>
</a>


<div id="Contact" class="tabcontent">
  <h3>League of Legends</h3>
<?php
$GameID="Game=10";
echo "<a href=GamePage.php?$GameID>";
?>
<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">
		<center><p><b>Worlds</b></p></center>
		<right>5:00 PM </right>
		<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px;"><p>
<?php
$Game="10";
require 'GameCall.php';

?>
<br>
</div></center></p>
</div>
</a>

<?php
$GameID="Game=11";
echo "<a href=GamePage.php?$GameID>";
?>

<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">
		<center><p><b>Worlds</b></p></center>
		<right>6:00 PM </right>
		<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px"><p>
<br>
<?php
$Game="11";
require 'GameCall.php';

?>

<br>
</div></center></p></div>
</a>

<?php
$GameID="Game=12";
echo "<a href=GamePage.php?$GameID>";
?>

<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">
		<center><p><b>Worlds</b></p></center>
		<right>7:00 PM </right>
		<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px"><p>
<br>

<?php
$Game="12";
require 'GameCall.php';

?>
<br>
</div></center></p></div>
</a>

<?php
$GameID="Game=13";
echo "<a href=GamePage.php?$GameID>";
?>

<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">

		<center><b>Worlds</b></center>
		<right>8:00 PM </right>
<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px"><p>
<br>
<?php
$Game="13";
require 'GameCall.php';

?>

</div>
</div>
</div>
</a>


<div id="About" class="tabcontent">
  <h3>Overwatch</h3>

<?php
$GameID="Game=14";
echo "<a href=GamePage.php?$GameID>";
?>

<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">
		<center><p><b>Overwatch League</b></p></center>
		<right>5:00 PM </right>
		<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px;"><p>
<?php
$Game="14";
require 'GameCall.php';

?>
<br>
</div></center></p>
</div>
</a>

<?php
$GameID="Game=15";
echo "<a href=GamePage.php?$GameID>";
?>

<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">
		<center><p><b>Overwatch League</b></p></center>
		<right>6:00 PM </right>
		<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px"><p>
<br>
<?php
$Game="15";
require 'GameCall.php';

?>

<br>
</div></center></p></div>
</a>


<?php
$GameID="Game=16";
echo "<a href=GamePage.php?$GameID>";
?>

<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">
		<center><p><b>Overwatch League</b></p></center>
		<right>7:00 PM </right>
		<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px"><p>
<br>

<?php
$Game="16";
require 'GameCall.php';

?>
<br>
</div></center></p></div>
</a>

<?php
$GameID="Game=17";
echo "<a href=GamePage.php?$GameID>";
?>

<div style="background-color:lightgrey;color:black;border-radius: 25px;">
	<div style="background-color:white;font-size:125%;border-top-radius: 25px;">

		<center><b>Overwatch League</b></center>
		<right>8:00 PM </right>
<hr>
	</div>
	<div><center style="padding-bottom:25px; padding-left:10px"><p>
<br>
<?php
$Game="17";
require 'GameCall.php';

?>
<br>
</div></center></p></div>
</div>
</div>
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<p class="auto-style5">&nbsp;</p>
</div>
</body>

</html>
