<?php
session_start();
include("includes/connection.php");
$q=mysqli_query($connection,"select * from admin");
$a=mysqli_fetch_array($q);
extract($_REQUEST);

require_once('setting.php');

$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';

if(isset($_COOKIE['user']) && isset($_COOKIE['password']))
{
	$cu=$_COOKIE['user'];
	$cp=$_COOKIE['password'];
}
if(isset($Submit))
{
if($a['username']==$name && $a['password']==md5($password))
{
	// if($_SESSION['cap']==$cap)
	// {
	// 	if(isset($checkbox))
	// 	{
	//       setcookie("user",$name,time()+1*24*60*60);
	//       setcookie("password",$password,time()+1*24*60*60);
	//     }
	// else
	// {
	// 	echo "</br><center><strong><span style='color:red;font-family:tahoma;font-size:15px'>INVALID CAPTCHA CODE</span></center></strong>";
	// }	
	$_SESSION['wname']=$name;
	header("location:index.php");
	exit();
	}
else
	{
		echo "</br><center><strong><span style='color:red;font-family:tahoma;font-size:15px'>INVALID USERNAME OR PASSWORD</span></center></strong>";
	}
}

if(!empty($_GET['todo']))
{
	session_unset();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<link href="css/admin_login_style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>

<form action="" method="post">
<div class="container">
<div>
<div id="login-box">
<h2>Login Form</h2>
<div id="login-box-name" style="margin-top:20px;">Name:</div>
<div id="login-box-field" style="margin-top:20px;"><input type="text" name="name" class="form-login" value="" size="30" maxlength="2048"></div>
<div id="login-box-name"><p>Password:</p></div>
<div id="login-box-field">
<p> <input name="password" type="password" class="form-login" value="" size="30" maxlength="2048"></p>
</div>

<!-- <div id="login-box-name"><p>Text Here:</p></div>
<div id="login-box-field">
<p><img src="user_capt.php" border="0" /></p>
  <p>
    <input name="cap" type="text" class="form-login"  size="30" maxlength="2048">
  </p>
  
</div> -->
<div style="width: 40%;float: left; padding: 0 0 0 61px; display: inline;"> 
	<label><input name="check" type="checkbox" value="" /></label>
	<span style= "margin-right: 28px;float: right;display: inline;">Remember Me</span></div>
	  <a style="color:white;margin-right: 28px;float: right;display: inline;" href="<?= $login_url ?>">Login with Google</a>


<div style="     width: 40%;
    float: left;
    margin-left: 66px;
    margin-top: 6px;">
  <label>
  <input type="hidden" name="Submit" value="Submit" />
  </label>
  <input type="image" src="images/login-btn.png" name="Submit" value="Submit" /></div>
</div>
</div>
</div>
</form>


<iframe src="about:blank" frameborder="0" id="FirebugUI" style="border: 0px; visibility: visible; z-index: 2147483647; position: fixed; width: 100%; left: 0px; bottom: 0px; height: 300px; display: none;"></iframe></body>
</html>
