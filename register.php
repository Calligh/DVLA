<?php
	require_once 'controllers/autoload.php';
	include 'public/navbar.php';
	ini_set( 'error_reporting', E_ALL);
    ini_set( 'display_errors', true );
	//Instantiating the Lesson object
	$school_list = new Lessons();
	if (isset($_POST['regAndPayment'])) {
		//Personal details here
		$firstname = trim($_POST['firstname']);
		$lastname = trim($_POST['lastname']);
		$middlename = trim($_POST['middlename']);
		$email   = trim($_POST['email']);
		$password = md5($_POST['password']);
		$dob     = trim($_POST['date']);
		$gender  = trim($_POST['gender']);
		$address = trim($_POST['address']);
		$phone   = trim($_POST['phone_number']);
		$mobile  = trim($_POST['mobile_number']);
		$region  = trim($_POST['region']);
		$school_name  = trim($_POST['schools']);
		$level    = trim($_POST['level']);
		$hostel   = trim($_POST['hostel']);
		$student_id = trim($_POST['student_id']);
		$course = trim($_POST['course']);
		$country = trim($_POST['nationality']);
		$city    = trim($_POST['city']);
		
		$mm_SelectNetwork = trim($_POST['network']);
		$mm_Number        = trim($_POST['number']);
		$mm_confNumber    = trim($_POST['cnumber']);
		$mm_Amt  		  = trim($_POST['amount']);
		$mm_RefNumber     = trim($_POST['ref_number']);

		//Pictures will be configured differently here
		//configs start here
		$name = $_FILES['userfile']['name'];
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES['userfile']['name']);

		//Select file type
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		//valid file ext
		$extensions_arr = array("jpg","jgeg","png","gif","svg","webp");
		//checking the extension
		if (in_array($imageFileType, $extensions_arr)) {
			//To base64
			$image_base64 = base64_encode(file_get_contents($_FILES['userfile']['tmp_name']));
			$image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
		}
	 	$registration = $school_list->register($mysqli,$firstname,$lastname,$middlename,$dob,$gender,$country,$address,$phone,$mobile,$email,$password,$region,$school_name,$level,$hostel,$student_id,$course,$image,$mm_SelectNetwork,$mm_Number,$mm_confNumber,$mm_Amt,$mm_RefNumber);
	 	//Upload file
	 	move_uploaded_file($_FILES['userfile']['tmp_name'], $target_dir.$name);
	 } 
 ?>
 <style type="text/css">
 	html,body{
 		background-color: #eeeeee;
 	}
 </style>
 <div class="container">
 	<div class="row">
 	 <div class="col s12 m12 l12 card-panel animated fadeIn" style="margin-top: 40px;">
 		<div class="content_header12903">
 			<a  id="register" class="btn-floating grey lighten-1 z-depth-0">
 				<i class="material-icons">credit_card</i>
 			</a>
 			<span id="register">Payment</span>
 			<a  id="payment" class="btn-floating grey lighten-1 z-depth-0"><i class="material-icons">person_add</i></a>
 			<span id="payment">Registration</span>
 		</div>
 		<div class="col s12 m12 l12 content_body12903 ">
 		   <form method="post" action="register" id="regPay12345" enctype="multipart/form-data">
 			   <div id="registration" class="col s12 m12 l12">
 			   		<div class="input-field col s12 m6 l6">
 						<i class="material-icons prefix">credit_card</i>
 						<input type="text" name="student_id" id="student_id" />
 						<label for="student_id">Student ID</label>
 					</div>
 					<div class="input-field col s12 m6 l6">
 						<i class="material-icons prefix">account_balance</i>
						 <select name="schools" required="required" id="schools">
							<option value="" disabled selected>Select Your School</option>
								<optgroup label="Institutions">
								<?php 
									$details_schools = $school_list->getSchoolList($mysqli);
									while ($get_details_results = $details_schools->fetch_array(MYSQLI_BOTH)) {
											$school_value = $get_details_results['name'];
								 ?>
									<option value="<?php echo "$school_value"; ?>"><?php echo "$school_value"; ?></option>
								 <?php
								}
								 ?>
								</optgroup>
						</select>
 					</div>
 					<div class="input-field col s12 m6 l6">
 						<i class="material-icons prefix">account_circle</i>
 						<input type="text" name="firstname" id="firstname" />
 						<label for="firstname">First Name</label>
 					</div>
 					<div class="input-field col s12 m6 l6">
 						<i class="material-icons prefix">account_circle</i>
 						<input type="text" name="lastname" id="lastname"/>
 						<label for="lastname">Last Name</label>
 					</div>
 					<div class="input-field col s12 m6 l6">
 						<i class="material-icons prefix">account_circle</i>
 						<input type="text" name="middlename" id="middlename"/>
 						<label for="middlename">Middle Name (Optional)</label>
 					</div>
 					<div class="input-field col s12 m6 l6">
 						<i class="material-icons prefix">books</i>
 						<input type="text" name="course" id="course"/>
 						<label for="course">Course</label>
 					</div>
 					<div class="input-field col s12 m6 l6">
 						<i class="material-icons prefix">view_carousel</i>
						 <select name="level" required="required" id="level">
							<option value="" disabled selected>Choose Your Level</option>
								<optgroup label="Levels">
									<option value="100">Level 100</option>
									<option value="200">Level 200</option>
									<option value="300">Level 300</option>
									<option value="400">Level 400</option>
								</optgroup>
						</select>
 					</div>
 					<div class="input-field col s12 m6 l6">
 						<i class="material-icons prefix">store</i>
 						<input type="text" name="hostel" id="hostel"/>
 						<label for="hostel">Hostel Name</label>
 					</div>
 					<div class="input-field col s12 m6 l6">
 						<i class="material-icons prefix">date_range</i>
 						<input type="text" name="date" id="date"  style="color: #929292;"/>
 						<label for="date">Date Of Birth</label>
 					</div>
 					<div class="input-field col s12 m6 l6">
 						<i class="material-icons prefix">supervisor_account</i>
						 <select name="gender" required="required" id="gender">
							<option value="" disabled selected>Choose Your Gender</option>
								<optgroup label="Gender">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</optgroup>
						</select>
 					</div>
 					<div class="input-field col s12 m6 l6">
 						<i class="material-icons prefix">public</i>
 						<input type="text" name="nationality" id="nationality"/>
 						<label for="nationality">Nationality</label>
 					</div>
 					<div class="input-field col s12 m6 l6 ">
 						<i class="material-icons prefix">location_on</i>
 						<input type="text" name="address" id="address"/>
 						<label for="address">Address</label>
 					</div>
 					<div class="input-field col s12 m6 l6 ">
 						<i class="material-icons prefix">phone</i>
 						<input type="text" name="phone_number" id="phone_number"/>
 						<label for="phone_number">Phone Number</label>
 					</div>
 					<div class="input-field col s12 m6 l6 ">
 						<i class="material-icons prefix">phone</i>
 						<input type="text" name="mobile_number" id="mobile_number"/>
 						<label for="mobile_number">Mobile Number</label>
 					</div>
 					<div class="input-field col s12 m6 l6 ">
 						<i class="material-icons prefix">email</i>
 						<input type="email" name="email" id="email"/>
 						<label for="email">Email Address</label>
 					</div>
 					<div class="input-field col s12 m6 l6 ">
 						<i class="material-icons prefix">lock</i>
 						<input type="password" name="password" id="password"/>
 						<label for="password">Password</label>
 					</div>
 					<div class="input-field col s12 m6 l6 ">
 						<i class="material-icons prefix">map_marker</i>
 						<input type="text" name="region" id="region"/>
 						<label for="region">Region (Optional)</label>
 					</div>
 					<div class="input-field col s12 m6 l6 ">
 						<i class="material-icons prefix">place</i>
 						<input type="text" name="city" id="city"/>
 						<label for="city">City</label>
 					</div>

 					<div class="input-field col s12 m6 l6">
 						<div class="file-field input-field">
					      <div class="btn light-blue darken-3">
					        <span>Upload</span>
					        <input type="file" name="userfile" id="imagePath">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
 					</div>
 				</div>
 				<div id="payment" class="col s12 m12 l12">
 				<!-- 	<div class="col s12 m10 l10 offset-m1 offset-l1" id="payment-plan">
 						<div class="col s6 m6 l6">
 							<div class="bank-money waves-effect waves-block waves-light">
 								<img src="public/images/bank.svg" class="responsive-img"/>
 								<span style="position: relative;top: 50%;left: 35%;">Bank Payment</span>
 							</div>
 						</div>
 						<div class="col s6 m6 l6">
 							<div class="mobile-money waves-effect waves-block waves-light">
 								<img src="public/images/smartphone-1.svg" class="responsive-img"/>
 								<span style="position: relative;top: 50%;left: 25%;">Mobile Money Payment</span>
 							</div>
 						</div>
 					</div> -->
 					<!-- Codes for the payment by bank or mobile money -->
 					<div class="col s12 m10 l10 offset-m1 offset-l1" id="selected-plan">
 						<div class="col s12 m12 l12" id="show_bankPayment12908">
 						
 						</div>
 						<div class="col s12 m12 l12" id="show_mobilePayment39082">
 							<div class="input-field col s12 m12 l12">
		 						<i class="material-icons prefix">sim_card</i>
								 <select name="network" required="required" id="network">
									<option value="" disabled selected>Choose A Network</option>
										<optgroup label="ISPs">
											<option value="MTN">MTN</option>
											<option value="Vodafone">Vodafone</option>
											<option value="Tigo">Tigo</option>
											<option value="airtel">Airtel</option>
										</optgroup>
								</select>
		 					</div>
 							<div class="input-field col s12 m6 l6">
 								<i class="material-icons prefix">phone</i>
 								<input type="number" name="number" id="number" class="number"/>
 								<label for="number">Mobile Number</label>
 							</div>
 							<div class="input-field col s12 m6 l6">
 								<i class="material-icons prefix">phone</i>
 								<input type="number" name="cnumber" id="cnumber" class="cnumber"/>
 								<label for="cnumber">Mobile Number (Confirmation)</label>
 							</div>
 							<div class="input-field col s12 m6 l6">
 								<i class="material-icons prefix">attach_money</i>
 								<input type="number" name="amount" id="amount" class="amount"/>
 								<label for="amount">Amount</label>
 							</div>
 						<!-- 	<div class="input-field col s12 m6 l6">
 								<i class="material-icons prefix">fiber_pin</i>
 								<input type="number" name="pin" class="pin" id="pin"/>
 								<label for="pin">Pin</label>
 							</div>
 							<div class="input-field col s12 m6 l6">
 								<i class="material-icons prefix">fiber_pin</i>
 								<input type="number" name="cpin" class="cpin" id="cpin"/>
 								<label for="cpin">Pin (Confirmation)</label>
 							</div> -->
 							<div class="input-field col s12 m6 l6">
 								<i class="material-icons prefix">receipt</i>
 								<input type="number" name="ref_number" class="ref_number" id="ref_number"/>
 								<label for="ref_number">Reference Number</label>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div id="controllers" class="col s12 m12 l12">
 					<div class="input-field col s12 m12 12" style="margin-bottom: 15px;">
 						<a id="previous" class="btn-floating light-blue darken-3 left waves-effect waves-light waves-circle" disabled>
 							<i class="material-icons">chevron_left</i>
 						</a>
 						<a  id="next" class="btn-floating light-blue darken-3 right waves-effect waves-light waves-circle">
 							<i class="material-icons">chevron_right</i>
 						</a>
 						<!-- Codes for the submission for -->
 						<button type="submit" name="regAndPayment" class="btn light-blue darken-3 waves-effect waves-light block right" id="submitButton">Submit</button>
 					</div>
 				</div>
 			</form>
 		</div>
 	</div>
 	</div>
 </div>