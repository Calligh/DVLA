<?php 
/**
*  Class for the database connection 
*/
class DBConnect
{
	
	public static function _init(){
	 	$DB_HOSTNAME = "localhost";
	 	$DB_USERNAME = "root";
		$DB_PASSWORD = "password";
		$DB_PORT = 3306;
		$DB_NAME = "dvla";

		$mysqli = new mysqli($DB_HOSTNAME,$DB_USERNAME,$DB_PASSWORD,$DB_NAME,$DB_PORT);
		if (!$mysqli->connect_error) {
			# code...
			return $mysqli;
		}
		else
		{
			echo "Something Bad Occurred To the database connection";
		}
	}

}
 ?>