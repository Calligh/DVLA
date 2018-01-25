<?php 
include 'public/base.php'; 
 ?>
 <title>DVLA | 404</title>
<style type="text/css">
	html{
		overflow: hidden;

	}
	div#error{
		position: relative;
		width: 100%;
		height: 100%;
	}
	div.internal-image > img{
		width: 100%;
		height: 550px;
	}
	div.back-pane{
		width: 100%;
		position: absolute;
		height: 60px;
		left: 0;
	}
	div.back-pane > a{
		padding: 10px 6px 10px 6px;
		margin-left: 10px;
		margin-top: 10px;
		width: 50px;
		height: 50px;
		border-radius:50%;
	}
	div.back-pane > a > i{
		margin-left: 5.5px;
		margin-top: 3px;
	}
	h5{
		text-shadow:1px 1px 1px #929292;
		text-overflow: ellipsis;
	}
	span.label{
		font-size: 20px;
		position: absolute;
		top: 20px;
		margin-left: 30px;
		color: #212121;
		text-shadow: 1px 1px 1px #0277bd;
	}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				<div class="card-panel col s12 animated fadeIn" id="error">
					<div class="back-pane">
						<a href="index" id="backButton" class="waves-effect waves-ripple"><i class="material-icons left">arrow_back</i></a><span class="label">Return Home</span>
					</div>
					<div class="internal-image">
						<img src="public/images/toys.svg" class="responsive-img" data-src="" alt="Error 404 page" />
					</div>
					<h5 class="center-align">Oops! Seems Requested Page Is Not Available</h5>
					<h6 class="center-align">Click the back arrow to return home</h6>
				</div>
			</div>
		</div>
	</div>
	 <script type="text/javascript">
		var url = window.location.href;
		var subPage = url.split('/');
		var request = subPage[subPage.length - 2];
		if (request == "admin") {
			$("a#backButton").attr('href','admin/dashboard');
		}else{
			$("a#backButton").attr('href','index');
		}
	</script>
</body>
</html>