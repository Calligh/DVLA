<?php
session_start();
	include '../controllers/autoload.php';
	include '../public/admin_navbar.php';
	$session_id = $_SESSION['data_id'];
ini_set( 'error_reporting', E_ALL);
ini_set( 'display_errors', true );
	//Instantiating the word concatenation
	$_resizeWords  = new WordTruncat();
	$overallTopics = new Lessons();
 ?>
 <div class="category">
 	<div class="row">
 		<div class="col s2 m2 l2">
 			<?php  include '../public/admin_sidenav.php'; ?>
 		</div>
		<div class="col s10 m10 l10" id="lesson_container">
			<div class="col s12 l12 m12" id="main-body">
                <?php
                $user_data_array = array();
                $user_data = $overallTopics->registeredUsers($mysqli);
                $user_data_count = $user_data->num_rows;
                if ($user_data_count > 0)
                {
                    while($user_data_row = $user_data->fetch_array(MYSQLI_BOTH)){
                        $user_array = array(
                            "Firstname" => $user_data_row["first_name"],
                            "Lastname"  => $user_data_row["last_name"],
                            "Middlename" => $user_data_row["middle_name"],
                            "DateOfBirth" => $user_data_row["DOB"],
                            "Gender"  => $user_data_row["gender"],
                            "Country" => $user_data_row["country"],
                            "Email"   => $user_data_row["email"],
                            "Picture" => $user_data_row["picture"],
                            "Course"  => $user_data_row["course"],
                            "Hostel"  => $user_data_row["hostel"],
                            "Level"   => $user_data_row["level"],
                            "School_Name" => $user_data_row["name_school"]
                        );
                        array_push($user_data_array,$user_array);
                        foreach ($user_data_array as $key => $value) {
                            ?>
                            <div class="col s4 m4 l4">
                                <div class="card-panel" id="user-card">
                                    <div class="user-up-panel">
                                        <div class="user-fullname">
                                            <?php echo $_resizeWords::truncatFunction($value["Firstname"]. ' ' . $value["Lastname"] . ' ' . $value["Middlename"],26); ?><br>
                                            <span class="chip" style="color: #212121;"><?php echo $value["Email"];?></span>
                                        </div>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="user-image z-depth-1">
                                        <img src="<?php echo $value["Picture"] ?>" class="responsive-img">
                                    </div>
                                    <div class="user-down-panel"></div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                }
                else{
                    ?>
                    <div class="card-panelm bg animated fadeIn" style="margin-top: 10px;">
                        <img src="public/images/boy.svg" alt="Help Desk" class="responsive-img help"/>
                    </div>
                    <h5 class="center-align grey-text text-darken-3">No Registered User(s) Yet !</h5>
                    <h5 class="center-align grey-text text-darken-3 small-text"><a href="admin/dashboard" class="waves-effect waves-ripple waves-circle"><i class="material-icons">arrow_back</i></a> Go To Dashboard </h5>
                <?php
                }

                ?>
            </div>
		</div>
 	</div>
 </div>


