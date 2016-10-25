<?php
	session_start() ;
	$_SESSION["RatingJohn"] = 25 ;
	$_SESSION["RatingBill"] = 4.01 ;
	$_SESSION["RatingHarry"] = 2.54 ;
?>

<html>
<head>
<title>Employee of the Month</title>
</head>

<body>
<h1>Employee of the Month</h1>

<form method="get" action="rate.php">
<div id = "employee">
<h3>John</h3>
<input type="hidden" name = "employeeID" value = "kjduhf8hoo">
Rating : 
<select name="rating">
<option value=1>1</option>
<option value=2>2</option>
<option value=3>3</option>
<option value=4>4</option>
<option value=5>5</option>
</select>
<input type="submit">
<p><b>Current rating : </b><?php echo $_SESSION["RatingJohn"] ; ?></p>
</div>
</form>
  
<form method="get" action="rate.php">
<div id = "employee">
<h3>Bill</h3>
<input type="hidden" name = "employeeID" value = "lkd6gf874s">
Rating : 
<select name="rating">
<option value=1>1</option>
<option value=2>2</option>
<option value=3>3</option>
<option value=4>4</option>
<option value=5>5</option>
</select>
<input type="submit">
<p><b>Current rating : </b><?php echo $_SESSION["RatingBill"] ; ?></p>
</div>
</form>
  
<form method="get" action="rate.php">
<div id = "employee">
<h3>Harry</h3>
<input type="hidden" name = "employeeID" value = "bgdhy76sbh">
Rating : 
<select name="rating">
<option value=1>1</option>
<option value=2>2</option>
<option value=3>3</option>
<option value=4>4</option>
<option value=5>5</option>
</select>
<input type="submit">
<p><b>Current rating : </b><?php echo $_SESSION["RatingHarry"] ; ?></p>
</div>
</form>

</body>
</html>
