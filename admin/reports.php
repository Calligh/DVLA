<?php
include '../controllers/SessAdminController.php';
	include '../controllers/autoload.php';
	include '../public/admin_navbar.php';
	$session_id = $_SESSION['data_id'];

//    ini_set( 'error_reporting', E_ALL);
//    ini_set( 'display_errors', true );
	//Instantiating the word concatenation

	$_resizeWords  = new WordTruncat();
	$overallTopics = new Lessons();

	//Getting registered user(s) count
    $get_count_users  = $overallTopics::getUserCount($mysqli);
    $total_users      = $get_count_users->fetch_array(MYSQLI_BOTH);
    $get_totalUsers   = $total_users['TOTAL'];

    //Getting the student
    $get_users = $overallTopics::getUsers($mysqli);
    $get_users_count = $get_users->num_rows;
    if ($get_users > 0){
        $user_array = array();
        while($row_user_data = $get_users->fetch_array(MYSQLI_BOTH)){
            $data = array(
                "FirstName" => $row_user_data["first_name"],
                "LastName"  => $row_user_data["last_name"],
                "MiddleName" => $row_user_data["middle_name"],
            );
            array_push($user_array,$data);
            $json_data = json_encode($data,JSON_PRETTY_PRINT);
            $filename = fopen("dir/data.json","w");
            fwrite($filename,$json_data);
            fclose($filename);
        }
    }

 ?>
 <div class="category">
 	<div class="row">
 		<div class="col s2 m2 l2">
 			<?php  include '../public/admin_sidenav.php'; ?>
 		</div>
		<div class="col s10 m10 l10" id="lesson_container">
            <div class="col s12 m12 l12">
                <div class="col s6 m6 l6">
                    <div class="col s12 m12 l12 card-panel waves-effect waves-ripple report-card">
                        <div class="card-panelm bg1 animated fadeIn" style="margin-top: 20px;">
                            <img src="public/images/books.svg" alt="Pdf Reports" class="responsive-img"/>
                        </div>
                        <h5>Download Individual Report(s)</h5>
                        <p>
                            <a href="#modal1" class="btn download">Download Report</a>
                        </p>

                    </div>
                </div>
                <div class="col s6 m6 l6">
                    <div class="col s12 m12 l12 card-panel waves-effect waves-ripple report-card">
                        <div class="card-panelm bg1 animated fadeIn" style="margin-top: 20px;">
                            <img src="public/images/boy2.svg" alt="Pdf Reports" class="responsive-img"/>
                        </div>
                        <h5>Download Registered Users List</h5>
                        <p>
                            <a href="#modal2" class="btn download">Download Report</a>
                        </p>
                    </div>
                </div>
                <div class="col s6 m6 l6">
                    <div class="col s12 m12 l12 card-panel waves-effect waves-ripple report-card">
                        <div class="card-panelm bg1 animated fadeIn" style="margin-top: 20px;">
                            <img src="public/images/university.svg" alt="Pdf Reports" class="responsive-img"/>
                        </div>
                        <h5>Download Schools List</h5>
                        <p>
                            <a href="" class="btn download">Download Report</a>
                        </p>
                    </div>
                </div>
            </div>

		</div>
 		
 	</div>
 </div>

<!--MODAL FOR INDIVIDUAL DOWNLOADS-->
<div class="modal" id="modal1" style="width: 40%;">
    <div class="modal-content">
        <div class="col s12 m12 l12">
            <div class="input-field col s12 m6 l6 stud-report">
                <i class="material-icons prefix">perm_identity</i>
                <input type="text" name="autocomplete" class="autocomplete" id="autocomplete" />
                <label for="autocomplete">Search Through <?php echo "$get_totalUsers";?> Student(s)</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn report">Generate Report</a>
        <a id="list-close" class="btn-flat modal-action modal-close waves-ripple waves-effect" style="text-transform: capitalize;">Close</a>
    </div>
</div>

<div class="modal" id="modal2" style="width:40%">
    <div class="modal-content">
        <div class="col s12 m12 l12">
            <div class="input-field col s12 m6 l6 stud-list">
                <i class="material-icons prefix">perm_identity</i>
                <input type="text" name="date" class="date" id="date" />
                <label for="date">Select Filter (Date Of Registry)</label>

            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a  href="admin/reports" target="_blank" class="btn report">Generate Report</a>
        <a  id="list-close" class="btn-flat modal-action modal-close waves-effect waves-ripple" style="text-transform: capitalize;">Close</a>
    </div>
</div>




