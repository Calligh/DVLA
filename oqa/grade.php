<?php
session_start();
extract($_REQUEST);
$total=10;
$wrong = $total-$_SESSION['score'];
$percentage = round(($_SESSION['score']/10.0)*100,2);

if(isset($restart))
{
	
	header("location:user_index.php");
	exit;
}

if(isset($feedback))
{
	
	header("location:user_feedback.php");
	exit;
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
<style type="text/css">

.style1 {
	color: #000000;
	font-weight: bold;
	font-size:25px;
}
.input
{
	color:#225081;
	font-family:Arial, Helvetica, sans-serif;
	font-weight:bold;
	
}

.ur_input
{
	font-weight:normal;
	font-family:Arial, Helvetica, sans-serif;
	color:#000;
	text-align: right;
	background-color:#eeeeee;
}

.mee
{
color:#000;
position:relative;
left:200px;
}

.mee1
{
color:#000;
position:relative;
left:50px;
}
.style3 {
	color: #009966;
	font-size: 24px;
}
.style4 {
	font-size: 24px;
	color: #FF0000;
}
.style6 {font-size: 18px}
</style>

</head>
<body>
<div class="container-fluid">
<!-- /. left SIDE start --> 

<div class="left">
    <div class="logo"><img src="images/logo.png" width="300px" height="250px"></div>
    

<!-- /. NAV SIDE start  -->    
    

<!-- /. NAV SIDE end -->        
        
</div>
<!-- /. left SIDE end -->   

 
 
<!-- /. right SIDE start -->

<div class="right">  
<?php include("user_header.php")?>
<div class="body-text">
	<div > 
    <!--body here -->
     <br></br><div class="style1">
   <center>RESULT<center></div>
   <br></br>
     <form method="post">
<table width="300" border="1" align="center" cellpadding="0">
  <tr>
    <td height="73"><div class="input">&nbsp;TOTAL QUESTIONS : <label><span class="style6">10</span></label></div></td>
  </tr>
  <tr>
    <td height="79"><div class="input">&nbsp;CORRECT QUESTION :
      <label class="ur_input"><span class="style3"><?php echo $_SESSION['score'];?></span></label></div></td>
  </tr>
  <!--<tr>
    <td height="83"><div class="input">&nbsp;INCORRECT QUESTION :  <label class="ur_input"><?php echo $_SESSION['qw'];?></label></div></td>
  </tr>-->
  <tr>
    <td height="83"><div class="input">&nbsp;WRONG QUESTION :  <label class="ur_input">  <span class="style4"><?php echo $wrong;?></span></label>
      </div></td>
  </tr>
  <tr>
    <td height="84"><div class="input">&nbsp;SCORE :<label class="ur_input"><span class="style3"><?php echo $_SESSION['score']."/"."10";?></span></label></div></td>
  </tr>
  <tr>
    <td height="84"><div class="input">&nbsp;PERCENTAGE SCORE :<label class="ur_input"><span class="style3"><?php echo $percentage;?></span></label>
    %</div></td>
  </tr>
  
  <tr>
    <td height="84">
	
	</br>
	<u><a href='user_home.php' style='font-size:15px;'>Start A New  Quiz</a></u><br>
    <label class="mee1"></label>
   <!-- <input type="submit" name="feedback" id="button" value="feedback"> -->
    
    <?php 		session_destroy(); ?>    </td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</form>
    
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