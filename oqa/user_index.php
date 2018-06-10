<?php

require_once("includes/connection.php");
extract($_REQUEST);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Free Online Quiz For Students:Dream</title>
<!-- Bootstrap Styles-->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- FontAwesome Styles-->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- Morris Chart Styles-->
<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
<!-- Custom Styles-->
<link href="assets/css/custom-styles.css" rel="stylesheet" />
<!-- Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container-fluid">
<!-- /. left SIDE start --> 
<?php include("user_left.php")?>
<!-- /. left SIDE end -->   

 
 
<!-- /. right SIDE start -->

<div class="right">  
<?php include("user_header.php")?>
<div class="body-text">
	<div > 
    <!--body here -->
    <p><h2><center>WELCOME TO QUIZ</center></h2><p>
     <p>&nbsp;Tests and Quizzes play an important role in learning and provide an array of benefits for both the learner and the instructor.</p>
    <p>&nbsp;Let's first look at how they improve the experience of the instructor</p>
    <p><h2><u>&nbsp;INSTRUCTIONS:</u></h2></p>
    <ul>
       <li>Total number of question :15</li>
       <li>Each question carry 1 mark</li>
       <li>No negative marking</li>
       <li>All the Best :)</li>
    </ul>
	
	    <p><h2><u>&nbsp;Choose an area for Test:</u></h2></p>

		<u><a href='indexjava.php' style='font-size:15px;'>Start a new Java Quiz</a></u><br><br>
		<u><a href='indexphp.php' style='font-size:15px;'>Start a new PHP Quiz</a></u><br><br>
		<u><a href='indexsql.php' style='font-size:15px;'>Start a new SQL Quiz</a></u><br><br>
		
    
    <br></br>
    </div>
</div>


</div>




<!-- /. right SIDE end-->  

</div>
<!--footer start-->
<?php include("user_footer.php")?>
<!--footer end-->



<!-- jQuery Js -->
<script src="dream-admin-free-web-template/assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="dream-admin-free-web-template/assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
</body>
</html>