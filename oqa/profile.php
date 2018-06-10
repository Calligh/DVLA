<?php include "includes/admin_header.php"?>
<body>

    <div id="wrapper">

     <?php include "includes/admin_navigation.php"?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>
                   
						  
						  <?php
						  
	    if(isset($_GET['src'])){
           $src = $_GET['src'];   
        }

        else{
            $src = "";
        }
    
        switch($src){
                
            case 'add_profile':
                include "includes/add_profile.php";
                break;
    
            case 'edit_profile':
                include "includes/edit_profile.php";
                break;
			
			default:      
                include "includes/view_all_profile.php";
                break;
        }
?>
                    </div>
                </div>    
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
   <?php include "includes/admin_footer.php"; ?>