<?php
/**
 * This controller will contain the com for the videos in the databases
 */
 class Videos
 {
 	
 	public function UpVideos($mysqli,$youtube_url,$title){
 		$query = "INSERT INTO videos(youtube_url,title,created_at,updated_at) VALUES('$youtube_url','$title',NOW(),NOW())";
 		$results = $mysqli->query($query);
 		if ($results) {
 			?>
 			<script type="text/javascript">
	 			setTimeout(function() {
	 				var $toast = $('<span>Video Successfully Configured</span>');
	 				Materialize.toast($toast,2000);
	 			}, 1000);
	 		</script>
 			<?php
 		}
 		else{
 			?>
 			<script type="text/javascript">
	 			setTimeout(function() {
	 				var $toast = $('<span>Error Occurred While Configuring Video</span>');
	 				Materialize.toast($toast,2000);
	 			}, 1000);
	 		</script>
 			<?php
 		}
 	}
 } 
 ?>