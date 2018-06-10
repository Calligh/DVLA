<?php
include '../controllers/SessAdminController.php';
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
	 							 <select class="icons" name="menus" required="required" id="menus">
							      <option value="" disabled selected>Menu Lists</option>
							      <?php
											$details_cats = $overallTopics->getMenus($mysqli);
											while ($get_details_results = $details_cats->fetch_array(MYSQLI_BOTH)) {
													$menu_id_fkTL = $get_details_results['id'];
													$name	 		  = $get_details_results['name'];
													$image 			  = $get_details_results['image'];
										 ?>
							      <option value="<?php echo "$menu_id_fkTL"; ?>" data-icon="<?php echo "$image"; ?>" class="circle"><?php echo "$name"; ?></option>
							    <?php
										}
										 ?>
							    </select>
								<label>Select Menu</label>
	 					</div>
 						<div class="input-field col s12" style="padding-top: 10px;" id="lordbanks">
 							<i class="material-icons prefix">view_list</i>
 							 <select class="icons" name="categories" required="required" id="categories">
						      <option value="" disabled selected>Category Lists</option>
						    </select>
							<label>Select A Category</label>
 						</div>
 						<div class="input-field col s12" style="padding-top: 10px;" id="banksRay">
 							<i class="material-icons prefix">view_list</i>
 							 <select class="icons" name="topic_id" required="required" id="topics">
						      <option value="" disabled selected>Topic Lists</option>
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
 			</div>

 	</div>
 </div>
 <!-- LOADER CONFIGURATION FOR THE CONTAINER -->
<div class="overlay-loader">
	<div class="preloader-wrapper small active " style="position:relative;top:50%;left:50%; overflow:hidden !important;">
	 <div class="spinner-layer spinner-blue-only">
		 <div class="circle-clipper left">
			 <div class="circle"></div>
		 </div><div class="gap-patch">
			 <div class="circle"></div>
		 </div><div class="circle-clipper right">
			 <div class="circle"></div>
		 </div>
	 </div>
 </div>
</div>
 <!-- Using ajax to get the updated data -->
 <script>
 $("div.overlay-loader").hide();

 	$("select#categories").on('change',function(event){
 		console.log(event);
 		var $_catId  = event.target.value;
 		var $_menuid = $("select#menus").val();
 		var dataString = "menuID=" + $_menuid + "&categoryID=" + $_catId;

 		$.ajax({
 			url:"admin/lesson/processor",
 			method:"POST",
 			data:dataString,
 			success:function(data){
 				setTimeout(function () {
 					$("div.overlay-loader").show();
 				}, 10);
 				setTimeout(function () {
 					$("#banksRay").html(data);
 					$("div.overlay-loader").hide();
 				}, 3000);
 			}
 		})
 		.done(function(){
 			//Success Events Happenings
 		})
 		.fail(function(){
 			//Failure Events Happenings
 		});
 	});
	
 	$("select#menus").on('change',function(event){
 		var $_menuid = event.target.value;
 		var dataString = "menuID= " + $_menuid;
 		$.ajax({
 			url:"admin/topic/processor",
 			method:"POST",
 			data:dataString,
 			success:function(data){
				setTimeout(function () {
					$("div.overlay-loader").show();
				}, 10);
				setTimeout(function () {
				  $("#lordbanks").html(data);
					$("div.overlay-loader").hide();
				}, 3000);
 			}
 		})
 		.done(function(){

 		})
 		.fail(function(){

 		});
 	});

 </script>
