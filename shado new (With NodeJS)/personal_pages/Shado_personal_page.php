<?php
	session_start();
	require_once('../phpfiles/ShadoConfig.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet" type="text/css" href="../CSS Scripts/constitution.css">
		<title>Parsonal Page</title>
<link rel="icon" type="image/ico" href="Shado.ico">
<style type="text/css">
body	{font-family: Arial;
	 background-image: url('../backgrounds/Shado_main_bg.jpg');}
#Sbody	{margin-top: 5%;
	 margin-left: 5%;}
.newLink	{color: #3b5998;}
.newLink:hover	{font-weight: normal;}
.Likes		{background-color: rgba(0,0,0,0.5);
		 border-color: rgb(137,150,184);
		 border-width: 2px;
		 border-radius: 5px;
		 width: 20%;}
</style>
	</head>	
	<body>
	<form name="funform">
		<div id="Sbody">
			<div class="Sphoto">
				<?php echo '<img name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="../'.$_SESSION["imglink"].'" width="231" height="300">';?>
			</div> <br /><br />
			<div>
				<table>
					<tr>
						<td class="shado-green bold">Name</td>
						<td></td>
						<td class="white"><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></td>
					</tr>
					<tr>
						<td class="shado-green bold">Date of birth</td>
						<td></td>
						<td class="white"><?php echo $_SESSION['day']; echo " "; echo $_SESSION['month']; echo " "; echo $_SESSION['year'];?></td>
					</tr>
					<tr>
						<td class="shado-green bold">Shado mail</td>
						<td></td>
						<td><a class="white" href="mailto:<?php echo $_SESSION['email']; ?>"><?php echo $_SESSION['smail']; ?></a></td>
					</tr>
				</table>
		</div>		
		<div style="margin-top: -20%; margin-left: 50%;" class="Likes">
			<div style="padding: 10px;">
				<h3 class="arial white">Your Likes</h3>
				<br />
				<a href="../Shado_pages/colors.htm" class="newLink" align="center">
					<img src="../ألوان.jpg" width="150" height="100" title="Color Page" style="border-radius: 6em;"> <br /> <br />
				</a>
				<br />
				<a href="../shado_pages/shado_page.htm" class="white" align="center">
					<img src="../Shado_Pages/shado.png" width="150" height="100" title="Shado Page" style="border-radius: 6em;"> <br /> <br />
				</a>
				<a href="../shado_pages/nature.htm" class="white" align="center">
					<img src="../Shado_Pages/nature2.jpg" width="150" height="100" title="Nature Page" style="border-radius: 6em;"> <br /> <br />
				</a>
					 <br />
					<br />
				<input type="button" value="Color page, Nature and Shado" class="google-input_green-shado_button" id="google-input_green-shado_button" />
			</div>
		</div>
	</form>
	</body>
</html>
	