<?php 
	include 'public/base.php'; 
	include 'public/navbar.php'; 
 ?>
 <div id="aboutMessage">
 	<about-us v-for="item in contents" v-bind:message="item"></about-us>	
 </div>
 <script src="public/js/vue-component.js"></script>