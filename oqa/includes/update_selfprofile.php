<?php session_start();
 include "admin_header.php"?>
<body>

    <div id="wrapper">

     <?php include "admin_navigation.php"?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-12">
<?php
require_once("connection.php");
extract($_REQUEST);
						
 $query = "select * from admin_personal_info where id='".$_SESSION['spid']."' ";
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
								}

if(isset($_POST['update_question']))
{
$query = mysqli_query($connection,"UPDATE admin_personal_info SET id='".$id."' ,username='".$username."' , password='".$password."' , name='".$name."' , email='".$email."',mobile='".$mobile."',
address='".$address."',hint_q='".$hint_q."',ans='".$ans."' WHERE qno='".$qno."' ");
}									
?>

<form action="" method="post">
    
	<div class="form-group">  
        <label for="title">ID</label>
        <input value="<?php echo $id;?>" type="text" class="form-control" name="id">
    </div> 
    
	<div class="form-group">  
        <label for="title">Name</label>
        <input value="<?php echo $name;?>" type="text" class="form-control" name="name">
    </div> 
    
    <div class="form-group">  
        <label for="title">Username</label>
        <input value="<?php echo $username;?>" type="text" class="form-control" name="username">
    </div> 

  <div class="form-group">  
        <label for="title">Password</label>
        <input value="<?php echo $password;?>" type="text" class="form-control" name="password">
    </div> 
	
	<div class="form-group">  
        <label for="title">Email</label>
        <input value="<?php echo $email;?>" type="text" class="form-control" name="email">
    </div> 
	
	<div class="form-group">  
        <label for="title">Mobile</label>
        <input value="<?php echo $mobile;?>" type="text" class="form-control" name="mobile">
    </div> 
	
	<div class="form-group">  
        <label for="title">Hint Question</label>
        <input value="<?php echo $hint_q;?>" type="text" class="form-control" name="hint_q">
    </div> 
	
    <div class="form-group">  
        <label for="title">Answer</label>
        <input value="<?php echo $ans;?>" type="text" class="form-control" name="ans">
    </div> 
	
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_profile" value="Update Info">
    </div>
    
</form>
 </div>
                </div>    
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
   <?php include "admin_footer.php"; ?>