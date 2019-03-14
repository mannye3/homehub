<?php
include('core/session.php');
include('core/user_logic.php');
include('core/stat.php');
include('inc/user_header.php');
?>

<!-- Dashbord start -->
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-pad">
                   <?php include('inc/user_nav.php'); ?>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>My Profile</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            <li>
                                                <a href="index.php">Home</a>
                                            </li>
                                            <li>
                                                <a href="dashboard.php">Dashboard</a>
                                            </li>
                                            <li class="active">My Profile</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-list">
                            <h3 class="heading">Profile Details</h3>
                            <div class="dashboard-message contact-2 bdr clearfix">
                                <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                               <label><b>Update Profile  Picture:</b></label>
                                                    <div class="edit-profile-photo">
                                                        <?php include('core/pro-pic-upd.php'); ?>
                                                     <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span><i class="fa fa-upload"></i></span>
                                                    <input type='file' required="" name="filename" id="inputFile" class="upload">
                                                </div>
                                            </div>
                                                        
                                                    </div>
                                                    <br>
                                                  

        <center><button type="submit" name="pro-pic" class="btn btn-danger btn-md">Update picture</button></center>
    </form>
                                    </div>
                                    <div class="col-lg-9 col-md-9">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group name">
                                                        <label>Your Name</label>
                                                        <input type="text" value="<?php echo $row['name'] ?>" name="name" class="form-control">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group subject">
                                                        <label>Phone</label>
                                                        <input type="text" value="<?php echo $row['phone'] ?>" name="phone" class="form-control" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group number">
                                                        <label>Email</label>
                                                        <input type="email" value="<?php echo $row['email'] ?>" name="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group number">
                                                        <label>Occupation</label>
                                                        <input type="text" value="<?php echo $row['occupation'] ?>" name="occupation" class="form-control" placeholder="Occupation">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group number">
                                                        <label>Location</label>
                                                        <input id="autocomplete" value="<?php echo $row['location'] ?>" onFocus="geolocate()" placeholder="Your Location" class="form-control mb-sm-0" name="location">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group message">
                                                        <label>Personal info</label>
                                                        <textarea class="form-control" name="about" placeholder="Personal info"><?php echo $row['about'] ?></textarea>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-12">
                                                    <div class="send-btn">
                                                        <button type="submit" name="profileupdate" class="btn btn-md button-theme">Update Profile</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="dashboard-list">
                                    <h3 class="heading">Change Password</h3>
                                    <?php echo $ermsg2;  ?>
                                    <div class="dashboard-message contact-2">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group name">
                                                        <label>Current Password</label>
                                                        <input type="password" name="password" class="form-control" placeholder="Current Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group email">
                                                        <label>New Password</label>
                                                        <input type="password" minlength="6" id="password" name="newpassword" class="form-control" placeholder="New Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group subject">
                                                        <label>Confirm New Password</label>
                                                        <input type="password" id="confirm_password" name="confirm_Password" class="form-control" placeholder="Confirm New Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="send-btn">
                                                        <button type="submit" name="change-pass" class="btn btn-md button-theme">Change Password</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="dashboard-list">
                                    <h3 class="heading">Socials</h3>
                                    <div class="dashboard-message contact-2">
                                        <form action="#" method="GET" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group name">
                                                        <label>Facebook</label>
                                                        <input type="text" name="facebook" class="form-control" placeholder="https://www.facebook.com/">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group email">
                                                        <label>Twitter</label>
                                                        <input type="text" name="twitter" class="form-control" placeholder="https://twitter.com/">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group subject">
                                                        <label>Vkontakte</label>
                                                        <input type="text" name="vkontakte" class="form-control" placeholder="vk.com">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group number">
                                                        <label>Whatsapp</label>
                                                        <input type="email" name="whatsapp" class="form-control" placeholder="https://www.whatsapp.com/">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="send-btn">
                                                        <button type="submit" class="btn btn-md button-theme">Send Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>


       
<!-- Dashbord end -->
<?php include('inc/user_footer.php'); ?>


<script type="text/javascript">
     function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_upload_preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#inputFile").change(function () {
        readURL(this);
    });
</script>   


 <script>
function change_location()
{
    var state1 = $("#state1").val();
    
       $.ajax({
        type: "POST",
        url: "core/get_city.php",
        data: "state1="+state1,
        cache: false,
        success: function(response)
            {
                    //alert(response);return false;
                $("#city2").html(response);
            }
            });
    
}
</script>   