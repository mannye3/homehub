<?php
require_once('connect.php');
require_once __DIR__ . '/Facebook/autoload.php'; // change path as needed
    $fb = new \Facebook\Facebook([
      'app_id' => '516991505451419',
      'app_secret' => 'a0a7d30e4f1e8fbe39fb70b67ee42330',
      'default_graph_version' => 'v2.2',
      //'default_access_token' => '{access-token}', // optional
    ]);

    $helper = $fb->getRedirectLoginHelper();
    if (isset($_GET['state'])) {
        $helper->getPersistentDataHandler()->set('state', $_GET['state']);
    }

    try {
      // Returns a `Facebook\FacebookResponse` object
      $accessToken = $helper->getAccessToken();
      $response = $fb->get('me?fields=name,first_name,last_name,email,link,gender,locale,picture', $accessToken);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }
    $user = $response->getGraphUser();


            $name =  $user['name'];
            $email =  $user['email'];
            $fbpic =  $user['picture'];
            $fbid =  $user['id'];

            //VARIABLE FOR SESSION/////

            $_SESSION['name'] = $name;           
            $_SESSION['email'] = $email;
            $_SESSION['fbpic'] =  $fbpic;
            $_SESSION['fbid'] =  $fbid;
            $user_code = uniqid();
          $_SESSION["user_code"] = $user_code;
            $reg_date = date('l jS \of F Y ');
          $reg_time = date('g:i A');

         

  $mysqli = new mysqli("localhost", "root", "", "neer");

  $sql = "SELECT * FROM users WHERE email='".$_SESSION["email"]."'";
  $result = $mysqli->query($sql);


  if(!empty($result->fetch_assoc())){


    $sql2 = "UPDATE users SET fbid='".$_SESSION["fbid"]."', fbpic='".$_SESSION["fbpic"]."' WHERE email='".$_SESSION["email"]."'";
      $query = mysqli_query($con, $sql2);
  

       header("Location: ../dashboard.php");

  }else{

    $sql2 = "INSERT INTO users (name, email, fbpic, user_code, fbid , status, reg_date, reg_time, num ) VALUES ('".$_SESSION["name"]."', '".$_SESSION["email"]."','".$_SESSION["fbpic"]."','".$user_code."','".$_SESSION["fbid"]."','1', '".$reg_date."', '".$reg_time."','1')";
      $query = mysqli_query($con, $sql2);



      //==================================Send Mail===================================================
          
        //$to  = strtolower(trim($_POST['email']));
          $to  = $email;
          
          // subject
          $subject = 'Registration successfully';
          
          // message
          $message = '
       <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Zen Flat Welcome Email</title>
  <style type="text/css" media="screen">

    /* Force Hotmail to display emails at full width */
    .ExternalClass {
      display: block !important;
      width: 100%;
    }

    /* Force Hotmail to display normal line spacing */
    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
      line-height: 100%;
    }

    body,
    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin: 0;
      padding: 0;
    }

    body,
    p,
    td {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 15px;
      color: #333333;
      line-height: 1.5em;
    }

    h1 {
      font-size: 24px;
      font-weight: normal;
      line-height: 24px;
    }

    body,
    p {
      margin-bottom: 0;
      -webkit-text-size-adjust: none;
      -ms-text-size-adjust: none;
    }

    img {
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a img {
      border: none;
    }

    .background {
      background-color: #333333;
    }

    table.background {
      margin: 0;
      padding: 0;
      width: 100% !important;
    }

    .block-img {
      display: block;
      line-height: 0;
    }

    a {
      color: white;
      text-decoration: none;
    }

    a,
    a:link {
      color: #2A5DB0;
      text-decoration: underline;
    }

    table td {
      border-collapse: collapse;
    }

    td {
      vertical-align: top;
      text-align: left;
    }

    .wrap {
      width: 600px;
    }

    .wrap-cell {
      padding-top: 30px;
      padding-bottom: 30px;
    }

    .header-cell,
    .body-cell,
    .footer-cell {
      padding-left: 20px;
      padding-right: 20px;
    }

    .header-cell {
      background-color: #eeeeee;
      font-size: 24px;
      color: #ffffff;
    }

    .body-cell {
      background-color: #ffffff;
      padding-top: 30px;
      padding-bottom: 34px;
    }

    .footer-cell {
      background-color: #eeeeee;
      text-align: center;
      font-size: 13px;
      padding-top: 30px;
      padding-bottom: 30px;
    }

    .card {
      width: 400px;
      margin: 0 auto;
    }

    .data-heading {
      text-align: right;
      padding: 10px;
      background-color: #ffffff;
      font-weight: bold;
    }

    .data-value {
      text-align: left;
      padding: 10px;
      background-color: #ffffff;
    }

    .force-full-width {
      width: 100% !important;
    }

  </style>
  <style type="text/css" media="only screen and (max-width: 600px)">
    @media only screen and (max-width: 600px) {
      body[class*="background"],
      table[class*="background"],
      td[class*="background"] {
        background: #eeeeee !important;
      }

      table[class="card"] {
        width: auto !important;
      }

      td[class="data-heading"],
      td[class="data-value"] {
        display: block !important;
      }

      td[class="data-heading"] {
        text-align: left !important;
        padding: 10px 10px 0;
      }

      table[class="wrap"] {
        width: 100% !important;
      }

      td[class="wrap-cell"] {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
      }
    }
  </style>
</head>

<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor="" class="background">
  <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" class="background">
    <tr>
      <td align="center" valign="top" width="100%" class="background">
        <center>
          <table cellpadding="0" cellspacing="0" width="600" class="wrap">
            <tr>
              <td valign="top" class="wrap-cell" style="padding-top:30px; padding-bottom:30px;">
                <table cellpadding="0" cellspacing="0" class="force-full-width">
                  <tr>
                   <td height="60" valign="top" class="header-cell">
                      <img width="196" height="140" src="http://e3tech.com.ng/img/newimg2.jpg" alt="img">
                    </td>
                  </tr>
                  <tr>
                    <td valign="top" class="body-cell">

                      <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#ffffff">
                        <tr>
                          <td valign="top" style="padding-bottom:15px; background-color:#ffffff;">
                            <h1>Welcome to Waste 2 Earn</h1>
                          </td>
                        </tr>
                        <tr>
                          <td valign="top" style="padding-bottom:20px; background-color:#ffffff;">
                            <b>Hey '.$name.', thanks for signing up!</b><br>
                            We are really excited for you to join our community! Click the link below to manage your account.
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#ffffff">
                              <tr>
                                <td style="width:200px;background:#008000;">
                                  <div><!--[if mso]>
                                    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:40px;v-text-anchor:middle;width:200px;" stroke="f" fillcolor="#008000">
                                      <w:anchorlock/>
                                      <center>
                                    <![endif]-->
                                        <a href="http://sigprodigy.com/w2e/confirm.php?uc='.$user_code.'"
                                  style="background-color:#008000;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:18px;line-height:40px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;">Manage Account</a>
                                    <!--[if mso]>
                                      </center>
                                    </v:rect>
                                  <![endif]--></div>
                                </td>
                                <td width="360" style="background-color:#ffffff; font-size:0; line-height:0;">&nbsp;</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td style="padding-top:20px;background-color:#ffffff;">
                            Thank you so much,<br>
                            Team Waste 2 Earn
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td valign="top" class="footer-cell">
                      Waste 2 Earn<br>
                      an <a href="http://e3tech.com.ng/"  target="_blank" > E3 Technologies</a>, INC company
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </center>
      </td>
    </tr>
  </table>

</body>
</html>


          ';
          
          // To send HTML mail, the Content-type header must be set
          $headers  = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          
          // Additional headers
          $headers .= 'To: '.strtolower(trim($_SESSION["email"])). "\r\n";
          //$headers .= 'To: '.$email;. "\r\n";
          $headers .= 'From: ike.com.ng';
             
          // Mail it
          mail($to, $subject, $message, $headers);
          
          //==================================End Mail===================================================//
 $scmsg= '<div class="alert text-success bg-success-0_1 px-4 py-3" role="alert">
           Registration Successful <a href="login.php" class="alert-link">Login</a> to manage your account
        </div>';
      


}
header("Location: access-pont.php");

  


  $mysqli->query($sql2);


  echo "Updated Successful";



     
?>
