<?php
	session_start() ;
	if (strcmp($_GET["employeeID"], "kjduhf8hoo") == 0) {
		# $_SESSION["RatingJohn"] = ($_SESSION["RatingJohn"] + $_GET["rating"]) / 2 ;
		echo "<p>You voted for John. <a href = \"index.php\">Click here</a> to go back.</p>" ;
	}
	elseif (strcmp($_GET["employeeID"], "lkd6gf874s") == 0) {
		# $_SESSION["RatingBill"] = ($_SESSION["RatingBill"] + $_GET["rating"]) / 2 ;
		echo "<p>You voted for Bill. <a href = \"index.php\">Click here</a> to go back.</p>" ;
	}
	elseif (strcmp($_GET["employeeID"], "bgdhy76sbh") == 0) {
		# $_SESSION["RatingHarry"] = ($_SESSION["RatingHarry"] + $_GET["rating"]) / 2 ;
		echo "<p>You voted for Harry. <a href = \"index.php\">Click here</a> to go back.</p>" ;
		if ($_GET["rating"] > 5) {
			echo "<p>The password for the next level is : stuvwx</p>" ;
		}
	}
?>