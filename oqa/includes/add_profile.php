<?php
require_once("connection.php");
extract($_REQUEST);

if(isset($Submit)){

	 //$qno = $_POST['qno'];
	/* $ques = $_POST['question'];
	 $a = $_POST['a'];
	 $b = $_POST['b'];
	 $c = $_POST['c'];
	 $d = $_POST['d'];
	 $ans = $_POST['ans'];      */
   //$query = 
   mysqli_query($connection,"insert into admin_personal_info set name='".$name."' ,email='".$email."' , mobile='".$mobile."' , address='".$address."' , hint_q='".$hint_q."',answer='".$answer."' ");

 //   $query = "INSERT into questions (ques, a, b, c, d, ans)";
    
   // $query .= "VALUES('{$question}','{$a}','{$b}','{$c}','{$d}','{$ans}')";
    
    //$create_profile_query = mysqli_query($connection, $query);
    
	  
	//echo "SUCCESS";
	
  // confirmQuery($create_profile_query);
}

?>

<form action="" method="post">

    <div class="form-group">  
        <label for="title">ID</label>
        <input type="text" class="form-control" name="id">
    </div> 
    
    <div class="form-group">  
        <label for="title">NAME</label>
        <input type="text" class="form-control" name="name">
    </div> 

	<div class="form-group">  
        <label for="title">EMAIL</label>
        <input type="text" class="form-control" name="email">
    </div>
	
	<div class="form-group">  
        <label for="title">MOBILE</label>
        <input type="text" class="form-control" name="mobile">
    </div>
    
	
	<div class="form-group">  
        <label for="title">ADDRESS</label>
        <input type="text" class="form-control" name="address">
    </div>
    
	<div class="form-group">  
        <label for="title">HINT QUESTION</label>
        <input type="text" class="form-control" name="hint_q">
    </div>

	
	<div class="form-group">  
        <label for="title">ANSWER</label>
        <input type="text" class="form-control" name="answer">
    </div>

    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="Submit" value="Add Profile">
    </div>
    
</form>