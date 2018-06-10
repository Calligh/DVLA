<?php
 	include '../controllers/SessionController.php';
	include '../controllers/autoload.php';
	$user_details = new Lessons();
	$u_details_little = $user_details::getUserDetails($mysqli,$session_id);
	$u_detail_data    = $u_details_little->fetch_array(MYSQLI_BOTH);

	$user_fullname    = $u_detail_data['first_name']. " ". $u_detail_data['last_name'];
	$user_image       = $u_detail_data['picture'];
	include '../public/user_navbar.php';
 ?>
 <div class="menus">
 	<div class="row">
 		<div class="col s12 m10 l10 offset-m1 offset-l1">
 			<?php
	 			$overallData = new Lessons();
	 			$menus = $overallData::getMenus($mysqli);
	 			$menu_count = $menus->num_rows;
	 			if ($menu_count > 0) {
	 				while ($row_menu = $menus->fetch_array(MYSQLI_BOTH)) {
	 					$menu_id    = $row_menu['id'];
	 					$menu_title = $row_menu['name'];
	 					$menu_image = $row_menu['image'];
	 					$url_config = $row_menu['url'];

	 					?>
	 					<div class="col s12 m3 l3 animated fadeIn">
				 			<a href="<?php echo "user/materials";?>/<?php echo "$menu_id";?>">
				 				<div class="card-panel col s12 m12 l12 waves-effect waves-ripple waves-block z-depth-2" id="pd-0">
					 				<div class="image-header">
					 					<img src="<?php echo"$menu_image";?>" class="responsive-img"/>
					 				</div>
					 				<span class="caption center-align">
					 					<?php echo "$menu_title";?>
					 				</span>
					 			</div>
				 			</a>
				 		</div>

	 					<?php
	 				}
	 			}
 			 ?>
 		</div>
 	</div>
 </div>