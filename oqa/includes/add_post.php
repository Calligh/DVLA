<?php
require_once("connection.php");
extract($_REQUEST);

if(isset($Submit)){

	$selected_val = $_POST['quiz']; 
	
	
	if($selected_val=="questions")
	{
		$query = mysqli_query($connection,"insert into questions set ques='".$question."' ,a='".$a."' , b='".$b."' , c='".$c."' , d='".$d."',ans='".$ans."' ");                           
		echo
		"<div class='alert alert-success'>
		<strong>Added!</strong> Question is Successfully added in Database.
		</div>";
	}
	
	if($selected_val=="questionsphp")
	{
		$query = mysqli_query($connection,"insert into questionsphp set ques='".$question."' ,a='".$a."' , b='".$b."' , c='".$c."' , d='".$d."',ans='".$ans."' ");                           
		echo
		"<div class='alert alert-success'>
		<strong>Added!</strong> Question is Successfully added in Database.
		</div>";
	}                               
	
	if($selected_val=="questionssql")
	{
		$query = mysqli_query($connection,"insert into questionssql set ques='".$question."' ,a='".$a."' , b='".$b."' , c='".$c."' , d='".$d."',ans='".$ans."' ");                           
		echo
		"<div class='alert alert-success'>
		<strong>Added!</strong> Question is Successfully added in Database.
		</div>";
	}                               
    
  
  
  $create_post_query = mysqli_query($connection, $query);
   
   confirmQuery($create_post_query);
}

?>

<form action="" method="post">


    <div class="form-group">
		<label for="title">Select Quiz Category</label>	
			<select class="form-control" name="quiz">
				<option value="questions">JAVA QUIZ</option>
				<option value="questionsphp">PHP QUIZ</option>
				<option value="questionssql">SQL QUIZ</option>
			</select>
	</div>


    <div class="form-group">  
        <label for="title">QUESTION</label>
        <input type="text" class="form-control" name="question">
    </div> 
    
    <div class="form-group">  
        <label for="title">OPTION A</label>
        <input type="text" class="form-control" name="a">
    </div> 

	<div class="form-group">  
        <label for="title">OPTION B</label>
        <input type="text" class="form-control" name="b">
    </div>
	
	<div class="form-group">  
        <label for="title">OPTION C</label>
        <input type="text" class="form-control" name="c">
    </div>
    
	
	<div class="form-group">  
        <label for="title">OPTION D</label>
        <input type="text" class="form-control" name="d">
    </div>
    
	
	<div class="form-group">  
        <label for="title">ANSWER</label>
        <input type="text" class="form-control" name="ans">
    </div>

    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="Submit" value="Add Question">
    </div>
    
</form>