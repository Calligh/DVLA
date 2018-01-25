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
		<div class="col s9 m10 l10" id="lesson_container">
			<?php 
			$query_data    = $overallTopics::getTopics($mysqli);
			$query_count   = $query_data->num_rows;
			if ($query_count > 0) {
				# code...
				while ($row = $query_data->fetch_array(MYSQLI_BOTH)) 
				{
					$id    = $row['id'];
					$title = $_resizeWords::truncatFunction($row['title'],19,"...");
					$image = $row['image'];
		 		 ?>
	 		<div class="col s12 m3 l3 animated fadeIn">
	 			<a href="admin/collections/<?php echo "$id"; ?>">
	 				<div class="card-panel col s12 m12 l12 waves-effect waves-ripple waves-block z-depth-2" id="pd-0">
		 				<div class="image-header">
		 					<img src="<?php echo "$image"; ?>" class="responsive-img"/>
		 				</div>
		 				<span class="caption center-align">
		 					<?php echo "$title"; ?>
		 				</span>
		 			</div>
	 			</a>
	 		</div>
	 			<?php 
	 			}
	 		}else
	 		{
	 			?>
	 			<div class="card-panelm bg animated fadeIn">
						<img src="public/images/bookshelf.svg" alt="Help Desk" class="responsive-img help"/>
					</div>
					<h5 class="center-align grey-text text-darken-3">No Lessons Available</h5>
					<h5 class="center-align grey-text text-darken-3 small-text">Add Lesson Now</h5>
	 			<?php
	 		}
			?>
			</div>
 	
	<!-- Adding lecturers  data to the database -->
		<div id="addLessBtn" class="fixed-action-btn animated" style="right: 70px;bottom: 35px;">
		    <a  href="admin/category/add" id="addLesson" class="btn-floating btn-large light-blue accent-3 waves-effect waves-ripple">
		      <i class="large material-icons tooltipped" data-tooltip="Add Lesson" data-position="left" data-delay="5">add</i>
		    </a>
		</div>
 	</div>
 </div>


