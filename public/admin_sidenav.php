<div class="navigation z-depth-1" style="border-right: 1px solid #e8e8e8;margin-left: -15px;z-index: 10;">
	<ul class="nav-demo">
		<li id="home" style="margin-right: -6px;">
			<a href="admin/dashboard">
				<i class="material-icons left icon">dashboard</i>
				<span class="menu_name">Dashboard</span>
			</a>
		</li>

		<li id="stud" style="margin-right: -6px;">
			<a href="admin/users">
				<i class="material-icons left icon">supervisor_account</i>
				<span class="menu_name">Registered Users</span>
<!-- 				<i id="indicator" class="material-icons right icon activate">bubble_chart</i>
 -->		</a>
		</li>

		<li style="margin-right: -6px;">
			<a href="admin/categories">
				<i class="material-icons left icon">view_module</i>
				<span class="menu_name">Categories</span>
			</a>
		</li>

		<li style="margin-right: -6px;">
			<a href="admin/topics">
				<i class="material-icons left icon">view_list</i>
				<span class="menu_name">Topics</span>
			</a>
		</li>

		<li style="margin-right: -6px;">
			<a href="admin/contents">
				<i class="material-icons left icon">bookmark</i>
				<span class="menu_name">Notes</span>
			</a>
		</li>

		<li style="margin-right: -6px;">
			<a href="admin/tertiaries">
				<i class="material-icons left icon">account_balance</i>
				<span class="menu_name">Tertiaries</span>
			</a>
		</li>

		<li style="margin-right: -6px;">
			<a href="admin/reports">
				<i class="material-icons left icon">print</i>
				<span class="menu_name">Reports </span>
			</a>
		</li>

		
		<div class="divider"></div>
		<li class="grey-text text-accent-1 header disabled">Report Issues?</li>
		<li style="margin-right: -6px;">
			<a href="admin/feedback">
				<i class="material-icons left icon">flag</i>
				<span class="menu_name">Feedback</span>
			</a>
		</li>

		<div class="divider"></div>
		<li class="grey-text text-accent-1 header disabled">General Settings</li>
		<li style="margin-right: -6px;">
			<a href="admin/edit">
				<i class="material-icons left icon">person_pin</i>
				<span class="menu_name">Edit Profile</span>
			</a>
		</li>

		<li style="margin-right: -6px;">
			<a href="admin/password">
				<i class="material-icons left icon">vpn_lock</i>
				<span class="menu_name">Change Password</span>
			</a>
		</li>

		<li style="margin-right: -6px;">
			<a href="admin/logout">
				<i class="material-icons left icon">power_settings_new</i>
				<span class="menu_name">Logout</span>
			</a>
		</li>
		
	</ul>
</div>
<style>
	div.navigation{
			position: fixed;
			margin-top: -10px;
			width: 16%;
			height: 100%;
			z-index: 2;
			overflow: hidden;
			background-color: #ffffff;
			margin-bottom: 20px;

		}
		div.content_body{
			width: 100%;
			height: 100%;
			
		}
		.navigation:hover{
		  overflow-y: auto;
		  white-space: nowrap;
		  width: 216px;
		  scroll-behavior: smooth;
		}

		/*.navigation:hover::after{
		  overflow-y: auto;
		  white-space: nowrap;
		  width: 216px;
		  overflow-y:scroll;
		}*/

		.navigation::webkit-scrollbar{
		  background: transparent;
		  width: 8px;
		  scroll-behavior: smooth;
		}
		ul.nav-demo{
		  list-style: none;
		  padding: 12px 5px 12px 5px;
		  margin-bottom: 50px;

		}

		ul.nav-demo li{
		  display: block;
		  padding: 12px 5px 12px 5px;
		  margin-top: 0px;
		  margin-bottom: 4px;
		  margin-right: 10px;
		 
		}
		ul.nav-demo li.active{
			background-color: rgba(0,0,0,0.05);
		}

		ul.nav-demo li:hover{
		  background-color: rgba(0,0,0,0.05);
		  cursor: pointer;

		}
		ul.nav-demo li a{
		   font-size: 13px;
		   font-weight: 600;
		   padding: 12px 5px 12px 5px;
		}
		span.menu_name{
			margin-top: 2px;
			color: #212121;
		}
		a > i.icon{
			margin-bottom: 4px;
			color: #212121;
			margin-left: 15px;
		}
		li.header{
		  pointer-events: none;
		}
		li.header:hover{
			background-color: transparent;
		}
</style>
<!-- Small scripts bi -->
 <script type="text/javascript">
      $(window).load(function(){
          setTimeout(function() {
            $("div.bottomsheetLoader").fadeOut('slow');
          }, 3500);
        });
      
    //activating the active click events
    $("ul.nav-demo a").on('click',function(e){
    	var link = $(this);
    	var item = link.parent("li");

    	if (item.hasClass("active"))
    	 {
    	 	item.removeClass("active").children("a").removeClass("active");
    	 }
    	 else{
    	 	item.addClass("active").children("a").addClass("active");
    	 }

    	 if (item.children("ul").length > 0) 
    	 {
    	 	var href = link.attr("href");
    	 	link.attr("href","#");
    	 	setTimeout(function() {
    	 		link.attr("href",href);
    	 	}, 300);
    	 	e.preventDefault();
    	 }

    })
    .each(function(){
    	var link = $(this);
    	if (link.get(0).href == location.href)
    	 {
    	 	link.addClass("active").parents("li").addClass("active");
    	 	return false;
    	 }
    });
</script>