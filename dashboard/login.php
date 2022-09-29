<?php
session_start();
require_once("api/class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
	$login->redirect('index');
}

if(isset($_POST['btn-login']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);
		
	if($login->doLogin($uname,$umail,$upass))
	{
		$login->redirect('index');
	}
	else
	{
		$error = "Invalid Details Please Try Again! !";
	}	
}
?>
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashbord</title>
	
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.addons.css" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style.css.map">
    <link rel="stylesheet" href="assets/css/styles.css.map">
	<link rel="stylesheet" href="assets/css/bubu.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
  <style>img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;}</style>
	<div class="wrapper shadow">
		<div class="container">
			<img src="assets/images/favicon.ico" alt="logo" title="logo" style="height:35px;" />
			<form method="POST">
							<div id="error">
                                <?php
			                        if(isset($error))
			                            {
				                ?>
                                <div class="alert alert-danger">
                                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> 
                                </div>
                                <?php } ?>
                            </div>
				<input type="text" value="" name="txt_uname_email"  required placeholder="">
				<input type="password" name="txt_password" value=""  required placeholder="">
				<button type="submit" name="btn-login"  id="login-button shadow">Login</button>
				<br><br>
				<div class="link">
                    <a href="#">Forgot Password?</a>
                	<a href="#">F.A.Q</a>
                    <a href="obs-login">OBS</a>
                    <a href="#">Need Help?</a>
                  </div>
				</div>
			</form>

	<ul class="bg-bubbles shadow">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
				
	</div>











   
    <script src="assets/vendors/js/core.js"></script>
    <script src="assets/vendors/js/vendor.addons.js"></script>
    <script src="assets/js/template.js"></script>
	<script src="assets/js/bubu.js"></script>
  </body>
</html>