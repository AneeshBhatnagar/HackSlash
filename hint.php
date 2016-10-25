<?php
	session_start () ;
	function LoadHint ($Level) {
		$Filename = "hints/level" . $Level . ".html" ;
		include ($Filename) ;
	}
?>

<html>
<head><title>Level <?php echo $_SESSION["CurrentLevel"] ; ?> : Hint</title></head>
<body>
<div id="content">
<?php
	
		if (!isset($_SESSION["SeenHint"][$_SESSION["CurrentLevel"]])) {
			LoadHint ($_SESSION["CurrentLevel"]) ;
			$_SESSION["Points"] -= 5 ;
			$f=fopen("scores.txt", 'a') or die("can't open file");
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
			$_SESSION["SeenHint"][$_SESSION["CurrentLevel"]] = 1 ;
		}
	else {
		LoadHint ($_SESSION["CurrentLevel"]) ;
		}
	
?>
<p><b>NOTE : </b>5 points have been deducted from your current total.</p>
<p>Close this tab to proceed further.</p>
</div>
</body>
</html>