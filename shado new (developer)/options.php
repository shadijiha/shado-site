<?php
	session_start();
	require_once('phpfiles/ShadoConfig.php');
	//phpinfo();

	@$fname="";
	@$lname="";
	@$email="";
	@$day="";
	@$month="";
	@$year="";
	@$username="";
	@$password="";
	@$smail="";
	@$question="";
	@$answer="";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit you personal page | Shado</title>
<link rel="stylesheet" type="text/css" href="CSS Scripts/constitution.css">
<link rel="icon" type="image/ico" href="Shado.ico">
<style type="text/css">
input[type=text]	{width: 266px;
			 border-radius: 5px;
 		    	 height: 30px;
			 border-width: 1px;
			 padding: 3px;}
input[type=password]	{width: 266px;
			 border-radius: 5px;
 		    	 height: 30px;
			 border-width: 1px;
			 padding: 3px;}
</style>
<script language="JavaScript">
<!--
var dis = document.getElementsByClassName("allow_edit");

function show()	{
	
	for (let i = 0; i < dis.length; i++)	{
		dis[i].disabled = "";
	};
};

function hide()	{
	
	for (let j = 0; j < dis.length; j++)	{
		dis[j].disabled = "disabled";
	};
};

console.log(dis.length);
//-->
</script>
	</head>

	<body vlink="#00ccff" style="background-image: url('backgrounds/hotairballoons9.jpg')" class="arial">

		
		<div class="account">
		<fieldset>
			<legend>Information</legend><br />
			<form name="options" method="post">
			<table>
				<tr>
					<td>
						<span rol="alert" name="">Full Name</span>
					</td>
					<td>
						<input class="allow_edit" type="text" placeholder="Frist name" name="fname" value="<?php echo $_SESSION['fname'] ?>" disabled="disabled" style="width: 133px;"/>
						<input class="allow_edit" type="text" placeholder="Last name" name="lname" value="<?php echo $_SESSION['lname'] ?>" disabled="disabled" style="width: 133px;"/>
					</td>
				</tr>
				<tr>
					<td>
						<span rol="alert" name="">E-mail address</span>
					</td>
					<td>
						<input type="text" placeholder="E-mail" value="<?php echo $_SESSION['email'] ?>" disabled="disabled" name="email"/>
					</td>
				</tr>
				<tr>
					<td>
						<span rol="alert" name="">Your date of birth</span>
					</td>
					<td>
						<select class="allow_edit" name="day" disabled="disabled">
							<option value="<?php echo $_SESSION['day'] ?>"><?php echo $_SESSION['day'] ?></option>
							<option>___</option>
							<option value="none"></option>	
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
						<select class="allow_edit" name="month" disabled="disabled">
							<option value="<?php echo $_SESSION['month'] ?>"><?php echo $_SESSION['month'] ?></option>
							<option value="">__________</option>
							<option value="none"></option>	
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="Septemper">Septemper</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select>
						<select class="allow_edit" name="year" disabled="disabled">
							<option value="<?php echo $_SESSION['year'] ?>"><?php echo $_SESSION['year'] ?></option>
							<option value="">____</option>
										<option value="none"></option>	
							<option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
							<option value="2006">2006</option>
							<option value="2005">2005</option>
							<option value="2004">2004</option>
							<option value="2003">2003</option>
							<option value="2002">2002</option>
							<option value="2001">2001</option>
							<option value="2000">2000</option>
							<option value="1999">1999</option>
							<option value="1998">1998</option>
							<option value="1997">1997</option>
							<option value="1996">1996</option>
							<option value="1995">1995</option>
							<option value="1994">1994</option>
							<option value="1993">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>
							<option value="1990">1990</option>
							<option value="1989">1989</option>
							<option value="1988">1988</option>
							<option value="1987">1987</option>
							<option value="1986">1986</option>
							<option value="1985">1985</option>
							<option value="1984">1984</option>
							<option value="1983">1983</option>
							<option value="1982">1982</option>
							<option value="1981">1981</option>
							<option value="1980">1980</option>
							<option value="1979">1979</option>
							<option value="1978">1978</option>
							<option value="1977">1977</option>
							<option value="1976">1976</option>
							<option value="1975">1975</option>
							<option value="1974">1974</option>
							<option value="1973">1973</option>
							<option value="1972">1972</option>
							<option value="1971">1971</option>
							<option value="1970">1970</option>
							<option value="other">other</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<span rol="alert" name="">Your username</span>
					</td>
					<td>
						<input class="allow_edit" type="text" placeholder="Username" value="<?php echo $_SESSION['username'] ?>" disabled="disabled" name="username"/>
					</td>
				</tr>
				<tr>
					<td>
						<span rol="alert" name="">Your password</span>
					</td>
					<td>
						<input class="allow_edit" type="password" placeholder="Password" name="password" value="<?php echo $_SESSION['password'] ?>" disabled="disabled" />
						<img src="visible.png" OnClick="document.options.pass.type='text'; document.options.pass.disabled='';"/>
					</td>
				</tr>
				<tr>
					<td>
						<span rol="alert" name="">Your shado e-mail</span>
					</td>
					<td>
						<input class="allow_edit" type="text" placeholder="Shado E-mail" value="<?php echo $_SESSION['smail'] ?>" disabled="disabled" name="smail" />
					</td>
				</tr>
				<tr>
					<td>
						<span rol="alert" name="">Your scurity Question</span>
					</td>
					<td>
						<select class="allow_edit" name="question" disabled="disabled">
							<option value="<?php echo $_SESSION['question'] ?>"><?php echo $_SESSION['question'] ?></option>
							<option value="">_____________________________</option>
							<option value=""></option>
							<option value="What is your best friend?">Who is your best friend?</option>
							<option value="What is your Favourite food?">What is your Favourite food?</option>
							<option value="What is your Favourite color?">What is your Favourite color?</option>
							<option value="What is your color of your Car?">What is your color of your Car?</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<span rol="alert" name="">Your answer</span>
					</td>
					<td>
						<input class="allow_edit" type="text" placeholder="Answer" value="<?php echo $_SESSION['answer'] ?>" disabled="disabled" name="answer"/>
					</td>
				</tr>
			</table>
			<br />
			<br />
			
				<input type="submit" name="submit_btn" value="Finish editing" class="google-input_green-shado_button" Onclick="hide();" />
				<input type="button" name="edit" value="Edit" class="google-input_green-shado_button" OnClick="show();" />
			</form>		
		</fieldset>

		<br />
		<br />
		<fieldset>
			<legend>Customize</legend>
			Choose your Shado color and style:
			<br />
			<table style="text-align: center;">
				<tr>
					<td>
						<input type="radio" name="customize" checked="checked" />
					</td>
					<td>
						<img src="Customize/Shadi_image_customize_green.jpg" />
					</td>
					<td>
						<input type="radio" name="customize" disabled="disabled" />
					</td>
					<td>
						<img src="Customize/Shadi_image_customize_blue.jpg" />
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="customize" disabled="disabled" />
					</td>
					<td>
						<img src="Customize/Shadi_image_customize_pink.jpg" />
					</td>
					<td>
						<input type="radio" name="customize" disabled="disabled" />
					</td>
					<td>
						<img src="Customize/Shadi_image_customize_fb.jpg" />
					</td>
					
				</tr>
			</table>
		</fieldset>
		<br />
		<br />
		<?php
				
			if(isset($_POST['submit_btn']))	{
				
						@$fname=$_POST['fname'];
						@$lname=$_POST['lname'];
						@$email=$_POST['email'];
						@$day=$_POST['day'];
						@$month=$_POST['month'];
						@$year=$_POST['year'];
						@$username=$_POST['username'];
						@$password=$_POST['password'];
						@$smail=$_POST['smail'];
						@$question=$_POST['question'];
						@$answer=$_POST['answer'];
						@$id=$_POST['id'];
						
						$query = "update shadotable
									SET username='$username',password='$password',question='$question',answer='$answer',smail='$smail',day='$day',month='$month',year='$year',fname='$fname',lname='$lname'
									WHERE email='$email'";
									
								$query_run = mysqli_query($con,$query);
						
									if($query_run)
									{
										echo '<script type="text/javascript">alert("Update successful")</script>';
									}
									else{
										echo '<script type="text/javascript">alert("Error")</script>';
									}
			};
		?>
	</body>
</html>