<?php
 	include '../controllers/SessionController.php';
	include '../controllers/autoload.php';
	$user_details = new Lessons();
	$u_details_little = $user_details::getUserDetails($mysqli,$session_id);
	$u_detail_data    = $u_details_little->fetch_array(MYSQLI_BOTH);

	$user_fullname    = $u_detail_data['first_name']. " ". $u_detail_data['last_name'];
	$user_image       = $u_detail_data['picture'];
	include '../public/user_navbar.php';
 ?>
 <div class="menus">
 	<div class="row">
 		<div class="col s12 m10 l10 offset-m1 offset-l1">
 			<div class="col s12 m3 l3 animated fadeIn">
	 			<a href="road-signs">
	 				<div class="card-panel col s12 m12 l12 waves-effect waves-ripple waves-block z-depth-2" id="pd-0">
		 				<div class="image-header">
		 					<img src="public/images/sign.svg" class="responsive-img"/>
		 				</div>
		 				<span class="caption center-align">
		 					Road Signs
		 				</span>
		 			</div>
	 			</a>
	 		</div>
	 		<div class="col s12 m3 l3 animated fadeIn">
	 			<a href="moto-law">
	 				<div class="card-panel col s12 m12 l12 waves-effect waves-ripple waves-block z-depth-2" id="pd-0">
		 				<div class="image-header">
		 					<img src="public/images/package.svg" class="responsive-img"/>
		 				</div>
		 				<span class="caption center-align">
		 					Moto Law
		 				</span>
		 			</div>
	 			</a>
	 		</div>
 			<div class="col s12 m3 l3 animated fadeIn">
	 			<a href="user/materials">
	 				<div class="card-panel col s12 m12 l12 waves-effect waves-ripple waves-block z-depth-2" id="pd-0">
		 				<div class="image-header">
		 					<img src="public/images/dashboard.svg" class="responsive-img"/>
		 				</div>
		 				<span class="caption center-align">
		 					Vehicle Knowledge
		 				</span>
		 			</div>
	 			</a>
	 		</div>
	 		<div class="col s12 m3 l3 animated fadeIn">
	 			<a href="safe-driving">
	 				<div class="card-panel col s12 m12 l12 waves-effect waves-ripple waves-block z-depth-2" id="pd-0">
		 				<div class="image-header">
		 					<img src="public/images/steering-wheel.svg" class="responsive-img"/>
		 				</div>
		 				<span class="caption center-align">
		 					Safe Driving
		 				</span>
		 			</div>
	 			</a>
	 		</div>
	 		<div class="col s12 m3 l3 animated fadeIn">
	 			<a href="toolkit/first-aid">
	 				<div class="card-panel col s12 m12 l12 waves-effect waves-ripple waves-block z-depth-2" id="pd-0">
		 				<div class="image-header">
		 					<img src="public/images/first-aid-kit.svg" class="responsive-img"/>
		 				</div>
		 				<span class="caption center-align">
		 					First Aid Toolkit
		 				</span>
		 			</div>
	 			</a>
	 		</div>
	 		<div class="col s12 m3 l3 animated fadeIn">
	 			<a href="license/exams">
	 				<div class="card-panel col s12 m12 l12 waves-effect waves-ripple waves-block z-depth-2" id="pd-0">
		 				<div class="image-header">
		 					<img src="public/images/books.svg" class="responsive-img"/>
		 				</div>
		 				<span class="caption center-align">
		 					License Exams
		 				</span>
		 			</div>
	 			</a>
	 		</div>
 		</div>
 	</div>
 </div>