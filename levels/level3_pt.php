<?php
	if (!isset ($_COOKIE["admin"])) {
		setcookie ("admin", 0) ;
	}
?>

<html>
<head>
<title>Error</title>
</head>

<body>
<?php
	if ($_COOKIE["admin"] == 0)
		echo "<h1>Error</h1><p>You don't have admin access.</p>" ;
	elseif ($_COOKIE["admin"] == 1)
		echo "<h1>Access Granted</h1><p>The password is : mnopqr.</p>" ;
?>
</body>

</html>