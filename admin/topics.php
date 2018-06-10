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
		<div class="col s10 m10 l10" id="lesson_container">
		<?php
			$lesson_topics = $overallTopics->getAllLessonTopics($mysqli);
			$lesson_count   = $lesson_topics->num_rows;
			if ($lesson_count > 0) {
			 	while ($lesson_data = $lesson_topics->fetch_array(MYSQLI_BOTH)) {
			 			$lesson_fk = $lesson_data['lessons'];
			 			$topic_title = $lesson_data['topics'];

			 			$lesson_name  = $overallTopics->getCatForTopic($mysqli,$lesson_fk);
			 			while ($category_data = $lesson_name->fetch_array(MYSQLI_BOTH)) {
			 				$lesson_name_data = $category_data['title'];
			 		?>
			 	<div class="card-panel">
			 		<span class="chip" id="category"><?php echo "$lesson_name_data"; ?></span>
					<span class="topic_title light-blue-text text-darken-3" style="font-weight: 500;font-size: 16px;text-transform: capitalize;margin-left: 10px;"><?php echo "$topic_title"; ?></span>
				</div>
			 		<?php
			 		}
			 	}
			 }
			 else{
			 	?>
			 	<div class="card-panelm bg animated fadeIn">
				<img src="public/images/bookshelf.svg" alt="Help Desk" class="responsive-img help"/>
			</div>
			<h5 class="center-align grey-text text-darken-3">Topic List Is Empty</h5>
			<h5 class="center-align grey-text text-darken-3 small-text">Add A Topic </h5>
			 	<?php
			 } 
		 ?>
		</div>
 			<div id="addLessBtn" class="fixed-action-btn animated" style="right: 70px;bottom: 35px;">
		    <a  href="admin/topic/add" id="addLesson" class="btn-floating btn-large light-blue accent-3 waves-effect waves-ripple">
		      <i class="large material-icons tooltipped" data-tooltip="Add Lesson" data-position="left" data-delay="5">add</i>
		    </a>
		</div>
 	</div>
 </div>



