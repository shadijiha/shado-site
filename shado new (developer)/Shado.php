<?php
	session_start();
	require_once('phpfiles/ShadoConfig.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>	
	<head>
<link rel="stylesheet" type="text/css" href="CSS Scripts/constitution.css">
		<title>Shado | Sign in</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/ico" href="Shado.ico">
<style>
a:hover	{text-decoration: underline;
	 font-weight: normal;
	 color: #ffffff;}
body {
	margin: 0;
	background-size: cover;
	transition: background-image 1s;
}
#form1	{position: relative;
		 z-index: +1;}
.shadoPHP	{
	width: 275px;
    border-radius: 5px;
    height: 30px;
    border-width: 1px;
    background-color: #55acee;
    background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.15));
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00000000, endColorstr=#26000000)";
    border-color: #3b88c3;
    color: #fff;
	-webkit-transition: opacity 1s;
}
input[type=text],[type=password]	{
	-webkit-transition: opacity 1s;
}
input[type=text]:focus,[type=password]:focus	{
	opacity: .5;
}
.shadoPHP:hover	{
	opacity: .8;
}
.shadoPHP:active	{
	opacity: .5;
}
#Invalid_Credentials	{
	background-color: #fdd;
	border: 1px solid #c77;
	border-radius: 5px;
	color: #c77;
	padding: 10px;
	display: none;
}
#db_error	{
	background-color: #fdd;
	border: 1px solid #c77;
	border-radius: 5px;
	color: #c77;
	padding: 10px;
	display: none;
}
</style>
<script>
function randomBg(string)	{

	window.onload = function()	{

		var array = string.split(",");
		array.pop();
		document.querySelector("body").style.backgroundImage = `url('backgrounds/wallpapers/${array[Math.floor(Math.random() * array.length)]}')`;
	
		setInterval(function()	{
			document.querySelector("body").style.backgroundImage = `url('backgrounds/wallpapers/${array[Math.floor(Math.random() * array.length)]}')`;
		}, 5000);
	}
	
}

randomBg("cumbria_england_sky_mountain_cloud_106217_3840x2400.jpg,maldives_tropical_beach_90640_3840x2400.jpg,maldives_tropical_beach_palm_trees_90781_3840x2400.jpg,maldives_tropical_beach_palm_trees_90898_3840x2400.jpg,maldives_tropical_bungalows_sky_90627_3840x2400.jpg,mountains_grass_sky_landscape_86123_3840x2400.jpg,mountains_landscape_grass_meadow_poland_109423_3840x2400.jpg,mountains_landscape_mt_rainier_washington_grass_hdr_90605_3840x2400.jpg,mountains_sky_grass_caucasus_nature_84259_3840x2400.jpg,road_trees_autumn_117713_3840x2400.jpg,sea_lake_island_mountains_118555_3840x2400.jpg,");

</script>

	<!-- load all images from "backgrounds/wallpapers/" using php -->

	<?php 
		$str = "";
		if ($handle = opendir('backgrounds/wallpapers/.')) {
			
			while (false !== ($entry = readdir($handle))) {

				if ($entry != "." && $entry != "..") {

					$str = $str . $entry . ",";
					
				}
			}
			closedir($handle);
		}
		
		echo '<script>randomBg("'. $str . '")</script>';
		
	?>	

	</head>

	<body >
	<!--
<canvas id="first_test"></canvas>
<script type="text/javascript" src="js/canvas.js"></script>
	-->
	<form id="form1" action="Shado.php" method="post">
		<div class="languages">
			<select name="Languages" onchange="window.open(this.options[this.selectedIndex].value,'_top')">
				<option value="../Shado New (Developer)/Shado.php">English (UK)</a>
				<option value="../Shado New (Developer)/Shado.php">English (US)</a>
				<option value="../Shado-Français/shado.html">Français</a>
				<option value="../Arabic Shado/shado.html" class="i-font">عربي</a>
				<option value="../Shado español/shado.html">Español</a>
				<option value="../Shado Chinese/shado.html">中国</a>
			</select>
		</div>
		<div class="arial" style="font-size: 14px;">
			<div class="login">
				<h1 class="white arial">Login</h1>
				<div class="message">
					<div id="Invalid_Credentials">
						No such User exists. Invalid Credentials
					</div>
					<div id="db_error">
						Database Error
					</div>
				</div>
				<br />
				<br />
				<input name="username" type="text" placeholder="Username" required />
				<br />
				<br />
				<input  name="password" type="password" placeholder="Password" required />
				<a class="white" href="forget.htm">
					<small style="-webkit-transition: text-decoration 1s;">Forget password?</small>
				</a>			
				<br />
				<br />
					<input name="login" type="submit" value="Login" class="shadoPHP"/>
				<br />
				<br />
				<a href="CAA.php">
					<small class="white" class="no-link">Don't have an account?</span>
				</a>
			</div>
		</div>
		<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$query="select * from shadotable WHERE username='$username' AND password='$password'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_assoc($query_run);
				// valid
				$_SESSION['username']= $row['username'];
				$_SESSION['password']= $row['password'];
				$_SESSION['email']= $row['email'];
				$_SESSION['smail']= $row['smail'];
				$_SESSION['fname']= $row['fname'];
				$_SESSION['lname']= $row['lname'];
				$_SESSION['day']= $row['day'];
				$_SESSION['month']= $row['month'];
				$_SESSION['year']= $row['year'];
				$_SESSION['question']= $row['question'];
				$_SESSION['answer']= $row['answer'];
				$_SESSION['imglink']= $row['imglink'];
				$_SESSION['id']= $row['id'];
				//header('location:index.php');
				
				// For some reason there were a problem with php header so I used JS
				echo '<script type="text/javascript">window.location = "index.php"</script>';
				
			}
			else
			{
				// invalid
				echo '<script type="text/javascript">document.getElementById("Invalid_Credentials").style.display = "block";</script>';
			}
			
		}
		
		
		?>
		<br />
		<br />
		<br />
		<br />
		<div id="footer" class="arial black" style="font-size: 12px;">
				&copy; Shadi Jiha 23/01/2015 9:19 PM | All rights reserved
			</div>
		</div>
	</form>
	</body>
</html>	
