<?php
//instantiating the session variables
session_start();
if(!isset($_SESSION['data_id']))
{
    header('Location:login');
    exit();
}

if (isset($_SESSION['data_id'])) {
	
	$session_id = $_SESSION['data_id']; 
}
