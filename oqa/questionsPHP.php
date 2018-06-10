<?php 
session_start();
require_once("includes/connection.php");
extract($_REQUEST);

$number = (int) $_GET['n']; //starting value 1

//for unique values we use this array
$servedQuestions = array();
while(count($servedQuestions) <= 9) {
    $n1 = mt_rand(1,10);		//for random questions from 150 pool of questions
    if (in_array($n1, $servedQuestions)){ continue;
	//
	}
	$q = mysqli_query($connection,"select * from questionsphp WHERE qno = '".$n1."'");
    $servedQuestions[] = $n1;
}

//$q=mysqli_query($mysqli,"select * from questions ORDER BY rand() LIMIT 15");
$a=mysqli_fetch_array($q);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="StyleSheet.css" type="text/css">

<title>PHP QUIZ</title>

	<script>
        function ValidateForm() {

            var bChecked = false;

            for (var i = 0; i < document.MainForm.question.length; i++) {
                if (document.MainForm.question[i].checked) {
                    bChecked = true;
                }
            }

            if (!bChecked) alert("Please select one of the options.");

            return bChecked;
        }
		
		
		 window.location.hash='no-back-button';   
         window.location.hash='Again-No-back-button';  
         window.onhashchange=function() 
		 {
		  window.location.hash='no-back-button';     
         }
	</script>
</head>

<body bgcolor="#FFFFFF" topmargin=5 leftmargin=5 marginheight=5 marginwidth=5>

 <form name="MainForm" method="post" action="resultphp.php" onSubmit="return(ValidateForm());">
			
	<div id="Content">
	
	<br /><br />
  	
	<h1>Question <?php echo $number;?> of 10. </h1> 
      <br /><br />
        
		<?php echo $a[1]?>
		
		<br /><br />
		      
			  <input type="radio" name="question" value="a" />
              <?php echo $a[2]?>
			  <br /><br />
		  
			  <input type="radio" name="question" value="b" />
              <?php echo $a[3]?></label>
        	  <br /><br />
		  
		      <input type="radio" name="question" value="c" />
              <?php echo $a[4]?>
		      <br /><br />
		 	  
			  <input type="radio" name="question" value="d" />
              <?php echo $a[5]?>
		      <br /><br />
			  
			  <input class='submit'type="submit"   	value="Submit" name="Submit" 	/>
		      <input type="hidden" name="number"    value="<?php echo $number; ?>"  /> <!--number from 1 to 15-->
			  <input type="hidden" name="qno"       value="<?php echo $a[0]; ?>" 	/>
			  <input type="hidden" name="questext"  value="<?php echo $a[1]; ?>" 	/>
			  <input type="hidden" name="atext" 	value="<?php echo $a[2]; ?>" 	/>
   			  <input type="hidden" name="btext" 	value="<?php echo $a[3]; ?>" 	/>
			  <input type="hidden" name="ctext" 	value="<?php echo $a[4]; ?>" 	/>
			  <input type="hidden" name="dtext" 	value="<?php echo $a[5]; ?>" 	/>
			  <input type="hidden" name="answer" 	value="<?php echo $a[6]; ?>" 	/>

		  </div>
		  </form>
           
</body>
</html>
