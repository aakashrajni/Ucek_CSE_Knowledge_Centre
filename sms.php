 
<?php
session_start();
//Your authentication key
$authKey = "167600AfNSbTJbQ597d5d5b";
$mes = $_POST['Textarea'];
//Multiple mobiles numbers separated by comma
$mobileNumber = $_POST['mobilenumber'];
//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "UCEKCS";

//Your message to send, Add URL encoding here.

$message = urlencode($mes);

//Define route
$route = 98;
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="https://control.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
    $_SESSION['alert'] = 9;
}

curl_close($ch);
$conn = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');

$conn->query("INSERT INTO success (request_id,msg,numbers) VALUES ('$output','$mes','$mobileNumber');");
$_SESSION['alert'] = 1;
header ('Location: 2year.php');
?>
