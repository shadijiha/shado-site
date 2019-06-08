<?php
	session_start();
	require_once('phpfiles/ShadoConfig.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet" type="text/css" href="CSS Scripts/constitution.css">
		<title>Your Page | <?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></title>
<link rel="icon" type="image/ico" href="Shado.ico">
		<frameset rows="*,50">

     		<frameset  cols="200,*" framespacing="0">

     			<frame src="shado1.php" name="left"    frameborder="no"  /> 

     			<frame src="Shado2.php" name="right"  frameborder="no"  /> 
		</frameset>
			<frame src="h.php" name="down" frameborder="no"  />
		</frameset>
	</head>
</html>
	