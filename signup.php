<?php
include('core/fblogin.php');
include('core/logic.php');
include('core/check_session.php');

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
   
   <title>Real Estate and Property in Nigeria for Sale and Rent - HomeHub.com.ng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
   <link rel="shortcut icon" href="img/logos/hb.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>

   <script src="https://apis.google.com/js/platform.js" async defer></script>

 

   <meta name="google-signin-client_id" content="477986859106-41ogije83c773ovjnpg04fn9b6useusu.apps.googleusercontent.com">

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body> 


<!-- Contact section start -->
<div class="contact-section overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Logo-->
                        <a href="index.php">
                            <img src="img/logos/logo.png" style="width: 120px; height: 80px;">
                        </a>
                        <!-- Name -->
                        <h3>Create an account</h3>

                        <!--  <center>
                       <div class="g-signin2" data-width="240" data-height="45" data-longtitle="true" data-onsuccess="onSignIn"></div>

                       <img src="img/fbbt.png" style="width: 246px; height: 55px;">
                       </center> -->
                       <br>
                         <?php echo $scmsg; ?>
                        <?php echo $ermsg; ?>
                        <?php echo $ermsgphone  ?>
                        <!-- Form start-->
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="text" required="" name="name" class="input-text" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="email" required="" name="email" class="input-text" placeholder="Email Address">
                            </div>

                             <div class="form-group">
                                <input type="input" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"  name="phone" required="" class="input-text" placeholder="phone Number">
                            </div>

                            <div class="form-group">
                                <input type="password" required="" id="password" minlength="6" name="password" class="input-text" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" id="confirm_password" name="confirm_Password" class="input-text" placeholder="Confirm Password">
                            </div>
                    
                            <div class="form-group">
                                            <label>You are a </label><br>
                                           <label class="radio-inline"><input value="Agent" required="" type="radio" name="type">Agent</label>
                                <label class="radio-inline"><input value="User" type="radio" required="" name="type">User</label>
                                        </div>


                            <div class="form-group mb-0">
                                <button type="submit" name="register" class="btn-md button-theme btn-block">Signup</button>
                            </div>
                        </form>
                        <!-- Social List -->
                       <!--  <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul> -->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>Already a member? <a href="login.php">Login here</a></span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->

  <script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

    

    <script type="text/javascript">

  function onSignIn(googleUser) {

    var profile = googleUser.getBasicProfile();


      if(profile){

          $.ajax({

                type: 'POST',

                url: 'core/google_login.php',

                data: {id:profile.getId(), name:profile.getName(), ImageUrl:profile.getImageUrl(), email:profile.getEmail()}

            }).done(function(data){

                console.log(data);

                window.location.href = 'index.php';

            }).fail(function() { 

                alert( "Posting failed." );

            });

      }


    }

</script>

</div>

<script src="js/pass.js"></script>
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/rangeslider.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="js/leaflet.js"></script>
<script  src="js/leaflet-providers.js"></script>
<script  src="js/leaflet.markercluster.js"></script>
<script  src="js/dropzone.js"></script>
<script  src="js/slick.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/jquery.countdown.js"></script>
<script  src="js/maps.js"></script>
<script  src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>


</body>


</html>