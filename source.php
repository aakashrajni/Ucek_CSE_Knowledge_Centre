<?php
session_start();
if($_SESSION['login'] != 1)
    header ('Location: index.html');
else
{  
    $execution_time_limit = 100;
    set_time_limit($execution_time_limit);
    $varmsg = $_POST['Textarea'];
    
    $varno = $_POST['mobilenumber'];
    preg_match_all('/(?<!\w)@\w+/',$varmsg,$matches);
    $spno = preg_split("/,/",$varno);
    for($j = 0;$spno[$j] != null;$j++)
    {
        $arrear = 0;
        $sspno =  $spno[$j];
        $dsspno = substr($sspno,2);
        $myPDO = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');
        $query = $myPDO->query("SELECT * FROM astud WHERE pno = '$dsspno';");
         $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $reg = $row['regno']; 
        $svarmsg = $varmsg;
    for($i = 0;$matches[0][$i] != null;$i++)
    {
        if($matches[0][$i] == '@NAME')
        {
            $svarmsg=str_replace('@NAME',$row['name'],$svarmsg);
            continue;
        }
        if($matches[0][$i] == '@ARREARS')
        {
            $svarmsg=str_replace('@ARREARS',$arrear,$svarmsg);
            continue;
        }
        $sus = $matches[0][$i];
        $dsus = substr($sus,1);
        $fsus = '@'.$dsus;
         $myPDO = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');
        $quer = $myPDO->query("SELECT * FROM header WHERE head = '$dsus';");
         $quer->execute();
        $ro = $quer->fetch(PDO::FETCH_ASSOC);
        $uid = $ro['uid'];
        $que = $myPDO->query("SELECT * FROM insmark WHERE uid = '$uid' AND regno = '$reg';");
         $que->execute();
        $r = $que->fetch(PDO::FETCH_ASSOC);
        $ser = $r['array'];
        $unser = unserialize($ser);
        if($unser[$dsus] == 'U' || $unser[$dsus] == 'u')
            $arrear = $arrear+1;
        $svarmsg=str_replace($fsus,$unser[$dsus],$svarmsg);
    }
        //
        //Your authentication key
$authKey = "167600AfNSbTJbQ597d5d5b";
$mes = $svarmsg;
//Multiple mobiles numbers separated by comma
$mobileNumber = $sspno;
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
        
    }
    $_SESSION['alert'] = 1;
    header ('Location: failedlog.php');
}
?>