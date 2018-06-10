<?php
/*
	Written by Lord Acheampong Offei
	https://github.com/LORD-KAY
*/
ini_set( 'error_reporting', E_ALL);
ini_set( 'display_errors', true );
//Getting the value or the id 
$get_topic_id = $_GET['s'];
$get_lesson_id = $_GET['r'];
$get_menu_id   = $_GET['t'];

require_once 'controllers/autoload.php';
include 'public/content_navbar.php';
 ?>
 <div class="read-lessons">
 	<div class="row">
 		<div class="container animated fadeIn">
 		<?php 
 		$details = new Lessons();
 		$query_data = $details->getLessonNotes($mysqli,$get_topic_id,$get_lesson_id,$get_menu_id);
 		$query_count = $query_data->num_rows;
 		if ($query_count > 0) {
 			while ($results = $query_data->fetch_array(MYSQLI_BOTH)) 
 			{
 				$data_content = $results['content'];
 			
 		 ?>
	 		<!-- <div class="col s12 m3 l3">
	 			<div class="card-panel">
	 				<img src="public/images/battery.svg" class="responsive-img" id="image_depict">
	 			</div>
	 		</div> -->
	 		<div class="col s12 m12 l12">
	 			<div class="card-panel">
	 				<?php echo "$data_content"; ?>
	 			</div>
	 		</div>
	 	<?php
	 		}
	 	}
	 	else
 		{
 		?>
 			<div class="card-panelm bg">
					<img src="public/images/open-book.svg" alt="Lesson Notes" class="responsive-img help"/>
				</div>
				<h5 class="center-align grey-text text-darken-3">No Lessons Notes Available</h5>
				<h5 class="center-align grey-text text-darken-3 small-text">Check Other Topics Out</h5>
 			<?php
 		}
 		?>
	 	</div>
 	</div>
 </div>


