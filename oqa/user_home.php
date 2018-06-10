<?php
extract($_REQUEST);
if(isset($Submit))
{
 header("location:user_index.php");
 exit();
}

if(isset($Admin))
{
 header("location:index.php");
 exit();
}

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
     <p><h2><b><center>THE IMPORTANCE OF TESTS & QUIZZES FOR STUDENTS IN LEARNING</center></b></h2></p>
    <p>&nbsp;Tests and Quizzes play an important role in learning and provide an array of benefits for both the learner and the instructor.</p>
    <p>&nbsp;Let's first look at how they improve the experience of the instructor</p>
    <p><h2>Less work to be done</h2></p>
    <p>&nbsp;Remember school, when tests lasted an hour at a set time of day and the instructor usually had to stay up late to grade them and then write detailed feedback for each and every individual student?</p>
    <p>&nbsp;We've already gone through how e-learning alleviates the need for testing to be done at a specific hour, but it also makes testing a hassle-free task as corrections are automated with a LMS. In the cases of "Essay Question" tests, e-learning systems are usually equipped with keyword tracking tools that grade depending on what has been mentioned in the essays. This isn't a fool-proof system but it helps save some time in comparison with long grading sessions.</p>
    
	</br>
	
     <form action="" method="post">
    <center><b><input name="Submit" type="Submit" value="Start Testing"></b></center><br>
	<center><b><input name="Admin" type="Submit" value="Admin Section"></b></center>
    </form>
    <!--body here -->
   
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