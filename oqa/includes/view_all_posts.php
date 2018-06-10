<table class="table table-bordered table-hover">
<?php
session_start();
error_reporting(0);
require_once("connection.php");
?>

	<form action="#" method="post">
		<label for="title">Select Quiz Category</label>	
			<div class="form-group">
				<select class="form-control" name="quiz">
					<option value="questions">JAVA QUIZ</option>
					<option value="questionsphp">PHP QUIZ</option>
					<option value="questionssql">SQL QUIZ</option>
				</select>
	<br>
	    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="submit" value="Select Quiz">
		</div>

			</div>
	</form>

<?php
if(isset($_POST['submit'])){
$selected_val = $_POST['quiz'];  // Storing Selected Value In Variable
$_SESSION['table'] = $_POST['quiz'];
echo "<label for='title'>You have selected :</label>" ;
 // Displaying Selected Value
	
						if($selected_val=="questions")
						{
                            echo "<strong>JAVA QUIZ</strong>";
							$_SESSION['val'] = "JAVA QUIZ";
                        }
						
						if($selected_val=="questionsphp")
						  {
                            echo "<strong>PHP QUIZ</strong>";
							$_SESSION['val'] = "PHP QUIZ";
                         }
						 
							if($selected_val=="questionssql")
							{
                            echo "<strong>SQL QUIZ</strong>";
							$_SESSION['val'] = "SQL QUIZ";
							}
}
?>

    <thead>
    <tr>
        <th>ID</th>    
        <th>QUESTION</th>    
        <th>OPTION1</th>    
        <th>OPTION2</th>    
        <th>OPTION3</th>    
        <th>OPTION4</th>    
        <th>ANSWER</th>    
    </tr>
    </thead>
    
    <tbody>
                              
  <?php 

if($selected_val=="")
{
     $query = "select * from questions";
}
 
if($selected_val=="questions")
{
     $query = "select * from questions";
}

if($selected_val=="questionsphp")
{
    $query = "select * from questionsphp";
}
 
if($selected_val=="questionssql")
{
	$query = "select * from questionssql";
}
 
  $select_posts = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_posts))
{
        $qno = $row['qno'];
        $ques = $row['ques'];
        $a = $row['a'];
        $b = $row['b'];
        $c = $row['c'];
        $d = $row['d'];
        $ans = $row['ans'];

        echo "<tr>";
        echo "<td>$qno</td>";
        echo "<td>$ques</td>";
        echo "<td>$a</td>";
        echo "<td>$b</td>";
        echo "<td>$c</td>";
        echo "<td>$d</td>";
        echo "<td>$ans</td>";

echo "<td><a href='posts.php?source=edit_post&p_id={$qno}'>Edit</a></td>";    
echo "<td><a href='posts.php?delete={$qno}'>Delete</a></td>";
echo "</tr>";
    }
    
if(isset($_GET['delete'])){
    
    $qno = $_GET['delete'];
    
	
	if($_SESSION['table']=="questions")
	{
    $query = "DELETE from questions where qno = {$qno}";
	echo "deleted";							
	}
	
	if($_SESSION['table']=="questionssql")
	{
    $query = "DELETE from questionssql where qno = {$qno}";
	echo 
	"<div class='alert alert-danger'>
		<strong>DELETED!</strong> Question is Successfully Deleted from Database.
	</div>";							
	}
	
	if($_SESSION['table']=="questionsphp")
	{
    $query = "DELETE from questionsphp where qno = {$qno}";
	echo 
	"<div class='alert alert-danger'>
		<strong>DELETED!</strong> Question is Successfully Deleted from Database.
	</div>";							
	}
	
	
    $delete_query = mysqli_query($connection,$query);
    header("location:posts.php");

}
            
            
?>            
                                    
                                        
                                </tbody>
                            </table>