 <div class="dashboard-nav d-none d-xl-block d-lg-block">
    <?php
   if($row['type']=='User'){
    echo '<div class="dashboard-inner">
                        <h4>Main</h4>
                        <ul>
                            <li class="active"><a href="dashboard.php"><i class="flaticon-dashboard"></i> Dashboard</a></li>
                            <li><a href="my-profile.php"><i class="flaticon-people"></i>My Profile</a></li>
                            <li><a href="core/logout.php"><i class="fa fa-save"></i>Saved Search</a></li>
                            <li><a href="core/logout.php"><i class="flaticon-logout"></i>Logout</a></li>
                            
                           
                        </ul>
                        
                    </div>';
    }
    ?>
                    <!-- <div class="dashboard-inner">
                        <h4>Main</h4>
                        <ul>
                            <li class="active"><a href="dashboard.php"><i class="flaticon-dashboard"></i> Dashboard</a></li>
                            <li><a href="messages.php"><i class="flaticon-mail"></i> Messages <span class="nav-tag"><?php echo $msg  ?></span></a></li>
                           
                        </ul>
                        <h4>Listings</h4>
                        <ul>
                            <li><a href="my-properties.php"><i class="flaticon-apartment-1"></i>My Properties</a></li>
                          
                            <li><a href="submit-property.php"><i class="flaticon-plus"></i>Submit Property</a></li>
                        </ul>
                        <h4>Account</h4>
                        <ul>
                            <li><a href="my-profile.php"><i class="flaticon-people"></i>My Profile</a></li>
                            <li><a href="core/logout.php"><i class="flaticon-logout"></i>Logout</a></li>
                        </ul>
                    </div> -->


                     <?php
   if($row['type']=='Agent'){
    echo '<div class="dashboard-inner">
                        <h4>Main</h4>
                        <ul>
                            <li class="active"><a href="dashboard.php"><i class="flaticon-dashboard"></i> Dashboard</a></li>
                            <li><a href="messages.php"><i class="flaticon-mail"></i> Messages <span class="nav-tag"><?php echo $msg  ?></span></a></li>
                           
                        </ul>
                        <h4>Listings</h4>
                        <ul>
                            <li><a href="my-properties.php"><i class="flaticon-apartment-1"></i>My Properties</a></li>
                          
                            <li><a href="submit-property.php"><i class="flaticon-plus"></i>Submit Property</a></li>
                        </ul>
                        <h4>Account</h4>
                        <ul>
                            <li><a href="my-profile.php"><i class="flaticon-people"></i>My Profile</a></li>
                            <li><a href="core/logout.php"><i class="flaticon-logout"></i>Logout</a></li>
                        </ul>
                    </div>';
    }
    ?>



                </div>