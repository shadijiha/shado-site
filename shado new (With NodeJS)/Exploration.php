<?php
	session_start();
	require_once('phpfiles/ShadoConfig.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet" type="text/css" href="CSS Scripts/constitution.css">
		<title>Shado.KS.com/page/index/Exploration</title>
<link rel="icon" type="image/ico" href="Shado.ico">
	</head>
	
	<body>
	<form name="funform">
	<font face="arial">
		<div class="div-S-12">
			<div id="b" class="in"></div>
			
		</div>
		<div>
			<a href="images.jpg">
				<img src="backgrounds/Nature Mountains photo.jpg" title="There is not any comment" width="400" height="300" />
				<img src="backgrounds/Beauty-of-nature-random-4884759-1280-800.jpg" title="There is not any comment" width="400" height="300" />
			</a> <br /> <br />
			<br />
			<p>
				<a href="personal_pages/abu.jpg" title="أبو حميد">
					<img id="personal_image" src="personal_pages/abu.jpg" width="50" height="50" alt="" title="">
				</a>
				Abo hmed said : <br />
				<textarea name="text" cols="30" rows="1" disabled="disabled">A good photo's !</textarea> <br /> <br />
			</p>	
			<p>
				<a href="personal_pages/Shadi_Jiha.htm">
					<img id="personal_image" src="personal_pages/Shadi.jpg" width="50" height="50" alt="" title="Shadi's photo" />
				</a>
				Shadi Jiha <br />
				<textarea name="text" cols="30" rows="1" disabled="disabled">ils sont vraiment jolis</textarea> <br />
			</p>
		</div>
		<?php echo $_SESSION['username'] ?>, Write a comment: <br />
			<textarea cols="30" rows="5" name="textarea1"></textarea> <br />
			<input type="button" value="Post" OnClick="lunction();" class="google-input_green-shado_button" id="google-input_green-shado_button" >
<script language="JavaScript" src="Ok.js"></script>
	</form>
	</font>		
	</body>
</html>
	