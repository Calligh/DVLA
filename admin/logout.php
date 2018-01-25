<?php 
session_start();
unset($_SESSION['data_id']);
if (isset($_SESSION['data_id'])) {
	# code...
	header("Location:dashboard");
}elseif (!isset($_SESSION['data_id']) || empty($_SESSION['data_id'])) {
	# code...
	session_destroy();
	header("Location:login");
	exit();

}

?>