<?php
require_once("includes/connection.php");

function confirmQuery($result){
        
    global $connection;
        if(!result){
        die("QUERY FAILED ." . mysqli_error($connection));
        }
    }

function insert_categories(){
    
    global $connection;
    
    if(isset($_POST['submit'])){
                            $cat_title = $_REQUEST['cat_title'];
                            if($cat_title == "" || empty($cat_title)){
                                echo "This field Should Not be Empty";
                            }
                            else{
                                $query = "insert into categories(cat_title)";
                                $query .= "values('{$cat_title}')";
                                $create_category_query = mysqli_query($connection,$query);
                                if(!$create_category_query){
                                    die('query failed'.mysqli_error($connection));
                                }
                           }
                       }   
    
}

function findAllCategories(){
    
    global $connection;
              
                            $query = "select * from categories";
                            $select_catagories = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_array($select_catagories)){
                             $cat_id = $row[0];  
                             $cat_title = $row[1];
                              echo "<tr>";
                              echo "<td>{$cat_id}</td>";
                              echo "<td>{$cat_title}</td>";
                        echo "<td><a href='catagories.php?delete={$cat_id}'>Delete</a></td>";
                        echo "<td><a href='catagories.php?edit={$cat_id}'>Edit</a></td>";
                            echo "</tr>";
                            }
    
}

function deleteCategories(){
    
    global $connection;
              
     if(isset($_GET['delete'])){
                                $the_cat_id = $_GET['delete'];
                                $query = "DELETE from categories WHERE cat_id={$the_cat_id}";
                                $delete_query = mysqli_query($connection,$query);
                                    header("location:catagories.php");
                            }
    
}


?>