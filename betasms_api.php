 <?php
//allow remote access to this script, replace the * to your domain e.g http://www.example.com if you wish to recieve requests only from your server
header("Access-Control-Allow-Origin: *");
//rebuild form data
$postdata = http_build_query(
    array(
  'username' => $_POST["username"],
  'password' => $_POST["smspassword"],
  'message' => 'dsdsd',
  'mobiles' => $_POST["mobiles"],
  'sender' => 'dddd',
    )
);
//prepare a http post request
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);
//craete a stream to communicate with betasms api
$context  = stream_context_create($opts);
//get result from communication
$result = file_get_contents('http://login.betasms.com/api/', false, $context);
//return result to client, this will return the appropriate respond code
echo $result;
?>