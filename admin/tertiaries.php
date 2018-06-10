<?php
include '../controllers/SessAdminController.php';
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
		<div class="col s10 m8 l8 offset-m1 offset-l1" id="lesson_container">
		<?php
			$get_schools = $overallTopics->getSchoolList($mysqli);
			$get_count   = $get_schools->num_rows;
			if ($get_count > 0) {
				while ($get_school_details = $get_schools->fetch_array(MYSQLI_BOTH)) {
						$school_name = $get_school_details['name'];
					?>
					<div class="card-panel">
						<span class="school_image">
							<img src="public/images/basketball.svg" class="responsive-img"/>
						</span>
						<span class="school_title light-blue-text text-darken-3" style="font-weight: 500;font-size: 16px;text-transform: capitalize;margin-left: 20px;margin-top: 5px;position: absolute;"><?php echo "$school_name"; ?></span>
					</div>
					<?php
				}
			}
			else
			{
				?>
				<div class="card-panelm bg animated fadeIn">
				<img src="public/images/university.svg" alt="University" class="responsive-img help"/>
			</div>
			<h5 class="center-align grey-text text-darken-3">Tertiary Schools List Empty</h5>
			<h5 class="center-align grey-text text-darken-3 small-text">Add A School</h5>
				<?php
			}
		 ?>
		</div>
 	</div>
 </div>



