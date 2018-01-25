<?php
session_start();
	include '../controllers/autoload.php';
	include '../public/admin_navbar.php';
	$session_id = $_SESSION['data_id']; 

	//Instantiating the word concatenation
	$_resizeWords  = new WordTruncat();
	$overallTopics = new Lessons();
 ?>
 <div class="category">
 	<div class="row">
 		<div class="col s2 m2 l2">
 			<?php  include '../public/admin_sidenav.php'; ?>
 		</div>
		<div class="col s10 m10 l10" id="lesson_container">
			<div class="card-panelm bg animated fadeIn" style="margin-top: 20px;">
				<img src="public/images/pdf.svg" alt="Pdf Reports" class="responsive-img help"/>
			</div>
			<h5 class="center-align grey-text text-darken-3">Page Under Construction</h5>
			<h5 class="center-align grey-text text-darken-3 small-text"><a href="admin/dashboard" class="waves-effect waves-ripple waves-circle"><i class="material-icons">arrow_back</i></a> Go To Dashboard </h5>
		</div>
 		
 	</div>
 </div>



