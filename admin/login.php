<?php
	session_start();
	include '../public/base.php';
	include '../controllers/autoload.php';
	unset($_SESSION['data_id']);
	if (isset($_POST['submit'])) {
		# code...
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		$login_init = new Lessons();
		$login_credentials = $login_init::adminLogger($mysqli,$username);
		$get_cred_results  = $login_credentials->fetch_array(MYSQLI_BOTH);

		$unique_code       = $get_cred_results['id'];
		$verify_id 		   = $get_cred_results['username'];
		$pass_code 		   = $get_cred_results['password'];
		if ($verify_id == '' && $pass_code == '') {
			?>
			<script>
				var $toast = $('<span>Username And Password Cannot Be Empty</span>');
				Materialize.toast($toast,3000);
			</script>
			<?php
		}

		if ($verify_id == $username && $pass_code == md5($password)) {
			# code...
			session_regenerate_id(true);
			$_SESSION['data_id'] = $unique_code;
			session_commit();
			header("Location:dashboard");
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
 				<form method="post" action="admin/login">
 					<div class="input-field col s12" id="pad-10">
 						<i class="material-icons prefix">supervisor_account</i>
 						<input type="text" class="user" name="username" id="user" required="required" />
 						<label for="user">Username</label>
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