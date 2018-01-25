<?php
session_start();
$session_id = $_SESSION['data_id'];
include '../controllers/autoload.php';
$user_details = new Lessons();
$u_details_little = $user_details::getUserDetails($mysqli,$session_id);
$u_detail_data    = $u_details_little->fetch_array(MYSQLI_BOTH);

$user_fullname    = $u_detail_data['first_name']. " ". $u_detail_data['last_name'];
$user_image       = $u_detail_data['picture'];
include '../public/user_navbar.php';
 ?>