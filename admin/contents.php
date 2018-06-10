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
			<ul class="collapsible" data-collapsible="accordion">
			<?php
				$get_content = $overallTopics->getContent($mysqli);
				$get_count_content = $get_content->num_rows;
				if ($get_count_content > 0) {
				 	while ($get_content_data = $get_content->fetch_array(MYSQLI_BOTH)) {
				 		$get_lesson_fk = $get_content_data['lessons'];
				 		$get_lesson_topics_fk = $get_content_data['lesson_topics'];
				 		$get_content_content  = $get_content_data['content'];

				 		$get_title  = $overallTopics->getContentPerTopic($mysqli,$get_lesson_topics_fk);
				 		while ($get_title_content = $get_title->fetch_array(MYSQLI_BOTH)) {
				 			   $get_cat_topic = $get_title_content['topics'];
				 		?>
				 		<li>
				      <div class="collapsible-header"><i class="material-icons">filter_drama</i><?php echo "$get_cat_topic"; ?></div>
				      <div class="collapsible-body"><span><?php echo "$get_content_content"; ?></span></div>
				    </li>
				 		<?php
				 		}
				 	}
				 }
				 else{
				 	?>
				 	<div class="card-panelm bg animated fadeIn">
					<img src="public/images/open-book.svg" alt="Help Desk" class="responsive-img help"/>
				</div>
				<h5 class="center-align grey-text text-darken-3">Contents For Topics Is Empty</h5>
				<h5 class="center-align grey-text text-darken-3 small-text">Add Content To Topics</h5>
				 	<?php
				 }
			 ?>
			</ul>

		</div>
		<div id="addLessBtn" class="fixed-action-btn animated" style="right: 70px;bottom: 35px;">
	    <a  href="admin/content/add" id="addLesson" class="btn-floating btn-large light-blue accent-3 waves-effect waves-ripple">
	      <i class="large material-icons tooltipped" data-tooltip="Add Notes" data-position="left" data-delay="5">add</i>
	    </a>
	</div>

 </div>
