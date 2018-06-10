<?php
	include 'controllers/autoload.php';
	$get_id = $_GET['s'];
	$get_menu_id = $_GET['r'];
	// ini_set( 'error_reporting', E_ALL);
	// ini_set( 'display_errors', true );
	include 'public/topic_navbar.php';
 ?>
 <style type="text/css">
 	html{
 		background-color: #eeeee1;
 	}
 	html,body{
 		height: 100%;
 	}
 </style>
 <div class="container">
 	<div class="row">
 		<div class="col s12 m12 l12 animated fadeIn">
		 	<?php
		 		$overallTopics = new Lessons();
				$query_data    = $overallTopics->getLessonTopics($mysqli,$get_id,$get_menu_id);
				$query_count   = $query_data->num_rows;
				if ($query_count > 0) {
					# code...
					while ($row = $query_data->fetch_array(MYSQLI_BOTH))
					{
						$lesson_id 	  = $row['id'];
						$lesson_title = ucfirst($row['topics']);
						$lessons 	  = $row['lessons']; // this is the foreign key constraint
						$menu_fk_id   = $row['menu_id'];

		 	 ?>
			 		<div class="card-panel">
			 			<span style="text-transform: capitalize;font-size: 18px;"><a href="featured/<?php echo "$lessons"; ?>/<?php echo "$lesson_id"; ?>/<?php echo "$menu_fk_id";?>"><?php echo "$lesson_title"; ?></a></span>
			 			<a href="#" class="dropdown-button waves-effect waves-ripple waves-circle" data-activates="dropdown<?php echo "$lesson_id";?>" id="view_details"><i class="material-icons vD123xLOd">more_vert</i></a>

			 			<ul class="dropdown-content detail_dropdown" id="dropdown<?php echo "$lesson_id";?>">
						 	<li class="waves-effect waves-ripple"><a href="featured/<?php echo "$lessons"; ?>/<?php echo "$lesson_id"; ?>/<?php echo "$menu_fk_id";?>"><i class="material-icons">visibility_on</i>Read ..</a></li>
						    <li class="divider"></li>
						    <li class="waves-effect waves-ripple"><a href="#"><i class="material-icons">description</i>Description</a></li>
						    <li class="divider"></li>
						    <li class="waves-effect waves-ripple"> <a href="bug_reports"><i class="material-icons">bug_report</i>Report Bug</a></li>
						 </ul>
						 <script type="text/javascript">
						 	$("#dropdown<?php echo "$lesson_id";?>").dropdown({
						 		gutter:1,
						 		belowOrigin:true
						 	});
						 </script>
			 		</div>

		 	<?php
		 			}
		 		}else
		 		{
		 			?>
		 			<div class="card-panelm bg">
							<img src="public/images/books1.svg" alt="Help Desk" class="responsive-img help"/>
						</div>
						<h5 class="center-align grey-text text-darken-3">No Lessons Available</h5>
						<h5 class="center-align grey-text text-darken-3 small-text">Go Back To Categories</h5>
		 			<?php
		 		}

		 	  ?>
		 	</div>
 	</div>
 </div>
