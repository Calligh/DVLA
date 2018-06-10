<?php include "includes/admin_header.php"?>
<?php include "includes/connection.php"?>
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
                      <div class="col-lg-6">
                      
                          <?php insert_categories();  ?>
                        
                  <form action="" method="post">
                           <div class="form-group">
                               <label for="cat-title">Add Category</label>
                             <input type="text" class="form-control" name="cat_title">
                            </div>
                           <div class="form-group">
                             <input type="submit" class="btn btn-primary" name="submit" value="Add_Category">
                            </div>
                        </form>

                            <?php
							//add catagories
							/*
							if(isset($submit)){
							CREATE TABLE IF NOT EXISTS '".$_GET['cat_title']."' 
  `qno` int(11) DEFAULT NULL,
  `ques` text,
  `a` text,
  `b` text,
  `c` text,
  `d` text,
  `ans` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
                          }
*/							
							
                             //UPDATE CATEGORIES                                 
                          if(isset($_GET['edit'])){
                              $cat_id = $_GET['edit'];
                              include "includes/update_categories.php";
                          }
                          ?>  
                          
                        </div>
                     <div class="col-lg-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>    
                                    <th>Category Title</th>    
                                </tr>
                                </thead>
                                
                                <tbody>
                                    
                        <?php findAllCategories(); ?>
                                    
                            <?php       
                           deleteCategories();
                            ?>        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
   <?php include "includes/admin_footer.php"?>