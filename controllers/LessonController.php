<?php
 /**
 *
 */
 class Lessons
 {
 	public static function getMenus($mysqli){
 		$query = "SELECT * FROM menu";
 		$results = $mysqli->query($query);
 		return $results;
 	}

 	public static function getTopics($mysqli,$menu_id){
 		$query = "SELECT * FROM lessons WHERE menu_id = '$menu_id'";
 		$results = $mysqli->query($query);
 		return $results;
 	}

 	public function getAllLessonTopics($mysqli){
 		$query = "SELECT * FROM lesson_topics";
 		$results = $mysqli->query($query);
 		return $results;
 	}

 	public function getLessonTopics($mysqli,$get_id,$get_menu_id){
 		$query = "SELECT * FROM lesson_topics WHERE lesson_topics.lessons = '$get_id' AND lesson_topics.menu_id = '$get_menu_id'";
 		$results = $mysqli->query($query);
 		return $results;
 	}

 	public function getLessonPortionForTopic($mysqli,$topic_fk_number){
 		$query = "SELECT * FROM lessons WHERE id = '$topic_fk_number'";
 		$results  = $mysqli->query($query);
 		return $results;
 	}
 	/**
	* Get only the name of the category for the topic
 	*/
 	public function getCatForTopic($mysqli,$get_id){
 		$query = "SELECT title FROM lessons WHERE id ='$get_id'";
 		$results = $mysqli->query($query);
 		return $results;
 	}

 	public function getLessonNotes($mysqli,$get_topic_id,$get_lesson_id,$get_menu_id){
 		$query = "SELECT * FROM lesson_details WHERE lesson_details.lesson_topics = '$get_lesson_id' AND lesson_details.lessons = $get_topic_id AND lesson_details.menu_id = '$get_menu_id'";
 		$results = $mysqli->query($query);
 		return $results;
 	}

 	public static function adminLogger($mysqli,$username){
 		$query = "SELECT * FROM admin WHERE username = '$username'";
 		$results = $mysqli->query($query);
 		return $results;
 	}

 	public static function userLogger($mysqli,$email){
 		$query = "SELECT * FROM registration WHERE email= '$email'";
 		$results = $mysqli->query($query);
 		return $results;
 	}

 	public function adminAddLesson($mysqli,$title,$image,$menuLesson_id){
 		$query = "INSERT INTO lessons(title,image,menu_id) VALUES('$title','$image','$menuLesson_id')";
 		$results = $mysqli->query($query);
 		if ($results) {
 			?>
 			<script type="text/javascript">
 				 var $toastContent = $('<span>Lesson Successfully Added</span>').add($('<button class="btn-flat toast-action">Done</button>'));
 				 Materialize.toast($toastContent,10000);
 				 $("button.toast-action").on('click',function(){
 				 	$("toast-container").hide();
 				 });
 			</script>
 			<?php
 		}
 	}

 	public function adminAllCategories($mysqli){
 		$query = "SELECT * FROM lessons";
 		$results = $mysqli->query($query);
 		return $results;
 	}

 	public function getMenuNameFromID($mysqli,$menu_id){
 		$query = "SELECT name FROM menu WHERE id = '$menu_id'";
 		$results = $mysqli->query($query);
 		return $results;
 	}

 	public function registeredUsers($mysqli){
 		$query = "SELECT * FROM registration";
 		$results = $mysqli->query($query);
 		return $results;
 	}

 	public function getSchoolList($mysqli){
 		$query = "SELECT DISTINCT(name) FROM tertiary_schools GROUP BY name ORDER BY name ASC";
 		$results = $mysqli->query($query);
 		return $results;
 	}

 	/*
	 Adding the topic to a category
 	*/
	 public function addTopicToCat($mysqli,$lessons,$topics,$menuTopic_id){
	 	$query = "INSERT INTO lesson_topics(topics,lessons,menu_id) VALUES('$topics','$lessons','$menuTopic_id')";
	 	$results = $mysqli->query($query);
	 	if ($results) {
	 		?>
	 		<script type="text/javascript">
	 			setTimeout(function() {
	 				var $toast = $('<span>Topic Successfully Added</span>');
	 				Materialize.toast($toast,2000);
	 			}, 1000);
	 			setTimeout(function() {
	 				window.location = "admin/topics";
	 			}, 3000);
	 		</script>
	 		<?php
	 	}
	 	else{
	 		?>
	 		<script type="text/javascript">
	 			var $toast = $('<span>Error Occurred While Trying To Add Topic</span>');
	 			Materialize.toast($toast,2000);
	 		</script>
	 		<?php
	 	}
	 }

	 public function addContentToTopic($mysqli,$content_notes,$category_id,$topic_id){
	 	$query = "INSERT INTO lesson_details(content,lesson_topics,lessons) VALUES('$content_notes','$category_id','$topic_id')";
	 	$results = $mysqli->query($query);
	 	if ($results) {
	 		?>
	 		<script type="text/javascript">
	 			setTimeout(function() {
	 				var $toast = $('<span>Notes Successfully Added</span>');
	 				Materialize.toast($toast,2000);
	 			}, 1000);
	 			setTimeout(function() {
	 				window.location = "admin/contents";
	 			}, 3000);
	 		</script>
	 		<?php
	 	}else{
	 		?>
			<script type="text/javascript">
	 			var $toast = $('<span>Error Occurred While Trying To Add Content</span>');
	 			Materialize.toast($toast,2000);
	 		</script>
	 		<?php
	 	}
	 }

	 public function getContent($mysqli){
	 	$query = "SELECT * FROM lesson_details";
	 	$results = $mysqli->query($query);
	 	return $results;
	 }

	 public function getContentPerTopic($mysqli,$get_lesson_topics_fk){
	 	$query = "SELECT topics FROM lesson_topics WHERE  lesson_topics.id = '$get_lesson_topics_fk'";
	 	$results = $mysqli->query($query);
	 	return $results;
	 }

	 public function register($mysqli,$firstname,$lastname,$middlename,$dob,$gender,$country,$address,$phone,$mobile,$email,$password,$region,$city,$school_name,$level,$hostel,$student_id,$course,$image,$mm_SelectNetwork,$mm_Number,$mm_confNumber,$mm_Amt,$mm_RefNumber){
	 	$query = "INSERT INTO registration(first_name,last_name,middle_name,DOB,gender,country,address,phone,mobile,email,password,region,city,name_school,level,hostel,student_schoolid,course,picture,mm_SelectNetwork,mm_Number,mm_confNumber,mm_Amt,mm_RefNumber,created_at,updated_at) VALUES('$firstname','$lastname','$middlename','$dob','$gender','$country','$address','$phone','$mobile','$email','$password','$region','$city','$school_name','$level','$hostel','$student_id','$course','$image','$mm_SelectNetwork','$mm_Number','$mm_confNumber','$mm_Amt','$mm_RefNumber',NOW(),NOW())";
	 	$results = $mysqli->query($query);
	 	if ($results) {
	 		?>
	 		<script type="text/javascript">
                setTimeout(function(){
                    var $toast = $('<span>Working Now ....</span>');
                    Materialize.toast($toast,2000);
                },2000)
	 			setTimeout(function() {
	 				var $toast = $('<span>Registration Successful</span>');
	 				Materialize.toast($toast,2000);
	 			}, 3800);
	 		</script>
	 		<?php
	 	}else{
	 		?>
	 		<script type="text/javascript">
	 			setTimeout(function() {
	 				var $toast = $('<span>An Error Occurred</span>');
	 				Materialize.toast($toast,2000);
	 			}, 1000);
	 		</script>
	 		<?php
	 	}
	 }

	 /* ADMIN  */
	 public function GetProfileAdmin($mysqli,$unique_id){
	     $query = "SELECT * FROM admin WHERE id = '$unique_id'";
	     $results = $mysqli->query($query);
	     return $results;
     }

	 public function EditProfileAdmin($mysqli,$username,$firstname,$lastname,$picture,$unique_id){
	     $query = "UPDATE admin SET username = '',firstname = '', lastname = '',picture = '' WHERE id = '$unique_id'";
	     $results = $mysqli->query($query);
	     if ($results){
	         ?>
             <script type="text/javascript">
                 setTimeout(function(){
                     var $toast = $('<span>Working Now ...</span>');
                     Materialize.toast($toast,2000);
                 },2000);
                 setTimeout(function() {
                     var $toast = $('<span>Update Successful</span>');
                     Materialize.toast($toast,2000);
                 }, 3800);
             </script>
            <?php
         }else{
	         ?>
             <script>
                 setTimeout(function() {
                     var $toast = $('<span>An Error Occurred .. Contact Web Master</span>');
                     Materialize.toast($toast,2000);
                 }, 1000);
             </script>
            <?php
         }
     }
	 /* Get users based on date for pdf generation */
	 public function getUserByDate($mysqli,$_date){
	     $query = "SELECT * FROM registration WHERE created_at = '$_date'";
	     $results = $mysqli->query($query);
	     return $results;
     }
	 /**
	 *   User configurations  for the system
	 *
	 **/
	 public static function getUsers($mysqli){
	     $query = "SELECT first_name,last_name,middle_name FROM registration";
	     $results = $mysqli->query($query);
	     return $results;
     }
	 public static function getUserDetails($mysqli,$session_id){
	 	$query = "SELECT * FROM registration WHERE email = '$session_id'";
	 	$results = $mysqli->query($query);
	 	return $results;
	 }

	 /**
	 * Getting the total  of the db data for the dashboard
	 */
	 public static function getUserCount($mysqli){
	     $query = "SELECT COUNT(*) AS TOTAL FROM registration";
	     $results = $mysqli->query($query);
	     return $results;
     }

	 public static function getSchoolCount($mysqli){
	 	$query = "SELECT COUNT(*) AS TOTAL FROM tertiary_schools";
	 	$results = $mysqli->query($query);
	 	return $results;
	 }

	 public static function getCategoryCount($mysqli){
	 	$query = "SELECT COUNT(*) AS TOTAL FROM lessons";
	 	$results = $mysqli->query($query);
	 	return $results;
	 }

	 public static function getTopicCount($mysqli){
	 	$query = "SELECT COUNT(*) AS TOTAL FROM lesson_topics";
	 	$results = $mysqli->query($query);
	 	return $results;
	 }

	 public static function getContentCount($mysqli){
	 	$query = "SELECT COUNT(*) AS TOTAL FROM lesson_details";
	 	$results = $mysqli->query($query);
	 	return $results;
	 }

	 public static function getMenuCount($mysqli){
	 	$query = "SELECT COUNT(*) AS TOTAL FROM menu";
	 	$results = $mysqli->query($query);
	 	return $results;
	 }



 }
 ?>
