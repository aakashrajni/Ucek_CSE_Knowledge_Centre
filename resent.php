 <?php

$myPDO = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');
$query = $myPDO->query("SELECT * FROM success WHERE request_id = '".$_POST['id']."';");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
//Your authentication key
$authKey = "167600AfNSbTJbQ597d5d5b";
$mes = $row['msg'];
//Multiple mobiles numbers separated by comma
$mobileNumber = $_POST['num'];
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
}

curl_close($ch);
echo "SENT SUCCESSFULLY";
echo nl2br("\n".$output);
echo nl2br("\n".$mes);
$conn = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');

$conn->query("INSERT INTO success (request_id,msg,numbers) VALUES ('$output','$mes','$mobileNumber');");
$quer = $myPDO->query("DELETE FROM delrep WHERE request_id = '".$_POST['id']."' AND receiver = '".$_POST['num']."';");

?>
