<?php
session_start();
require_once("connection.php");
extract($_REQUEST);

if(isset($_GET['p_id'])){
    
    $qno = $_GET['p_id'];
    
}
						if(!isset($_SESSION['table']))
						{
						         $query = "select * from questions where qno = $qno ";
						}

						if($_SESSION['table']=="questions")
						{
                                 $query = "select * from questions where qno = $qno ";
                        }
						
						if($_SESSION['table']=="questionsphp")
						{
                                 $query = "select * from questionsphp where qno = $qno ";
                        }
						
						if($_SESSION['table']=="questionssql")
						{
                                 $query = "select * from questionssql where qno = $qno ";
                        }
						
                            $select_posts_by_id = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($select_posts_by_id)){
                                $qno = $row['qno'];
                                $ques = $row['ques'];
                                $a = $row['a'];
                                $b = $row['b'];
                                $c = $row['c'];
                                $d = $row['d'];                   
                                $ans = $row['ans'];
                            }

if(isset($_POST['update_question'])){
                        
						if($_SESSION['table']=="questions")
						{
						$query = mysqli_query($connection,"UPDATE questions SET ques='".$question."' ,a='".$a."' , b='".$b."' , c='".$c."' , d='".$d."',ans='".$ans."' 
						WHERE qno='".$qno."' ");

						echo "<div class='alert alert-info'>
							<strong>SUCCESS!</strong> Your Change is Successfully Updated.
						</div>";						
						//echo "SUCCESSFULLY UPDATED";
                        }
						
						if($_SESSION['table']=="questionsphp")
						{
						$query = mysqli_query($connection,"UPDATE questionsphp SET ques='".$question."' ,a='".$a."' , b='".$b."' , c='".$c."' , d='".$d."',ans='".$ans."' 
						WHERE qno='".$qno."' ");	
                        echo "<div class='alert alert-info'>
							<strong>SUCCESS!</strong> Your Change is Successfully Updated.
						</div>";
						}
						
						if($_SESSION['table']=="questionssql")
						{
						$query = mysqli_query($connection,"UPDATE questionssql SET ques='".$question."' ,a='".$a."' , b='".$b."' , c='".$c."' , d='".$d."',ans='".$ans."' 
						WHERE qno='".$qno."' ");	
						echo "<div class='alert alert-info'>
							<strong>SUCCESS!</strong> Your Change is Successfully Updated.
						</div>";
                        }
						
						
    $update_post = mysqli_query($connection,$query);

	if($update_post)
	{
	echo "done";
	}
    confirmQuery($update_post); 

	
}


?>

<form action="" method="post">


    
    <div class="form-group">  
       
                <label for="title"><?php echo $_SESSION['val']?></label>

    </div> 
    
	<div class="form-group">  
        <label for="title">Question Number</label>
        <input value="<?php echo $qno;?>" type="text" class="form-control" name="qno">
    </div> 
    
	<div class="form-group">  
        <label for="title">Question</label>
        <input value="<?php echo $ques;?>" type="text" class="form-control" name="question">
    </div> 
    
    <div class="form-group">  
        <label for="title">OPTION A</label>
        <input value="<?php echo $a;?>" type="text" class="form-control" name="a">
    </div> 

  <div class="form-group">  
        <label for="title">OPTION B</label>
        <input value="<?php echo $b;?>" type="text" class="form-control" name="b">
    </div> 
	
	<div class="form-group">  
        <label for="title">OPTION C</label>
        <input value="<?php echo $c;?>" type="text" class="form-control" name="c">
    </div> 
	
	<div class="form-group">  
        <label for="title">OPTION D</label>
        <input value="<?php echo $d;?>" type="text" class="form-control" name="d">
    </div> 
	
	<div class="form-group">  
        <label for="title">ANSWER</label>
        <input value="<?php echo $ans;?>" type="text" class="form-control" name="ans">
    </div> 
	
    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_question" value="Update Question">
    </div>
    
</form>