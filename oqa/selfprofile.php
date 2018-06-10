<?php 
session_start();
include "includes/admin_header.php"?>
<?php include "includes/connection.php"?>

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
                            <small>Author</small>
                        </h1>
                       
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th></th>          
                                </tr>
                            </thead>
							
                             <tbody>
                              
                          <?php 
                             $query = "select * from admin_personal_info where username='".$_SESSION['wname']."' ";
                            $select_posts = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($select_posts)){
                                $_SESSION['spid'] = $row['id']; 
								$id = $row['id'];
                                $username = $row['username'];
								$password = $row['password'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $mobile = $row['mobile'];
                                $address = $row['address'];
                                $hint_q = $row['hint_q'];
                                $ans = $row['answer'];
								
								
								echo "<tr>";
                                echo "<th scope='row'>ID</th>";
                                echo "<td>$id</td>";
								echo "</tr>";     
								
								echo "<tr>";
								echo "<th scope='row'>NAME</th>";
								echo "<td>$name</td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<th scope='row'>USER NAME</th>";
								echo "<td>$username</td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<th scope='row'>PASSWORD</th>";
								echo "<td>$password</td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<th scope='row'>EMAIL</th>";
								echo "<td>$email</td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<th scope='row'>MOBILE</th>";
								echo "<td>$mobile</td>";
								echo "</tr>";								
								
								echo "<tr>";
								echo "<th scope='row'>ADDRESS</th>";
								echo "<td>$address</td>";
								echo "</tr>";

								echo "<tr>";
								echo "<th scope='row'>HINT QUESTION</th>";
								echo "<td>$hint_q</td>";
								echo "</tr>";

								echo "<tr>";
								echo "<th scope='row'>ANSWER</th>";
								echo "<td>$ans</td>";
								echo "</tr>";

	
                            }
						
?>           
                                </tbody>
                            </table>
  <!--
  <div class="form-group">
        <input class="btn btn-primary" type="submit" name="Submit" value="Change Details">
    </div>
	-->

		
	
	
	
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php"?>