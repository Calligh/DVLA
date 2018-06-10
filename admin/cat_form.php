<?php 
	include '../controllers/SessAdminController.php';
	include '../controllers/autoload.php';
	include '../public/admin_navbar.php';
	$session_id = $_SESSION['data_id']; 

	$overallTopics = new Lessons();

	if (isset($_POST['addLesson'])) {
 		# code...
 		$title = trim($_POST['lesson_name']);
 		$image = trim($_POST['image_rep']);
 		$menuLesson_id = trim($_POST['menus']);

 		$insert_query = $overallTopics->adminAddLesson($mysqli,$title,$image,$menuLesson_id);

 	}
 ?>
<div class="category_form">
	<div class="col s2 m2 l2">
		<?php include '../public/admin_sidenav.php';  ?>
	</div>
	<div class="col s10 m10 l10">
		<div class="row">
			<div class="container">
				<div class="col s12 m8 l8 offset-m2 offset-l2 card-panel" style="position: relative;top: 30px;padding-top: 10px;">
					<form role="form" class="lesson_form" method="post" action="admin/category/add">
						<div class="input-field col s12" style="padding-top: 10px;">
 							<i class="material-icons prefix">view_list</i>
 							 <select class="icons" name="menus" required="required" id="categories">
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
						<div class="input-field col s12 m12 l12" style="padding-top: 20px;">
							<i class="material-icons prefix">book</i>
							<input type="text" name="lesson_name" id="lesson_name" required="required" />
							<i class="material-icons clear">close</i>
							<label for="lesson_name">Lesson Name or Title</label>
						</div>
						<div class="input-field col s12 m12 l12" style="padding-top: 20px;">
							<i class="material-icons prefix">camera</i>
							<input type="text" name="image_rep" id="image_rep" required="required" />
							<a href="#modalAddImage"><i class="material-icons select_img">camera_alt</i></a>
							<label for="image_rep">Select An Image</label>
						</div>
						<div class="input-field col s12 m12 l12">
							<button type="submit" id="add_lesson" class="btn light-blue darken-4 waves-effect waves-light" name="addLesson">Add Lesson</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Adding the modal codes for the crafting of the company with its details-->
<div class="modal mAddImage animated fadeInUpBig" id="modalAddImage">
   <div class="modal-content">
   	  <div class="image-container">
   	  	 <img src="public/images/alarm.svg" class="responsive-img imagery" data-src="public/images/alarm.svg"/>
   	  	 <img src="public/images/basketball.svg" class="responsive-img imagery" data-src="public/images/basketball.svg"/>
   	  	 <img src="public/images/package.svg" class="responsive-img imagery" data-src="public/images/package.svg"/>
   	  </div>
   </div>
   <div class="modal-footer">
   	<a href="javascript:void(0)" class="modal-close modal-action waves-effect waves-ripple btn-flat" style="text-transform: capitalize;">Close</a>
   </div>
</div>
<script type="text/javascript">
		$('.mAddImage').modal({
			dismissable:true,
		});
		//configuring the clear icon
		$("i.clear").css({"display":"none","opacity":"0","transition":"all 0.7s ease-in-out"});
		$("i.select_img").css({"display":"none","opacity":"0","transition":"all 0.5s ease-in-out"});
		$("input#lesson_name").keyup(function(){
			var empty = false;
			if ($(this).val().length == 0)
			 {
			 	empty = true;
			 }

			 if (empty) 
			 {
			 	// $("button#craft_now").prop("disabled",true);
			 	$("i.clear").css({"display":"none","opacity":"0","transition":"all 0.7s ease-in-out"});
			 }
			 else{
			 	// $("button#craft_now").prop("disabled",false);
			 	$("i.clear").css({"display":"block","opacity":"1","transition":"all 0.7s ease-in-out"});
			 }
		});
			//Activating the clearing of the user input for the crafting of the companies
		$("i.clear").on('click',function(){
			$("input#lesson_name").val(" ").focus();
			// $("button#craft_now").prop("disabled",true);
			$("i.clear").css({"display":"none","opacity":"0","transition":"all 0.7s ease-in-out"});
		});

		$("input#image_rep").focusin(function(){
		 	$("i.select_img").css({"display":"block","opacity":"1","transition":"all 0.5s ease-in-out"});
		});

		//Using my own designed plugin
		$(".imagery").Imagery({
			wrapperCss:{
				"margin":"5px",
				"cursor":"pointer"
			},
			indicator:false,
			addOpacity:.4,
			onSelectedImage:function(data){
				$("input#image_rep").val(data);
			},
		});
</script>
