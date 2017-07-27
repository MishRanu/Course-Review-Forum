<?php
 require_once('bookmark_fns.php');
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>E-Course Review Web-Forum</title>
<link href="../_css/site.css" rel="stylesheet">
<script src="../_js/jquery-1.7.2.min.js"></script>

<style>

#login {
	width: 350px;
	position: absolute;
	left: 860px;
	top: 6px;
	z-index: 100;
}

#open {
	margin: 0;
	cursor: pointer;
	background: rgb(255,255,255)  url(../_images/open.png) no-repeat 8px 7px;
	color: rgb(58,80,123);
	padding: 5px 0 2px 30px;
}

#login .close {
	background-image: url(../_images/close.png);
	background-color: rgb(110,138,195);	
}

#open:hover {
	color: rgb(0,0,0);
	background-color: rgb(110,138,195);	
}

#login form {
	padding: 10px 10px 10px 10px;
	display: none;	
	background-color: rgb(110,138,195);
}
#login label {
	display: inline-block;
	width: 100px;
	text-align:right;
	margin: 0 15px 0 0;
	color: rgb(58,80,123);
}
#login input {
	font-size: 14px;	
}
#login #button {
	margin-left: 50px;	

}
</style>
<script src="../_js/jquery-1.7.2.min.js"></script>
<script src="../_js/jquery.validate.min.js"></script>
<script>

$(document).ready(function() {
  $('#open').click(function() {
	 $('#login form').slideToggle(300);
	 $(this).toggleClass('close'); 
  }); // end click
}); // end ready


</script>
</head>
<body>
<div class="wrapper">
	<div class="header">
		<p class="logo">Courses.GARUNA </i>  <i class="mm">E-Course<br>
			Review<br>
			Web-Forum</i></p>
	</div>

<div id="login">
<p id="open">Login</p>

  <form method="post" action="member.php">
  <table>
   
     <td><label for="username"> Username:</label></td>
     <td><input type="text" name="username"/></td></tr>
   <tr>
     <td><label for="username">Password:</label></td>
     <td><input type="password" name="passwd"/></td></tr>
   <tr>
     <td colspan="2" align="center">
     <input type="submit" value="Log in"/></td></tr>
   <tr>
     <td colspan="2"><a href="forgot_form.php">Forgot your password?</a></td>
   </tr>
 </table></form>

</div>

	<div class="content">
	<div class="main">
	<h1>Signup</h1>
		<form action="register_new.php" method="post" name="signup" id="signup">
			<div>
				<label for="name" class="label">Username </label>
				<input type="text" name="username" size="16" maxlength="16"/>
			</div>
			<div>
				<label for="email" class="label">E-mail Address</label>
				<input type="text" name="email" size="30" maxlength="100"/>
			</div>
			<div>
				<label for="password" class="label">Password</label>
				<input type="password" name="passwd" size="16" maxlength="16"/>
			</div>
			<div>
				<label for="passwd2" class="label">Confirm Password</label>
				<input type="password" name="passwd2" size="16" maxlength="16"/>
			</div>
			<div><span class="label">Areas of Interest</span>
				<input name="interest" type="checkbox" id="cse" value="cse" class="required" title="Please check at least 1 hobby.">
				<label for="cse">Computers</label>
				<input name="hobby" type="checkbox" id="ee" value="ee">
				<label for="pickle">Electrical/Electronics</label>
				<input name="hobby" type="checkbox" id="me" value="me">
				<label for="walnut">Mechanical Systems</label>
			</div>
			<div>
				<label for="dob" class="label">Date of birth</label>
				<input name="dob" type="text" id="dob" class="date" title="Please type your date of birth using this format: 01/19/2000">
			</div>
	
			<div>
				<label for="comments" class="label">Comments</label>
				<textarea name="comments" cols="15" rows="5" id="comments"></textarea>
			</div>
			<div class="labelBlock">Would you like to receive annoying e-mail from
				us? </div>
			<div class="indent">
				<input  type="radio" name="spam" id="yes" value="yes" class="required" title="Please select an option">
				<label for="yes">Yes</label>
				<input type="radio" name="spam" id="no" value="no">
				<label for="no">No</label>
	
			</div>
			<div>
				<input type="submit" name="submit" id="submit" value="Submit">
			</div>
		</form>
		</div>
	</div>
	<div class="footer">
		<p>Courses.Garuna, an E-Course Review Web-Forum by <a href="https://www.facebook.com/anuragmisra1994">Anurag Misra</a>. Published by <a href="http://garuna.co.in/">Garuna DevCorp</a>.</p>
	</div>
</div>
</body>
</html>

 
