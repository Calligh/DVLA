<?php
   ini_set( 'error_reporting', E_ALL);
  ini_set( 'display_errors', true );
include '../../controllers/autoload.php';
$overallTopics = new Lessons();
?>

<i class="material-icons prefix">view_list</i>
<select class="icons" name="topic_id" required id="topics">
 <option value="" disabled selected>Topic Lists</option>
 <?php
  if (isset($_POST['menuID']) && !empty($_POST['menuID']) &&
      isset($_POST['categoryID'] && !empty($_POST['categoryID']))) {
      $menu_id = $_POST['menuID'];
      $category_id = $_POST['categoryID'];

    $details_cats = $overallTopics->getLessonTopics($mysqli,$category_id,$menu_id);
    while ($get_details_results = $details_cats->fetch_array(MYSQLI_BOTH)) {
        $topic_id_fkTL = $get_details_results['id'];
        $title	 		  = $get_details_results['topics'];
        $topic_fk_number 			  = $get_details_results['lessons'];

        $cat_details = $overallTopics->getLessonPortionForTopic($mysqli,$topic_fk_number);
      while ($cat_row_data = $cat_details->fetch_array(MYSQLI_BOTH)) {
          $cat_image = $cat_row_data['image'];
     ?>
     <option value="<?php echo "$topic_id_fkTL"; ?>" data-icon="<?php echo "$cat_image"; ?>" class="circle"><?php echo "$title"; ?> </option>
<?php
      }
    }
  }
?>
</select>
<label>Select A Topic</label>
