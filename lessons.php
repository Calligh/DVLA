<?php 
	require_once 'controllers/autoload.php';
	include 'public/navbar.php'; 

	//Instantiating the word concatenation
	$_resizeWords  = new WordTruncat();
 ?>
 <div class="row">
 	<div class="col s12 m10 l10 offset-m1 offset-l1">
 		<?php 
 		$overallTopics = new Lessons();
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
 			<a href="collections/<?php echo "$id"; ?>">
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
				<h5 class="center-align grey-text text-darken-3 small-text">Go Back To Categories</h5>
 			<?php
 		}
 		?>
 	</div>
 </div>