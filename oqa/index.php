<?php 
session_start();
include("includes/connection.php");

if($_SESSION['wname']=="")
{
	header("location: admin_login.php");
	exit();
}
include "includes/admin_header.php";

?>
<body>

    <div id="wrapper">

     <?php include "includes/admin_navigation.php"?>
        
        <?php if($connection) echo "asd";?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        
                        <h1 class="page-header">
                           Welcome to Admin 
                            <small><?php $_SESSION['wname']?></small>
                        </h1>
                       
                           <div class="body-text">
								<div > 
								    <p><h2><b><center>THE IMPORTANCE OF TESTS & QUIZZES FOR STUDENTS IN LEARNING</center></b></h2></p>
								    <p>&nbsp;Tests and Quizzes play an important role in learning and provide an array of benefits for both the learner and the instructor.</p>
								    <p>&nbsp;Let's first look at how they improve the experience of the instructor</p>
								    <p><h2>Less work to be done</h2></p>
								    <p>&nbsp;Remember school, when tests lasted an hour at a set time of day and the instructor usually had to stay up late to grade them and then write detailed feedback for each and every individual student?</p>
								    <p>&nbsp;We've already gone through how e-learning alleviates the need for testing to be done at a specific hour, but it also makes testing a hassle-free task as corrections are automated with a LMS. In the cases of "Essay Question" tests, e-learning systems are usually equipped with keyword tracking tools that grade depending on what has been mentioned in the essays. This isn't a fool-proof system but it helps save some time in comparison with long grading sessions.</p>
								    <!--body here -->
								    <br></br>     
							    </div>
							</div>
 
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php"?>