<?php 
	ini_set( 'error_reporting', E_ALL);
    ini_set( 'display_errors', true );
    include '../controllers/SessAdminController.php';
	include '../controllers/autoload.php';
	include '../public/admin_navbar.php';

	$session_id = $_SESSION['data_id'];

	$overallData = new Lessons();
	$get_count_users  = $overallData::getUserCount($mysqli);
	$total_users      = $get_count_users->fetch_array(MYSQLI_BOTH);
	$get_totalUsers   = $total_users['TOTAL'];
	
	$get_count_school = $overallData::getSchoolCount($mysqli);
	$total_number_schools = $get_count_school->fetch_array(MYSQLI_BOTH);
	$get_number			  = $total_number_schools['TOTAL'];

	$get_count_category = $overallData::getCategoryCount($mysqli);
	$total_number_cat   = $get_count_category->fetch_array(MYSQLI_BOTH);
	$get_number1	    = $total_number_cat['TOTAL'];

	$get_count_topic 	= $overallData::getTopicCount($mysqli);
	$total_number_topic = $get_count_topic->fetch_array(MYSQLI_BOTH);
	$get_number2	    = $total_number_topic['TOTAL'];

	$get_content	    = $overallData::getContentCount($mysqli);
	$total_content      = $get_content->fetch_array(MYSQLI_BOTH);
	$get_number3 		= $total_content['TOTAL'];

	$get_count_menu     = $overallData::getMenuCount($mysqli);
	$total_menu         = $get_count_menu->fetch_array(MYSQLI_BOTH);
	$get_number4        = $total_menu['TOTAL'];
 ?>
 <div class="admin_home">
 	<div class="row">
 		<div class="col s2 m2 l2">
 			<?php  include '../public/admin_sidenav.php'; ?>
 		</div>
		<div class="col s9 m6 l6 card-panel">
				<input type="text" class="search" id="search" placeholder="Search Modules ..." data-search="module_data" style="margin-top: 6px;margin-left: 1px; margin-right: 1px;" />
				<a href="admin/users" id="menu" class="waves-effect waves-block waves-ripple">
                    <span class="chip" id="count"><?php echo "$get_totalUsers"; ?></span>
					<img src="public/images/boy.svg" class="responsive-img"/>
					<span class="title">Users</span>
				</a>
				<a href="admin/menus" id="menu" class="waves-effect waves-block waves-ripple">
					<span class="chip" id="count"><?php echo "$get_number4"; ?></span>
					<img src="public/images/speedometer.svg" class="responsive-img"/>
					<span class="title">Menus</span>
				</a>
				<a href="admin/categories" id="menu" class="waves-effect waves-block waves-ripple">
					<span class="chip" id="count"><?php echo "$get_number1"; ?></span>
					<img src="public/images/blackboard(1).svg" class="responsive-img"/>
					<span class="title">Categories</span>
				</a>
				<a href="admin/topics" id="menu" class="waves-effect waves-block waves-ripple">
					<span class="chip" id="count"><?php echo "$get_number2"; ?></span>
					<img src="public/images/bookshelf.svg" class="responsive-img"/>
					<span class="title">Topics</span>
				</a>
				<a href="admin/contents" id="menu" class="waves-effect waves-block waves-ripple">
					<span class="chip" id="count"><?php echo "$get_number3"; ?></span>
					<img src="public/images/open-book.svg" class="responsive-img"/>
					<span class="title text-center">Notes</span>
				</a>
				<a href="oqa/admin_login.php" target="_blank" id="menu" class="waves-effect waves-block waves-ripple">
					<img src="public/images/desk.svg" class="responsive-img"/>
					<span class="title text-center">Test Exer...</span>
				</a>

				<a href="admin/tertiaries" id="menu" class="waves-effect waves-block waves-ripple">
					<span class="chip" id="count"><?php echo "$get_number"; ?></span>
					<img src="public/images/university.svg" class="responsive-img"/>
					<span class="title text-center">Tertiaries</span>
				</a>

				<a href="admin/reports" id="menu" class="waves-effect waves-block waves-ripple">
                    <span class="chip" id="count"><?php echo "Available"; ?></span>
					<img src="public/images/pdf.svg" class="responsive-img"/>
					<span class="title text-center">Reports</span>
				</a>
			</div>
			<div class="col s9 m4 l4">
				<div class="col s12 m12 l12 card-panel">
<!-- 					<img src="public/images/rocket.svg" class="responsive-img">
 -->				</div>
			</div>
				<div id="addLessBtn" class="fixed-action-btn animated" style="right: 70px;bottom: 35px;">
		    <a  href="admin/messages" id="addLesson" class="btn-floating btn-large light-blue accent-3 waves-effect waves-ripple">
		      <i class="large material-icons tooltipped" data-tooltip="Send Message" data-position="left" data-delay="5">speaker_notes</i>
		    </a>
	</div>
		
 	</div>
 </div>
<script type="text/javascript">
	$("#search").on('keyup',function(){
		var something = $(this).val();
		var configs = $('#menu').children('span').text();
		var comp = something.match(/configs/);
		if (comp) {
			console.log("Match");
		}
	});
</script>