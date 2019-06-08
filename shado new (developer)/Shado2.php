<?php
	session_start();
	require_once('phpfiles/ShadoConfig.php');
	//phpinfo();
?>
<!DOCTYRE html PUBLIC "-//W3C XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/transitional.dtd">
<html>
	<head>
<link rel="stylesheet" type="text/css" href="CSS Scripts/constitution.css">
		<title>Parsonal Page</title>
<link rel="icon" type="image/ico" href="Shado.ico">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="CSS Scripts/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
<!--
var  pass = "<?php echo $_SESSION['password'] ?>"
function validate1()	{
	document.getElementById("confirm").style.display = "block";
	document.getElementById("confirm_btn").style.display = "block";
	document.getElementById("confirm_1").style.display = "block";
};

function validate2()	{
	let value = document.getElementById("confirm").value;
	
	if (value != pass)	{
		document.getElementById("wrong_pass").style.display = "block";
	} else	{
		validate3();
	};
};

function validate3()	{
	var chosen = document.getElementById("quiz").value;
	document.getElementById("wrong_pass").style.display = "none";
	
	if (chosen == "2010")	{
		document.getElementById("response").innerHTML = "You're right! <img src='happy_face/celebration.jpg' /> You can upgrade to Shado ultimate for free for one month!";
		document.getElementById("quiz").style.display = "none";
	} else {
		document.getElementById("response").innerHTML = "Sorry, you're wrong <img src='happy_face/sad.jpg' /> You still have a free upgrade to Shado Professional however";
		document.getElementById("quiz").style.display = "none";
	};
	
	document.getElementById("confirm").style.display = "none";
	document.getElementById("confirm_btn").style.display = "none";
	document.getElementById("confirm_1").style.display = "none";
};
console.log(pass);

