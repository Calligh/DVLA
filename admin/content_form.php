<?php
session_start();
ini_set( 'error_reporting', E_ALL);
ini_set( 'display_errors', true );
	include '../controllers/autoload.php';
	include '../public/admin_navbar.php';
	$session_id = $_SESSION['data_id'];
	//Instantiating the word concatenation
	$_resizeWords  = new WordTruncat();
	$overallTopics = new Lessons();

	 if (isset($_POST['addContent'])) {
 		$category_id  = $_POST['categories'];
 		$topic_id   = $_POST['topic_id'];
 		$content_notes = $_POST['content'];

 		$addContent = $overallTopics->addContentToTopic($mysqli,$content_notes,$topic_id,$category_id);
 }
 ?>
 <div class="category">
 	<div class="row">
 		<div class="col s2 m2 l2">
 			<?php  include '../public/admin_sidenav.php'; ?>
 		</div>
 			<div class="col s10 m10 l10" id="lesson_container">
 				<div class="col s12 m8 l8 offset-m2 offset-l2 card-panel">
 					<h4 class="center-align" style="font-size: 16px;">Add Topics To Categories Under Each Lesson</h4>
 					<div class="divider" style="margin-bottom:  10px;"></div>
 					<form class="form" method="post" action="admin/content/add">
 						<div class="input-field col s12" style="padding-top: 10px;">
 							<i class="material-icons prefix">view_list</i>
 							 <select class="icons" name="categories" required="required" id="categories">
						      <option value="" disabled selected>Category Lists</option>
						      <?php 
										$details_cats = $overallTopics->getTopics($mysqli);
										while ($get_details_results = $details_cats->fetch_array(MYSQLI_BOTH)) {
												$category_id_fkTL = $get_details_results['id'];
												$title	 		  = $get_details_results['title'];
												$image 			  = $get_details_results['image'];
									 ?>
						      <option value="<?php echo "$category_id_fkTL"; ?>" data-icon="<?php echo "$image"; ?>" class="circle"><?php echo "$title"; ?></option>
						    <?php
									}
									 ?>
						    </select>
							<label>Select A Category</label>
 						</div>
 						<div class="input-field col s12" style="padding-top: 10px;">
 							<i class="material-icons prefix">view_list</i>
 							 <select class="icons" name="topic_id" required="required" id="categories">
						      <option value="" disabled selected>Topic Lists</option>
						      <?php 
										$details_cats = $overallTopics->getAllLessonTopics($mysqli);
										while ($get_details_results = $details_cats->fetch_array(MYSQLI_BOTH)) {
												$topic_id_fkTL = $get_details_results['id'];
												$title	 		  = $get_details_results['topics'];
												$topic_fk_number 			  = $get_details_results['lessons'];

												$cat_details = $overallTopics->getLessonPortionForTopic($mysqli,$topic_fk_number);
											while ($cat_row_data = $cat_details->fetch_array(MYSQLI_BOTH)) {
													$cat_image = $cat_row_data['image'];
												
									 ?>
						      <option value="<?php echo "$topic_id_fkTL"; ?>" data-icon="<?php echo "$cat_image"; ?>" class="circle"><?php echo "$title"; ?> </option>
						    <?php
									}
								}
									 ?>
						    </select>
							<label>Select A Topic</label>
 						</div>
 						<div class="input-field col s12">
 							<i class="material-icons prefix">create</i>
 							<textarea name="content" class="materialize-textarea"  cols="30" rows="10"></textarea>
 							<label for="topic_name">Notes</label>
 						</div>
 						<div class="input-field col s12">
 							<button type="submit" id="add_lesson" class="btn light-blue darken-4 waves-effect waves-light" name="addContent">Assign Content</button>

 						</div>
 					</form>
 				</div>
	 			<!-- <div class="card-panelm bg animated fadeIn">
						<img src="public/images/bookshelf.svg" alt="Help Desk" class="responsive-img help"/>
					</div>
					<h5 class="center-align grey-text text-darken-3">Page Under Construction</h5>
					<h5 class="center-align grey-text text-darken-3 small-text"><a href="admin/dashboard" class="waves-effect waves-ripple waves-circle"><i class="material-icons">arrow_back</i></a> Go To Dashboard </h5> -->
 			</div>
 		
 	</div>
 </div>


