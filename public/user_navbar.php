<div class="navbar-fixed">
	<nav class="nav-wrapper light-blue darken-4">
		<a class="brand-logo">TertDrive</a>
		<ul class="hide-on-med-and-down right" id="nav-demo">
			<li class="image-backdrop">
				<a>
				  <div class="chip">
					<?php echo "$user_fullname"; ?>
					<img src="<?php echo $user_image ?>" class="responsive-img resp"/>
				  </div>	
				</a>
			</li>
			<li>
				<a href="user/items"><i class="material-icons left">book</i>Lessons</a>
			</li>
			<li>
				<a href="user/tutorials"><i class="material-icons left">cast</i>Videos</a>
			</li>
			<li>
				<a href="oqa/user_index.php"><i class="material-icons left">book</i>Tests</a>
			</li>

			<li>
				<a href="user/logout"><i class="material-icons left">power_settings_new</i>Logout</a>
			</li>
		</ul>
	</nav>
</div>
<style>
	li.image-backdrop{
		position: relative;
		right: 220px;

	}
	li.image-backdrop a .chip{
		font-size: 16px;
		font-weight: bold;
		background-color: transparent;
		color: rgba(255,255,255,255);
		border:1px solid rgba(255,255,255,0.85);
	}
	img.resp{
		width: 30px;
		height: 30px;
		border-radius: 50%;
	}
</style>