//-->
</script>
<style>
space	{
	width: 100px;
	background-color: transparent;
	color: white;
}
</style>
	</head>	
	<body>
	<form name="funform" method="post" action="#">
		<div style="background-color: rgb(181,230,29); height:100;">			
			<div class="div2">
				<div class="div1"></div>
				<span rol="alert">
					<span style="color: rgb(34,177,76);">Sh</span><span style="color: rgb(255,242,0);">ad</span><span style="color: rgb(34,177,76);">o</span><span style="color: rgb(255,242,0);">.com</span>
				</span>
			</div>			
		</div> <br /> <br />
		<fieldset>
			<legend>On route!</legend>
			<div class="fb-font">
				<p>
					<a href="shado_pages/shado_page.htm">
						<img src="Shado_pages/Personal_shado.png" id="personal_image" width="50" height="50" />
					</a>
					<p style="margin-top: -3%; margin-left: 4%;">
					 Shado messanger is <a href="shado_help/messenger.htm" target="_blank" class="shado-green">comming soon</a>! 
				</p>
				<br />
				<p>
					<a href="shado_pages/shado_page.htm">
						<img src="Shado_pages/Personal_shado.png" id="personal_image" width="50" height="50" />
					</a>
					<span>
						<?php echo $_SESSION['fname'] ?>, todday is Shado's 8th anniversary! Happy birthday <img src="happy_face/celebration.jpg">! You have a free upgrade to Shado
						<a class="shado-green" href="shado_help/pro.htm" target="_blank">Professional</a> for a limited time! Herry up!
						&nbsp; &nbsp; &nbsp; &nbsp; 
						<a href="buy_Shado-pro.htm" target="_blank">
							<input type="button" class="google-input_green-shado_button" value="Upgrade now" name="Upgrade" />
						</a>
						<br />
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						visit old Shado from  <a class="shado-green" href="../old shado/index.html" target="_blank">here</a>. We've came a long way across, haven't we? 
					</span>
				</p>
				<br />
				<p style="display: none;">
					<a href="shado_pages/shado_page.htm">
						<img src="Shado_pages/Personal_shado.png" id="personal_image" width="50" height="50" />
					</a>
					<p style="margin-top: -5%; margin-left: 6%; display: none;">
					New Shado app go and try!!!
					 <a href="http://b.como.com/81/81/81a71d56-5e81-4b68-a841-1fbeecd211a7/Build/Android/1.4.11.29/4__2015-01-03_20-45-39-4519/app.apk" class="shado-green">Click here</a> to download. [Version 4.0.6.12]
					</p>
				</p>
			</div>
		</fieldset>
		<fieldset>
			<legend><?php echo $_SESSION['fname'] ?>, see your friends posts!</legend>
			<div class="Arial">
				<p name="Shado\s_post">
					<a href="Shado_Pages/shado_page.htm">
						<img id="personal_image" src="Shado_pages/Personal_shado.png" width="50" height="50" alt="Shado's photo" title="Shado's photo">
					</a>
					<a href="Shado_Pages/shado_page.htm" class="shado-green">Shado</a> Added a new post <small class="gray" id="gray">(17/01/2018 at 6:47 PM)</small> <br /> <br />
					<space>space here</space>
					<span>
						Happy birthday Shado <img src="happy_face/celebration.jpg">! Here's a little quiz for you:
					</span>
					<br />
					<br />
					<space>space here</space>
					<span>
						When was Shado released?
						&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						<select id="quiz" OnChange="validate1();">
							<option value="none"></option>
							<option value="2011">January 15th 2011</option>
							<option value="2013">January 15th 2013</option>
							<option value="2008">January 15th 2008</option>
							<option value="2010">January 15th 2010</option>
							<option value="2018">Yesterday xD</option>
						</select>
						&nbsp; &nbsp;
						<span id="confirm_1" style="display: none;">This is your last chance are you sure?</span>
						<br />
						<span id="wrong_pass" style="font-weight: bold; color: red; display: none;">Wrong password. Please try again.</span>
						<input type="password" id="confirm" placeholder="password" style="display: none;"/>
						&nbsp; &nbsp;
						<input type="button" class="google-input_green-shado_button" id="confirm_btn" style="padding: 10px; border-radius: 5px; display: none;" value="Confirm" OnClick="validate2();" />
						<space>space here</space>
						<b><span id="response"></span></b>
					</span>
					 <br /> <br />
					<img src="happy_face/Love_gray.png" name="like19" OnClick="document.funform.like19.src='happy_face/Love.png'; document.funform.you18.type='button';" />
					<input type="hidden" name="you18" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Samer, Sarah, yussuf, maysoon, Lina, Qwerty and 951 513 persons like this
					<div class="comments">
						<div class="first_comment_1">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font" >
								Thx for the free ultimate <img src="happy_face/happy.jpg"> !
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold fb-font" >
								didn't get the good answer <img src="happy_face/sad.jpg"> .
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/qwerty.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Qwerty.htm">
								<span >Qwerty uiop</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								Oh f*** off! didn't get the good answer <img src="happy_face/angry.jpg"> RIP 20$
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post"></textarea>
						</div>
						<hr color="white" />
					</div>			
				</p>
				<p name="Shadi\s_post">
					<a href="personal_pages/Shadi_jiha.htm">
						<img id="personal_image" src="personal_pages/Shadi.jpg" width="50" height="50" alt="Shadi's photo" title="Shadi's photo">
					</a>
					<a href="personal_pages/Shadi_jiha.htm" class="shado-green">Shadi Jiha</a> Added a new photo <small class="gray" id="gray">(13/08/2016 at 7:50 PM)</small> <br /> <br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="">
						<img src="backgrounds/mountain.jpg" width="500" height="300" />
					</a> <br /> <br />
					<img src="happy_face/Love_gray.png" name="like18" OnClick="document.funform.like18.src='happy_face/Love.png'; document.funform.you17.type='button';" />
					<input type="hidden" name="you17" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Samer, Sarah, yussuf, maysoon, Lina, Qwerty and 32 persons like this
					<div class="comments">
						<div class="first_comment_1">
							<img src="personal_pages/samer.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/samer_Jiha.htm">
								<span >Samer Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font" >
								WOW <img src="happy_face/O.jpg"> !
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold fb-font" >
								حلوة كتيررررر <img src="happy_face/happy.jpg"> .
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="text" id="text" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post"></textarea>
						</div>
						<hr color="white" />
					</div>		
				</p>
				<p name="Samer_join">
					<a href="personal_pages/Samer_Jiha.htm">
						<img id="personal_image" src="personal_pages/Samer.jpg" width="50" height="50" alt="Samer's photo" title="Samer's photo">
					</a>
					<a href="personal_pages/Samer_jiha.htm" class="shado-green">Samer Jiha</a> Joined Shado <small class="gray" id="gray">(01/06/2016 at 7:28 PM)</small> <br /> <br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="">
						<img src="personal_pages/Samer.jpg" width="500" height="300" />
					</a> <br /> <br />
					<img src="happy_face/Love_gray.png" name="like17" OnClick="document.funform.like17.src='happy_face/Love.png'; document.funform.you16.type='button';" />
					<input type="hidden" name="you16" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Shadi, Sarah, yussuf, maysoon, Lina, Qwerty and 525 635 persons like this
					<div class="comments">
						<div class="first_comment_1">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font" >
								هلااااااااااااااااااااااااا<img src="happy_face/;.jpg"> !
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold fb-font" >
								أخيراااااااااااااااااااااااااااااا <img src="happy_face/happy.jpg"> .
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/lina.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Lina_Jiha.htm">
								<span >Lina Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								بابا بابا بابا! بابا بابا<img src="happy_face/O.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post"></textarea>
						</div>
						<hr color="white" />
					</div>		
				</p>
				<p name="Shadi\s_share">
					<a href="shado_pages/gaming.htm">
						<img id="personal_image" src="shado_pages/logo.jpg" width="50" height="50" alt="" title="">
					</a>
					<a href="shado_pages/gaming.htm" class="shado-green">Gaming with Shado</a> uploaded a video <small class="gray" id="gray">(01/08/2016 at 10:54 AM)</small> <br /> <br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="https://www.youtube.com/embed/SHnzMEpXmPo"">
						<iframe width="854" height="480" src="https://www.youtube.com/embed/SHnzMEpXmPo" frameborder="0" allowfullscreen></iframe>
					</a> <br /> <br />
					<img src="happy_face/Love_gray.png" name="like16" OnClick="document.funform.like16.src='happy_face/Love.png'; document.funform.you15.type='button';" />
					<input type="hidden" name="you15" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Sarah, yussuf, maysoon, Lina, Qwerty and 1 035 659 persons like this
					<div class="comments">
						<div class="first_comment_1">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								مشكور<img src="happy_face/;.jpg"> !
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold fb-font">
								شكرا على النصائح <img src="happy_face/happy.jpg"> .
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment fb-font">
							<img src="ألوان.jpg" id="personal_image" />
							<a class="shado-green" href="Shado_pages/colors.htm">
								<span >Color page</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								لايك<img src="happy_face/O.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post"></textarea>
						</div>
						<hr color="white" />
					</div>		
				</p>
				<p name="Shadi\s_post">
					<a href="personal_pages/Shadi_Jiha.htm">
						<img id="personal_image" src="personal_pages/Shadi.jpg" width="50" height="50" alt="Shadi's photo" title="Shadi's photo">
					</a>
					<a href="personal_pages/Shadi_jiha.htm" class="shado-green">Shadi Jiha</a>changed his profile background: <small class="gray" id="gray">(re-posted 01/06/2016 at 7:28 PM)</small> <br /> <br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="">
						<img src="backgrounds/Shado_main_bg.jpg" width="500" height="300" />
					</a> <br /> <br />
					<img src="happy_face/Love_gray.png" name="like15" OnClick="document.funform.like15.src='happy_face/Love.png'; document.funform.you14.type='button';" />
					<input type="hidden" name="you14" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Sarah, yussuf, maysoon, Lina, Qwerty and 1 659 person like this
					<div class="comments">
						<div class="first_comment_1">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								Nice<img src="happy_face/;.jpg"> !
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold">
								I like nature <img src="happy_face/happy.jpg"> .
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="ألوان.jpg" id="personal_image" />
							<a class="shado-green" href="Shado_pages/colors.htm">
								<span >Color page</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								Waw <img src="happy_face/O.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post"></textarea>
						</div>
						<hr color="white" />
					</div>		
				</p>
				<p name="Lina">
					<a href="personal_pages/Lina_Jiha.htm">
						<img src="personal_pages/Lina.jpg" id="personal_image" width="50" height="50" />
					</a>
					<a href="personal_pages/Lina_Jiha.htm" class="shado-green">Lina Jiha</a> changed her profile picture: <small class="gray" id="gray">(re-posted 01/06/2016 at 7:28 PM)</small><br /><br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="personal_pages/Lina.jpg" width="200" height="300" />
					<br /><br />
					<img src="happy_face/Love_gray.png" name="like14" OnClick="document.funform.like14.src='happy_face/Love.png'; document.funform.you12.type='button';" />
					<input type="hidden" name="you12" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Yussuf, Shadi, Sarah, Maysoon and 65 person like this!
					<br />
					<div class="comments">
						<div class="first_comment">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold fb-font">
								ما في أحلى منك أختي الصغيرة<img src="happy_face/O.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Yussuf.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Yussuf_Jiha.htm">
								<span >Yussuf Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								إنت كتير حلوة 
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment_1">
							<img src="personal_pages/Maysoon.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Maysoon_kar.htm">
								<span >Maysoon Kartomeh</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								شو هل الصورة الحلوة يا لينا <img src="happy_face/tree.jpg">
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post" onKeydown="whatKey()"></textarea>
						</div>
						<hr color="white" />
					</div>
				</p>
				<p name="Maysoon_posted">
					<a href="personal_pages/Maysoon_kar.htm">
						<img src="personal_pages/Maysoon.jpg" id="personal_image" width="50" height="50" />
					</a>
					<a href="personal_pages/Maysoon_kar.htm" class="shado-green">Maysoon kartomeh</a> added a new photo: <small class="gray" id="gray">(re-posted 01/06/2016 at 7:28 PM)</small> <br /><br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="personal_pages/posted_may-kar.jpg" />
					<br /><br />
					<img src="happy_face/Love_gray.png" name="like13" OnClick="document.funform.like13.src='happy_face/Love.png'; document.funform.you11.type='button';" />
					<input type="hidden" name="you11" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Yussuf, Shadi, Sarah and 186 person like this!
					<br />
					<div class="comments">
						<div class="first_comment">
							<img src="personal_pages/Lina.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Lina_Jiha.htm">
								<span >Lina Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold fb-font">
								واااااااااااااع <img src="happy_face/O.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold fb-font">
								ما في أحلى منك <img src="happy_face/O.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Yussuf.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Yussuf_Jiha.htm">
								<span >Yussuf Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								مااااااااااااااااااااااااااامااااااا
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment_1">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								كتير حلوة <img src="happy_face/heart.jpg">
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment_1">
							<img src="personal_pages/Maysoon.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Maysoon_kar.htm">
								<span >Maysoon Kartomeh</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								ما أفي أحلى منكون <img src="happy_face/heart.jpg">
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post" onKeydown="whatKey()"></textarea>
						</div>
						<hr color="white" />
					</div>
				</p>
				<p name="Sarah">
					<a href="personal_pages/Sarah_Jiha.htm">
						<img src="personal_pages/Sarah.jpg" id="personal_image" width="50" height="50" />
					</a>
					<a href="personal_pages/Sarah_Jiha.htm" class="shado-green">Sarah Jiha</a> changed her profile picture: <small class="gray" id="gray">(re-posted 01/06/2016 at 7:28 PM)</small><br /><br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="personal_pages/Sarah.jpg" width="500" height="300"/>
					<br /><br />
					<img src="happy_face/Love_gray.png" name="like12" OnClick="document.funform.like12.src='happy_face/Love.png'; document.funform.you10.type='button';" />
					<input type="hidden" name="you10" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Yussuf, Shadi and 75 person like this!
					<br />
					<div class="comments">
						<div class="first_comment">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold fb-font">
								Waw <img src="happy_face/O.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Yussuf.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Yussuf_Jiha.htm">
								<span >Yussuf Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								إنت كتير حلوة سارة
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment_1">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								شكراً يوسف, شكراً شادي <img src="happy_face/heart.jpg">
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment_1">
							<img src="personal_pages/Maysoon.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Maysoon_kar.htm">
								<span >Maysoon Kartomeh</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								شو هل الوش الحلو يا سارة <img src="happy_face/like.jpg">
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post" onKeydown="whatKey()"></textarea>
						</div>
						<hr color="white" />
					</div>
				</p>
				<p name="Yussuf">
					<a href="personal_pages/Yussuf_Jiha.htm">
						<img src="personal_pages/Yussuf.jpg" id="personal_image" width="50" height="50" />
					</a>
					<a href="personal_pages/Sarah_Jiha.htm" class="shado-green">Yussuf Jiha</a> changed his profile picture: <small class="gray" id="gray">(re-posted 01/06/2016 at 7:28 PM)</small><br /><br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="personal_pages/Yussuf.jpg" width="500" height="300"/>
					<br /><br />
					<img src="happy_face/Love_gray.png" name="like11" OnClick="document.funform.like11.src='happy_face/Love.png'; document.funform.you9.type='button';" />
					<input type="hidden" name="you9" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Sarah, Shadi and 67 person like this!
					<br />
					<div class="comments">
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold fb-font">
								كتير حلوة <img src="happy_face/happy.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								معك حق سارة كتير كتير حلوة
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment_1">
							<img src="personal_pages/Yussuf.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Yussuf_Jiha.htm">
								<span >Yussuf Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								شكراً يوسف, شكراً سارة <img src="happy_face/like.jpg">
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post" onKeydown="whatKey()"></textarea>
						</div>
						<hr color="white" />
					</div>
				</p>
				<p name="Shadi">
					<a href="personal_pages/Shadi_Jiha.htm">
						<img src="personal_pages/Shadi.jpg" id="personal_image" width="50" height="50" />
					</a>
					<a href="personal_pages/Shadi_Jiha.htm" class="shado-green">Shadi Jiha</a> changed his profile picture: <small class="gray" id="gray">(re-posted 01/06/2016 at 7:28 PM)</small><br /><br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="personal_pages/Shadi.jpg" />
					<br /><br />
					<img src="happy_face/Love_gray.png" name="like10" OnClick="document.funform.like10.src='happy_face/Love.png'; document.funform.you8.type='button';" />
					<input type="hidden" name="you8" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Sarah, Yussuf and 46 person like this!
					<br />
					<div class="comments">
						<div class="first_comment_1">
							<img src="personal_pages/qwerty.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Qwerty.htm">
								<span >Qwerty uiop</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								Beautiful <img src="happy_face/like.jpg" />
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold fb-font">
								كتير حلوة <img src="happy_face/happy.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/yussuf.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Yussuf_Jiha.htm">
								<span >Yussuf Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								معك حق سارة كتير كتير حلوة
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment_1">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								شكراً يوسف, شكراً سارة <img src="happy_face/like.jpg">
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/yussuf.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Yussuf_Jiha.htm">
								<span >Yussuf Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								انت حلو شادي كتير
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment_1">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold fb-font">
								إنت كمان كتير كتير حلو <img src="happy_face/happy.jpg">
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post" onKeydown="whatKey()"></textarea>
						</div>
						<hr color="white" />
					</div>
				</p>
				<p name="Qwerty">
					<a href="personal_pages/qwerty.htm">
						<img src="personal_pages/qwerty.jpg" id="personal_image" width="50" height="50" />
					</a>
					<a href="personal_pages/Qwerty.htm" class="shado-green">Qwerty uiop</a> changed his profile picture: <small class="gray" id="gray">(re-posted 01/06/2016 at 7:28 PM)</small><br /><br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="personal_pages/qwerty.jpg" width="300" height="250" />
					<br /><br />
					<img src="happy_face/Love_gray.png" name="like9" OnClick="document.funform.like9.src='happy_face/Love.png'; document.funform.you7.type='button';" />
					<input type="hidden" name="you7" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Sarah, Yussuf and 456 person like this!
					<br />
					<div class="comments">
						<div class="first_comment_1">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								I like page name <img src="happy_face/like.jpg">
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment_1">
							<img src="personal_pages/qwerty.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Qwerty.htm">
								<span >Qwerty uiop</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								Thank you  <img src="happy_face/happy.jpg">
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold">
								أنا كمان <img src="happy_face/happy.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/yussuf.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Yussuf_Jiha.htm">
								<span >Yussuf Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								شو يعني qwerty ?
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post"></textarea>
						</div>
						<hr color="white" />
					</div>
				</p>
				<p name="Shado">
					<a href="personal_pages/Yussuf_Jiha.htm">
						<img src="personal_pages/yussuf.jpg" id="personal_image" width="50" height="50" />
					</a>
					<a href="personal_pages/Yussuf_Jiha.htm" class="shado-green">Yussuf Jiha</a> posted: <small class="gray" id="gray">(re-posted 01/06/2016 at 7:28 PM)</small> <br /><br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
						<span class="font-i">
							شادي قريني القصّة 
							<img src="happy_face/happy.jpg" />
						</span>
					<br /><br />
					<img src="happy_face/Love_gray.png" name="like8" OnClick="document.funform.like8.src='happy_face/Love.png'; document.funform.you6.type='button';" />
					<input type="hidden" name="you6" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Sarah, Shadi and 76 person like this
					<br />
					<div class="comments">
						<div class="first_comment_1">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold font-i">
								إي طاف <img src="happy_face/happy.jpg">
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold font-i">
								وووووووه <img src="happy_face/O.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment_1">
							<img src="personal_pages/yussuf.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Yussuf_Jiha.htm">
								<span >Yussuf Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold font-i">
								شكراً شادي <img src="happy_face/O.jpg" />
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post"></textarea>
						</div>
						<hr color="white" />
					</div>
				</p>
				<p name="Shado">
					<a href="Shado_Pages/shado_page.htm">
						<img src="Shado_pages/Personal_shado.png" id="personal_image" width="50" height="50" />
					</a>
					<a href="Shado_Pages/shado_page.htm" class="shado-green">Shado</a> Changed his profile picture: <small class="gray" id="gray">(re-posted 01/06/2016 at 7:28 PM)</small> <br /><br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="Shado_Pages/shado.png" />
					<br /><br />
					<img src="happy_face/Love_gray.png" name="like7" OnClick="document.funform.like7.src='happy_face/Love.png'; document.funform.you5.type='button';" />
					<input type="hidden" name="you5" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Sarah, Yussuf, Shadi and 1 455 987 person like this
					<br />
					<div class="comments">
						<div class="first_comment_1">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								 Best site ever <img src="happy_face/like.jpg">
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold">
								 of course <img src="happy_face/happy.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment_1">
							<img src="ألوان.jpg" id="personal_image" />
							<a class="shado-green" href="Shado_Pages/colors.htm">
								<span >Color Page</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								 Thank you very very much !!!!
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/yussuf.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Yussuf_Jiha.htm">
								<span >Yussuf Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								I love this site <img src="happy_face/happy.jpg">
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="Shado_pages/background-nature.jpg" id="personal_image" />
							<a class="shado-green" href="Shado_pages/nature.htm">
								<span >Nature</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								I don't know ? <img src="happy_face/O.jpg" />
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post"></textarea>
						</div>
						<hr color="white" />
					</div>
				</p>
				<p name="nature\s_post">
					<a href="Shado_Pages/nature.htm">
						<img src="Shado_pages/background-nature.jpg" id="personal_image" width="50" height="50" />
					</a>
					<a href="Shado_Pages/nature.htm" class="shado-green">Nature</a> added a new images: <small class="gray" id="gray">(re-posted 01/06/2016 at 7:28 PM)</small><br /><br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="Shado_Pages/nature.jpg" />
					<br /><br />
					<img src="happy_face/Love_gray.png" name="like6" OnClick="document.funform.like6.src='happy_face/Love.png'; document.funform.you1.type='button';" />
					<input type="hidden" name="you1" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Sarah, Yussuf, Shadi and 120 person like this
					<br />
					<div class="comments">
						<div class="first_comment_1">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								 I love nature.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold">
								 Me too <img src="happy_face/happy.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment_1">
							<img src="ألوان.jpg" id="personal_image" />
							<a class="shado-green" href="Shado_Pages/colors.htm">
								<span >Color Page</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								 I like this new page
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/yussuf.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Yussuf_Jiha.htm">
								<span >Yussuf Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								I hope I can go there.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post"></textarea>
						</div>
						<hr color="white" />
					</div>
				</p>
				<p name="color">
					<a href="Shado_Pages/colors.htm">
						<img src="ألوان.jpg" width="50" height="50" id="personal_image" />
					</a>
					<a href="Shado_Pages/colors.htm" class="shado-green">Color page</a> added a new images:  <small class="gray" id="gray">(29 december 2013) </small> <br /><br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="Shado_Pages/color.jpg" />
					<br /><br />
					<img src="happy_face/Love_gray.png" name="like4" OnClick="document.funform.like4.src='happy_face/Love.png'; document.funform.you2.type='button';" />
					<input type="hidden" name="you2" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Yussuf, Sarah, Shadi and 1 358 person like this
					<br />
					<div class="comments">
						<div class="first_comment_1">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								 Waw <img src="happy_face/O.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold">
								 Very very beautiful <img src="happy_face/happy.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/yussuf.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Yussuf_Jiha.htm">
								<span >Yussuf Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								I like it so much <img src="happy_face/Like.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post"></textarea>
						</div>
						<hr color="white" />
					</div>
				</p>
				<p name="color">
					<a href="Shado_Pages/colors.htm">
						<img id="personal_image" src="ألوان.jpg" width="50" height="50" />
					</a>
					<a href="Shado_Pages/colors.htm" class="shado-green">Color page</a> added a new images: <small class="gray" id="gray">(29 december 2013)</small> <br /><br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="Shado_Pages/color2.jpg" />
					<br /><br />
					<img src="happy_face/Love_gray.png" name="like5" OnClick="document.funform.like5.src='happy_face/Love.png'; document.funform.you3.type='button';" />
					<input type="hidden" name="you3" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Sarah, Yussuf, Shadi and 1 358 person like this
					<br />
					<div class="comments">
						<div class="first_comment_1">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								 Waw waw waw<img src="happy_face/O.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold">
								 Very very beautiful <img src="happy_face/happy.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/yussuf.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Yussuf_Jiha.htm">
								<span >Yussuf Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								I like it so much <img src="happy_face/Like.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								 I want to know from where you get these beautiful images !
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post"></textarea>
						</div>
						<hr color="white" />
					</div>
				</p>
				<p name="Yussuf\s_posts">
					<a href="personal_pages/yussuf.jpg">
						<img id="personal_image" src="personal_pages/yussuf.jpg" width="50" height="50" alt="Yussuf photo" title="Yussuf photo">
					</a>
					<a href="personal_pages/yussuf_jiha.htm" class="shado-green">Yussuf Jiha</a> added a new pictuer: <small class="gray" id="gray">(‎June ‎13, ‎2012, ‏‎3:05:34 AM)</small> <br /> <br />
					&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="../Old Shado/فراشة حمراء.jpg">
						<img src="../Old Shado/فراشة حمراء.jpg" width="200" height="200" alt="فراشة حمراء" title="فراشة حمراء" />
					</a> <br /> <br />
					<img src="happy_face/Love_gray.png" name="like3" OnClick="document.funform.like3.src='happy_face/Love.png'; document.funform.you4.type='button';" />
					<input type="hidden" name="you4" value="You and " style="border-width: 0px; background-color: white; color: black; "/> Sarah, Shadi and 1 358 person like this
					<div class="comments">
						<div class="first_comment_1">
							<img src="personal_pages/Shadi.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Shadi_Jiha.htm">
								<span >Shadi Jiha</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								Nice<img src="happy_face/;.jpg"> !
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="personal_pages/Sarah.jpg" id="personal_image" />
							<a class="shado-green" href="personal_pages/Sarah_Jiha.htm">
								<span >Sarah Jiha</span>
							</a> 
							<span>said</span>&nbsp; &nbsp;
							<span class="bold">
								I like nature <img src="happy_face/happy.jpg"> .
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<img src="ألوان.jpg" id="personal_image" />
							<a class="shado-green" href="Shado_pages/colors.htm">
								<span >Color page</span>
							</a>
							<span>said</span> &nbsp; &nbsp;
							<span class="bold">
								Waw <img src="happy_face/O.jpg">.
							</span>
						</div>
						<hr color="white" />
						<div class="first_comment">
							<?php echo '<img class="pimage" name="'.$_SESSION["fname"].'" title="'.$_SESSION["fname"].'" src="'.$_SESSION["imglink"].'" id="personal_image">';?>
							<span ><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?></span> <br />
							<textarea name="comment" placeholder="Write a comment..." cols="30;" align="center" title="Press ENTRE to post"></textarea>
						</div>
						<hr color="white" />
					</div>		
				</p>
			</div>			
		</fieldset>
	</form>
	</body>
</html>
	