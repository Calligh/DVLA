<?php
require_once("connection.php");
extract($_REQUEST);

if(isset($_GET['id'])){
    
    $id = $_GET['id'];
    
}


     $query = "select * from admin_personal_info where id = $id ";
                            $select_profile_by_id = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($select_profile_by_id)){
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $mobile = $row['mobile'];
                                $address = $row['address'];
                                $hint_q = $row['hint_q'];                   
                                $answer = $row['answer'];
                            }

if(isset($_POST['update_profile'])){
                        
    
//$query= 
mysqli_query($connection,"UPDATE admin_personal_info SET name='".$name."' ,email='".$email."' , mobile='".$mobile."' , address='".$address."' , hint_q='".$hint_q."',answer='".$answer."' 
   WHERE id='".$id."' ");

 /*  $update_profile = mysqli_query($connection,$query);

	if($update_profile)
	{
	echo "done";
	}
    confirmQuery($update_profile); 
   */
}
?>

<form action="" method="post">

    
	<div class="form-group">  
        <label for="title">ID</label>
        <input value="<?php echo $id;?>" type="text" class="form-control" name="id">
    </div> 
    
	<div class="form-group">  
        <label for="title">NAME</label>
        <input value="<?php echo $name;?>" type="text" class="form-control" name="name">
    </div> 
    
    <div class="form-group">  
        <label for="title">EMAIL</label>
        <input value="<?php echo $email;?>" type="text" class="form-control" name="email">
    </div> 

  <div class="form-group">  
        <label for="title">MOBILE</label>
        <input value="<?php echo $mobile;?>" type="text" class="form-control" name="mobile">
    </div> 
	
	<div class="form-group">  
        <label for="title">ADDRESS</label>
        <input value="<?php echo $address;?>" type="text" class="form-control" name="address">
    </div> 
	
	<div class="form-group">  
        <label for="title">HINT QUESTION</label>
        <input value="<?php echo $hint_q;?>" type="text" class="form-control" name="hint_q">
    </div> 
	
	<div class="form-group">  
        <label for="title">ANSWER</label>
        <input value="<?php echo $answer;?>" type="text" class="form-control" name="answer">
    </div> 
	
    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_profile" value="Update Profile">
    </div>
    
</form>