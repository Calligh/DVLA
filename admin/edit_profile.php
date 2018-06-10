<?php
include '../controllers/SessAdminController.php';
include '../controllers/autoload.php';
include '../public/admin_navbar.php';
$session_id = $_SESSION['data_id'];

$overallData = new Lessons();
$edit_data = $overallData->GetProfileAdmin($mysqli,$session_id);
$edit_admin_query = $edit_data->fetch_array(MYSQLI_BOTH);

$admin_firstname = $edit_admin_query["firstname"];
$admin_lastname  = $edit_admin_query["lastname"];
$admin_username  = $edit_admin_query["username"];

//Updating Admin Personal Info
if (isset($_POST['update'])){
    $admin_username = trim($_POST['username']);
    $admin_firstname = trim($_POST['firstname']);
    $admin_lastname  = trim($_POST['lastname']);
    $admin_picture   = "N/A";
    $update_admin = $overallData->EditProfileAdmin($mysqli,$admin_username,$admin_firstname,$admin_lastname,$admin_picture,$session_id);
}
?>
<div id="edit">
    <div class="row">
        <div class="col s2 m2 l2">
            <?php  include '../public/admin_sidenav.php'; ?>
        </div>
        <div class="col s10 m10 l10">
          <div class="container">
              <div class="col s12 m12 l12">
                  <div class="col s12 m12 l12">
                      <ul class="tabs">
                          <li class="tab col s6">
                              <a href="#test1"><i class="material-icons tab-icon">info</i>Personal Information</a>
                          </li>
                          <li class="tab col s6">
                              <a href="#test2"><i class="material-icons tab-icon">vpn_lock</i>Change Password</a>
                          </li>
                      </ul>
                      <div id="test1">
                          <div class="col s12 m12 l12">
                              <form action="admin/edit" method="post">
                                  <div class="input-field col s12">
                                      <i class="material-icons prefix">security</i>
                                      <input type="text" name="username" id="username" value="<?php echo $admin_username; ?>"/>
                                      <label for="username active">Username</label>
                                  </div>
                                  <div class="input-field col s12">
                                      <i class="material-icons prefix">perm_identity</i>
                                      <input type="text" name="firstname" id="firstname" value="<?php echo $admin_firstname;?>"/>
                                      <label for="firstname active">First Name</label>
                                  </div>
                                  <div class="input-field col s12">
                                      <i class="material-icons prefix">perm_identity</i>
                                      <input type="text" name="lastname" id="lastname" value="<?php echo $admin_lastname;?>"/>
                                      <label for="lastname active">Last Name</label>
                                  </div>
                                  <div class="input-field col s12">
                                      <button type="submit" name="update" class="btn block light-blue darken-2 waves-effect waves-ripple">Save Info</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <div id="test2">

                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
</div>
