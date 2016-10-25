<?php
	session_start () ;
?>
<table>
<tr><td><b>Team name : </b></td><td><?php echo $_SESSION["TeamName"] ; ?></td></tr>
<tr><td><b>Points : </b></td><td><?php echo $_SESSION["Points"] ; ?></td></tr>
<tr><td><b>Levels completed : </b></td><td><?php echo $_SESSION["CurrentLevel"]-1 ; ?></td></tr>
</table>