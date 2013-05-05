<?php

/**********************************************************************
* @author     Bryan Chapman <chapware@gmail.com> 
* @company    Chapware Technologies <http://bryan.pcsclassifieds.com/>
* @version    1.1.3  (c)2006-2013 Chapware Technologies
**********************************************************************/

  session_start();
  
$referscript = $_SERVER['HTTP_REFERER'];

/******************** Copyright Info ********************/
define(" "," ");
define("COMPANY","Chapware Technologies");
define("AUTHOR","Bryan Chapman");
define("EMAIL","chapware@gmail.com");
define("WEB_SITE","http://bryan.pcsclassifieds.com/");
define("PCS_SITE","http://pcsclassifieds.com/");
define("VERSION","v1.46");
define("APP_NAME","auth.php");
define("COPYRIGHT",DATE('Y'));
define(" "," ");
/******************End Copyright Info ********************/

	// error_reporting(E_ERROR | E_PARSE);	
	
	$admin = "63a9f0ea7bb98050796b649e85481845";
	$admin_pw = "c364121314fa8b5a1adeec3dc632ca55";
	
if (isset($_POST['user']) && isset($_POST['pass'])) {

	$user = $_POST['user'];
	$username = md5($user);
	$pass = $_POST['pass'];
	$password = md5($pass);
	if (($username == $admin) && ($password ==$admin_pw)) {
		$_SESSION['admin'] = $username;
		$_SESSION['admin_pw'] = $password;
	}
	header('Location: ' . $referscript . '');
	session_set($_SESSION['CHAPWARE_SESSID']);
} elseif ((isset($_SESSION['admin']) && isset($_SESSION['admin_pw']) &&$_SESSION['admin'] == $admin && $_SESSION['admin_pw'] == $admin_pw ) || (getenv("REMOTE_ADDR")=="")) {

} else {
	
	?>
	<html>
	<head>
	<title>Chapware Login</title>

		<LINK REL=STYLESHEET HREF="http://pcsclassifieds.com/css/blue.css" TYPE="text/css">
	</head>

	<body>
	<center>
	<br><br>
	
	<fieldset style="width:30%;"><legend><b>Server Login</b></legend>
	<form action="<?php echo $referscript; ?>" method="post">
	
	<table>
	<tr><td>Username</td><td><input type="text" name="user"></td></tr>
	<tr><td>Password</td><td><input type="password" name="pass"></td></tr>
	<tr><td></td><td><input type="submit" value="Log in" id="submit"></td>
	</tr></table>
	</form>
	</fieldset>
	</center>
	</body>
	</html>
	<?php 
	exit();
}




?>