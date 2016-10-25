<?php
	session_start() ;
	
	
	$_SESSION ["TeamCode"] = $_POST["TeamCode"] ;
	$_SESSION ["TeamName"] = $_POST ["TeamName"] ;
	$_SESSION ["School"] = $_POST ["School"] ;
	$_SESSION ["Points"] = 0 ;
	$_SESSION ["CurrentLevel"] = 0 ;
	$_SESSION ["PassList"] = array (1 => "abcdef", "simple", "mnopqr", "stuvwx", "aseckoid9l4", "efghij") ;
		
	if ($_SESSION["TeamName"] == "" || $_SESSION["School"] == "") {
		echo "<h1>Error</h1><p>You didn't fill in all the required fields. <a href=\"index.html\">Click here</a> to go back." ;
	}
	else
	{
?>
<html>
<head>
<title>Logged In as Team No. : <?php echo $_SESSION["TeamCode"] ?></title>
</head>
<body>
<h1>Logged In</h1>
<p>You have been logged in to Hackslash. Click <a href="level.php">here</a> to continue to the first level.</p>
</body>
<?php } ?>