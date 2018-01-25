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
			<div class="col s12 l12 m12" id="main-body">
                <div class="col s4 m4 l4">
                    <div class="card-panel col s12 m12 l12">
                        <div class="user-up-panel">

                        </div>
                        <div class="user-image"></div>
                        <div class="user-down-panel"></div>
                    </div>
                </div>
            </div>
			<!-- <div class="card-panelm bg animated fadeIn" style="margin-top: 10px;">
				<img src="public/images/boy.svg" alt="Help Desk" class="responsive-img help"/>
			</div>
			<h5 class="center-align grey-text text-darken-3">Page Under Construction</h5>
			<h5 class="center-align grey-text text-darken-3 small-text"><a href="admin/dashboard" class="waves-effect waves-ripple waves-circle"><i class="material-icons">arrow_back</i></a> Go To Dashboard </h5> -->
		</div>
 	</div>
 </div>


