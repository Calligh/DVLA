   <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">OTS Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="./user_home.php">HOME SITE</a></li>
                
                
                
                
             
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Welcome <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="selfprofile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                      
                        <li class="divider"></li>
                        <li>
                            <a href="./admin_login.php?todo=successfully logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="./index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                  
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i>Questions <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown" class="collapse">
                            <li> 
                                <a href="./posts.php">View All Questions</a>
                            </li>
                            <li>
                                <a href="posts.php?source=add_post">Add Questions</a>
                            </li>
                        </ul>
                    </li>
					
                    <li>
                        <a href="./catagories.php"><i class="fa fa-fw fa-wrench"></i> Categories</a>
                    </li>
                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#profile_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Profile <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="profile_dropdown" class="collapse">
                            <li> 
                                <a href="./profile.php">View All Profiles</a>
                            </li>
                            <li>
                                <a href="profile.php?src=add_profile">Add Profiles</a>
                            </li>
                        </ul>
                    </li>
				
                    
                </ul>
            </div>
            
            
            
            <!-- /.navbar-collapse -->
        </nav>
