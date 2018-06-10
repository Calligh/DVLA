<?php 
	include '../controllers/SessionController.php';
	require_once '../controllers/autoload.php';
	$user_details = new Lessons();
	$u_details_little = $user_details::getUserDetails($mysqli,$session_id);
	$u_detail_data    = $u_details_little->fetch_array(MYSQLI_BOTH);

	$user_fullname    = $u_detail_data['first_name']. " ". $u_detail_data['last_name'];
	$user_image       = $u_detail_data['picture'];
	include '../public/user_navbar.php'; 

	$_videos  = new Videos();
 ?>
 <div class="tutorials">
 	<div class="row">
 		<div class="container">
 			<div class="col s12 m12 l12">
 				<!-- Hidden video div -->
				<div style="display:none;" id="video1">
				    <video class="lg-video-object lg-html5" controls preload="none">
				        <source src="https://www.youtube.com/watch?v=CD0fcMCrtH4" type="video/mp4">
				         Your browser does not support HTML5 video.
				    </video>
				</div>
				<div style="display:none;" id="video2">
				    <video class="lg-video-object lg-html5" controls preload="none">
				        <source src="sample.mp4" type="video/mp4">
				         Your browser does not support HTML5 video.
				    </video>
				</div>
				<div style="display:none;" id="video3">
				    <video class="lg-video-object lg-html5" controls preload="none">
				        <source src="sample.mp4" type="video/mp4">
				         Your browser does not support HTML5 video.
				    </video>
				</div>
				<!-- data-src should not be provided when you use html5 videos -->
				<ul id="html5-videos" class="animated fadeIn">
				  <li data-poster="public/images/20.jpg" data-sub-html="video caption1" data-html="#video1">
				     <a href>
				     	 <img src="public/images/20.jpg" />
				     	 <div class="gallery-play">
					     	<img src="public/images/play-button.png" id="play" />
					     </div>
				     </a>
				  </li>
				  <li data-poster="public/images/3.jpg" data-sub-html="video caption2" data-html="#video2">
				  	 <a href>
				 	    <img src="public/images/3.jpg"/>
				 	    <div class="gallery-play">
					       <img src="public/images/play-button.png" id="play" />
					    </div>
				  	 </a>
				
				  </li>
				   <li data-poster="public/images/8.jpg" data-sub-html="video caption3" data-html="#video3">
				  	 <a href>
				 	    <img src="public/images/8.jpg"/>
				 	    <div class="gallery-play">
					       <img src="public/images/play-button.png" id="play" />
					    </div>
				  	 </a>
				  </li>
				 
				</ul>
 				<!-- <div class="card-panelm bg animated fadeIn">
					<img src="public/images/programming.svg" alt="Help Desk" class="responsive-img help"/>
				</div>
				<h5 class="center-align grey-text text-darken-3">No Videos Available</h5>
				<h5 class="center-align grey-text text-darken-3 small-text"><a href="index" class="waves-effect waves-ripple waves-circle"><i class="material-icons">arrow_back</i></a>Go Back To Home</h5> -->
 			</div>
 		</div>
 	</div>
 </div>
 <style>
 	ul#html5-videos{
 		display: inline-block;
 		list-style: none none;
 		width: 100%;
 	}
 	ul#html5-videos > li{
 		display: inline-block;
 		border:2px solid #03a9f4;
 		margin: 10px;
 		border-radius: 50%;
 	}
 	ul#html5-videos > li > a {
 		width: 200px;
 		height: 200px;
		border: 3px solid #FFF;
	    border-radius: 3px;
	    display: block;
	    overflow: hidden;
	    position: relative;
	    float: left;
	    border-radius: 50%;
 	}
 	ul#html5-videos > li > a > img{
 		width: 200px;
 		height: 200px;
 		-webkit-transition: -webkit-transform 0.15s ease 0s;
	    -moz-transition: -moz-transform 0.15s ease 0s;
	    -o-transition: -o-transform 0.15s ease 0s;
	    transition: transform 0.15s ease 0s;
	    -webkit-transform: scale3d(1, 1, 1);
	    transform: scale3d(1, 1, 1);
	    width: 100%
 	}

 	ul#html5-videos li > a .gallery-play{
 		background-color: rgba(0, 0, 0, 0.1);
	    bottom: 0;
	    left: 0;
	    position: absolute;
	    right: 0;
	    top: 0;
	    -webkit-transition: background-color 0.15s ease 0s;
	    -o-transition: background-color 0.15s ease 0s;
	    transition: background-color 0.15s ease 0s;
 	}
 	ul#html5-videos li > a:hover img{
 		transform: scale3d(1.1,1.1,1.1);
 		-webkit-transition: -webkit-transform 0.15s ease 0s;
	    -moz-transition: -moz-transform 0.15s ease 0s;
	    -o-transition: -o-transform 0.15s ease 0s;
	    transition: transform 0.15s ease 0s;
	    -webkit-transform: scale3d(1.1, 1.1, 1.1);
 	}

 	ul#html5-videos li > a:hover .gallery-play{
 		background-color: rgba(0, 0, 0, 0.5);
 	}
 	.gallery-play img{
 		width: 48px;
 		height: 48px;
 		position: relative;
 		top: 71px;
 		left: 71px;
 		opacity: 0.7;
 	}
 	/*ul#html5-videos li > a:hover:after .gallery-play > img{
 		opacity: 1;
 	}*/
 </style>