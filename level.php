<?php
	session_start (); 
	function LoadLevel ($Level) {
		if($_SESSION["CurrentLevel"]==7)
			echo "<p>Reached to the final level. Congratz!!!.. Please inform some volunteer near you... :)</p>";
		else
		{	$Filename = "levels/level" . $Level . ".html" ;
			include ($Filename) ;
		}
	}
?>

<html>
<head>
<title>Hackslash</title>
<link rel="stylesheet" type = "text/css" href="style.css">
</head>
<body>
<center><img src="tbar.png" /></center>
<div id = "content">
<h1>Hackslash</h1>
<img src="divider.png" />
<?php
	if (($_SESSION["CurrentLevel"] == 0 || $_SESSION["CurrentLevel"] == 1) && !(isset ($_POST["Password"]))) {
		if ($_SESSION["CurrentLevel"] != 1) {
			$_SESSION["CurrentLevel"] ++ ;
		}
		LoadLevel ($_SESSION["CurrentLevel"]) ;
	}
	if (isset ($_POST["Password"])) {
		if (strcmp($_POST["Password"], $_SESSION["PassList"][$_SESSION["CurrentLevel"]]) == 0) {
			$_SESSION ["Points"] += 10 ;
			$myfile="scores.txt";
			$f=fopen($myfile, 'a') or die("can't open file");
			$stringData = "\nTeam No :";
			fwrite($f, $stringData);
			fwrite($f, $_SESSION["TeamCode"]);
			$stringData = "\nCurrent Level :";
			fwrite($f, $stringData);
			fwrite($f, $_SESSION["CurrentLevel"]);
			$stringData = "  Points :";
			fwrite($f, $stringData);
			fwrite($f, $_SESSION["Points"]);
			$stringData = "\n";
			fwrite($f, $stringData);
			fclose($f);
			$_SESSION ["CurrentLevel"] ++ ;
			unset ($_POST["Password"]) ;
			LoadLevel ($_SESSION["CurrentLevel"]) ;
		}
		else {
			echo "<p>Invalid password.</p>" ;
			LoadLevel ($_SESSION["CurrentLevel"]) ;
		}
	}
?>
<?php
if($_SESSION["CurrentLevel"]==1 || $_SESSION["CurrentLevel"]==2 || $_SESSION["CurrentLevel"]==3 || $_SESSION["CurrentLevel"]==6 || $_SESSION["CurrentLevel"]==5 || $_SESSION["CurrentLevel"]==4)
	echo "<p><a href = \"hint.php\" target = \"_blank\" onClick = \"window.location.reload()\">Show hint.</a><br/></p>";
else if ($_SESSION["CurrentLevel"]==7)
{
}
else
	echo "<b><i><p>No Hint Available for this level.</p></i></b>";
?>
<img src="divider.png" />
<p>
<?php include("footer.php") ;?>
</p>
</div>

</body>
</html>