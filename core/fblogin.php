<?php
require_once 'Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '516991505451419', // Replace {app-id} with your app id
  'app_secret' => 'a0a7d30e4f1e8fbe39fb70b67ee42330',
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://localhost/neer/core/fb-callback.php', $permissions);




?>