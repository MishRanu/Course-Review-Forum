<?php
  include ('include_fns.php');
  session_start();
  if (!isset($_SESSION['valid_user']))
  header('Location: /website/website/login.php');
  
  $username=$_SESSION['valid_user'];

  // check if we have created our session variable
  if(!isset($_SESSION['expanded']))  {
    $_SESSION['expanded'] = array();
  }

  // check if an expand button was pressed
  // expand might equal 'all' or a postid or not be set
  if(isset($_GET['expand']))   {
    if($_GET['expand'] == 'all') {
      expand_all($_SESSION['expanded']);
    } else {
      $_SESSION['expanded'][$_GET['expand']] = true;
    }
  }

  // check if a collapse button was pressed
  // collapse might equal all or a postid or not be set
  if(isset($_GET['collapse'])) {
    if($_GET['collapse']=='all') {
      $_SESSION['expanded'] = array();
    } else {
      unset($_SESSION['expanded'][$_GET['collapse']]);
    }
  }

  do_html_header('Discussion Posts');
  ?>
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
	background: rgb(255,255,255)  url(/website/_images/open.png) no-repeat 8px 7px;
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
<div id="login">
<p id="open">Hi User!</p>

  <form method="post" action="member.php">
  <table>
   <tr>
     <td colspan="2"><a href="/website/website/logout.php">Logout?</a></td>
   </tr>
   <tr>
     <td colspan="2"><a href="/website/website/change_passwd_form.php">Change your Password?</a></td>
   </tr>
 </table></form>

</div>
</body>
</html>
<?php

  display_index_toolbar();

  // display the tree view of conversations
  display_tree($_SESSION['expanded']);

  do_html_footer();
?>
