	     <table class="table table-bordered table-hover">
								
								<thead>
                                <tr>
                                    <th>ID</th>    
                                    <th>NAME</th>    
                                    <th>EMAIL</th>    
                                    <th>MOBILE</th>    
                                    <th>ADDRESS</th>    
                                    <th>HINT QUESTION</th>    
                                    <th>ANSWER</th>    
                                </tr>
                                </thead>

                        <tbody>
                              <?php	
                             $query = "select * from admin_personal_info";
                            $select_posts = mysqli_query($connection,$query);
                            while($row = mysqli_fetch_assoc($select_posts)){
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $mobile = $row['mobile'];
                                $address = $row['address'];
                                $hint_q = $row['hint_q'];
                                $ans = $row['answer'];

                                echo "<tr>";
                                echo "<td>$id</td>";
                                echo "<td>$name</td>";
                                echo "<td>$email</td>";
                                echo "<td>$mobile</td>";
                                echo "<td>$address</td>";
                                echo "<td>$hint_q</td>";
                                echo "<td>$ans</td>";
                     echo "<td><a href='profile.php?src=edit_profile&id={$id}'>Edit</a></td>";    
                     echo "<td><a href='profile.php?delete={$id}'>Delete</a></td>";
                                echo "</tr>";
                                
                                
                            }
                            
                        if(isset($_GET['delete'])){
                            
                            $id = $_GET['delete'];
                            
                            $query = "DELETE from admin_personal_info where id = {$id}";

                            $delete_query = mysqli_query($connection,$query);
                            header("location:profile.php");

                        }
                                    
                                    
                        ?>            
                                    
                                        
                                </tbody>
                            </table>