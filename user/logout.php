<?php
session_start();
unset($_SESSION['data_id']);
session_destroy();
header("Location:../index");

 ?>