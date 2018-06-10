<html>
<body>
<head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'/>
<style>
  
div 
{
border:1px solid black; 
margin:10 0 0 0; 
padding:30 0 0 0;
max-width:1400px;
font-family:Verdana;
font-size:12px;
color:#58585A;
box-sizing:border-box;
}
         
table
{
border:2px solid black; 
margin-bottom:10px;    
} 
		 
td,th 
{
padding:5px; 
padding-bottom:5px; 
padding-top:5px; 
border:1px solid black;     
}

</style>  
		
		 <title>Java Quiz</title>  
		
		 <script>   
         window.location.hash='no-back-button';   
         window.location.hash='Again-No-back-button';  //again because google chrome don't insert first hash into history
         window.onhashchange=function() 
		 {
		  window.location.hash='no-back-button';     
         }
		 </script>  
		
		 </head>  
<body>


<?php
session_start();
require_once("includes/connection.php");

	if(!isset($_SESSION['score']))
	{
		$_SESSION['score'] = 0;
	}

if($_POST)
{
		$number = $_REQUEST['number'];
		$next = $number+1; 
		$total=10;	
		//--------------------------------
		$selected_choice = $_REQUEST['question'];
		$questext 		 = $_REQUEST['questext'];
		$atext   		 = $_REQUEST['atext'];
		$btext    		 = $_REQUEST['btext'];
		$ctext    		 = $_REQUEST['ctext'];
		$dtext    		 = $_REQUEST['dtext'];
		$anstext  		 = $_REQUEST['answer'];	
		$qno			 = $_REQUEST['qno'];		
		//--------------------------------
		
	if(!isset($_SESSION['ar'])) 
	{
 	 $ar =  array();
	}
	else
	{
  	 $ar = $_SESSION['ar'];
	}

	$ar[] = array($questext,$atext,$btext,$ctext,$dtext,$selected_choice,$anstext,$qno); 
	
	//0-question,1-a,2-b,3-c,4-d,5-marked Option,6-answer,7-qno

	$_SESSION['ar'] = $ar;


	
	echo "<br />";

		if($anstext[0] == $selected_choice){
			$_SESSION['score']++; //Answer is correct
		
		}
		
				$percentage = round(($_SESSION['score']/10.0)*100,2);

		
		if($number == $total)
		{
		echo $n1;
		?>	
		 <div class='container table-responsive'> 
		 <b><center>Test End</center></b><br> 
		 <center>You have completed the test and answered  <strong><?php echo $_SESSION['score']; echo " (".$percentage."%)";?></strong> of the questions correctly.</center> 
		
		 <br><table class='table-responsive'> 
		 <tr> 
		 <th>Question</th> 
		 <th>A</th>
		 <th>B</th>
		 <th>C</th>
		 <th>D</th>
		 <th>Marked Answer</th> 
		 <th>Correct Answer</th> 
		 </tr> 
		
		<?php
		
		for($i=0;$i<=$total-1;$i++)
				{
				echo "<tr >";	
						
						if($_SESSION['ar'][$i][6][0] == $_SESSION['ar'][$i][5])
						{
						echo "<td><font color='green'>",$_SESSION['ar'][$i][0],"</font></td>";
						echo "<td><font color='green'>",$_SESSION['ar'][$i][1],"</font></td>";
						echo "<td><font color='green'>",$_SESSION['ar'][$i][2],"</font></td>";
						echo "<td><font color='green'>",$_SESSION['ar'][$i][3],"</font></td>";
						echo "<td><font color='green'>",$_SESSION['ar'][$i][4],"</font></td>";
						echo "<td><font color='green'>",$_SESSION['ar'][$i][5],"</font></td>";
						echo "<td><font color='green'>",$_SESSION['ar'][$i][6],"</font></td>";
						}
						
						else 
						{
						echo "<td><font color='red'>",$_SESSION['ar'][$i][0],"</font></td>";
						echo "<td><font color='red'>",$_SESSION['ar'][$i][1],"</font></td>";
						echo "<td><font color='red'>",$_SESSION['ar'][$i][2],"</font></td>";
						echo "<td><font color='red'>",$_SESSION['ar'][$i][3],"</font></td>";
						echo "<td><font color='red'>",$_SESSION['ar'][$i][4],"</font></td>";
						echo "<td><font color='red'>",$_SESSION['ar'][$i][5],"</font></td>";
						echo "<td><font color='red'>",$_SESSION['ar'][$i][6],"</font></td>";	
						}
						
					echo "</tr>";	
				}
				
		//session_destroy(); 
		} 
	
		
			else
			{
				header("location: questions.php?n=".$next); //now the value of n is 2 
			}
				
		echo "</table>";
		echo "<u><a href='grade.php' style='font-size:15px;'>Detailed Result Summery</a></u><br>";
//		echo "<u><a href='user_home.php' style='font-size:15px;'>Start a new Java Quiz</a></u><br>";
		echo "<button onClick='window.print()'>Print</button>";
		echo "<br></div></body></html>";	

		}

?>
</body>
</html>