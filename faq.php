<?php
	include 'public/base.php'; 
	include 'public/navbar.php';  
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
 		<div class="col s12 m12 l12">
 			<ul class="collapsible" data-collapsible="accordion">
 				<li>
			      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First Question</div>
			      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">place</i>Second Question</div>
			      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third Question</div>
			      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></div>
			    </li>
 			</ul>
 		</div>
 	</div>
 </div>
 <script type="text/javascript">
 	$("ul.collapsible").css({"min-height":"100%"});
 	$("ul.collapsible").on('click','li',function(){
			if ($(this).hasClass("active")) {
				
			}
		});

 </script>