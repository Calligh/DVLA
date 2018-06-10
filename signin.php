<?php
 ini_set( 'error_reporting', E_ALL);
ini_set( 'display_errors', true );
	include 'public/navbar.php';
	include 'controllers/autoload.php';
	if (isset($_POST['submit'])) {
		# code...
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		
		$login_init = new Lessons();
		$login_credentials = $login_init::userLogger($mysqli,$email);
		$get_cred_results  = $login_credentials->fetch_array(MYSQLI_BOTH);
		
		$verify_id 		   = $get_cred_results['email'];
		$pass_code 		   = $get_cred_results['password'];
		if ($verify_id == '' && $pass_code == '') {
			?>
			<script>
				var $toast = $('<span>Email And Password Cannot Be Empty</span>');
				Materialize.toast($toast,3000);
			</script>
			<?php
		}

		if ($verify_id == $email && $pass_code == md5($password)) {
			# code...
			session_start();
			$_SESSION['data_id'] = $verify_id;
			session_commit();
			if (isset($_SESSION['data_id'])) {
				header("Location:user/items");
			}
		}else{
			?>
			<script>
				var $toast = $('<span>Username or Password may not be correct</span>');
				Materialize.toast($toast,9000);
			</script>
			<?php
		}

	}
 ?>
<div class="login">
 	<div class="row">
 		<div class="container" id="cont_body123">
 			<div class="col s12 m8 l8 offset-m2 offset-l2 card-panel z-depth-3" style="top: 150px;position: relative;padding-bottom: 20px;padding-top: 10px;">
 				<form method="post" action="signin">
 					<div class="input-field col s12" id="pad-10">
 						<i class="material-icons prefix">supervisor_account</i>
 						<input type="text" class="user" name="email" id="user" required="required" />
 						<label for="user">Email Address</label>
 					</div>
 					<div class="input-field col s12" id="pad-10">
 						<i class="material-icons prefix">lock</i>
 						<input type="password" class="password" name="password" id="password" required="required" />
 						<label for="password">Passcode</label>
 					</div>
 					<div class="input-field col s12" id="name_check">
 						<input type="checkbox" name="remember_me" id="remember_me"/>
 						<label for="remember_me">Remember Me</label>
 					</div>
 					<div class="input-field col s12" id="pad-10">
 						<button type="submit" name="submit" class="btn light-blue waves-effect waves-light darken-4" style="text-transform: capitalize;width: 100%;">Log In</button>
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>
 <div class="overlay"></div>