 <?php
    ini_set( 'error_reporting', E_ALL);
   ini_set( 'display_errors', true );
 include '../../controllers/autoload.php';
 $overallTopics = new Lessons();
 ?>

 <i class="material-icons prefix">view_list</i>
<select class="icons" name="categories" id="categories" required>
  <option value="" disabled selected>Category Lists</option>
  <?php
   if (isset($_POST['menuID'])) {
       $menu_id = $_POST['menuID'];
     $details_cats = $overallTopics->getTopics($mysqli,$menu_id);
     while ($get_details_results = $details_cats->fetch_array(MYSQLI_BOTH)) {
         $category_id_fkTL = $get_details_results['id'];
         $title	 		  = $get_details_results['title'];
         $image 			  = $get_details_results['image'];
      ?>
   <option value="<?php echo "$category_id_fkTL"; ?>" data-icon="<?php echo "$image"; ?>" class="circle"><?php echo "$title"; ?></option>
 <?php
     }
   }
      ?>
</select>
<label>Select A Category</label>
