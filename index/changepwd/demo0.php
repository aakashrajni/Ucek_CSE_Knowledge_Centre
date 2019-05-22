<?php
session_set_cookie_params(0);
session_start();
$conn = new PDO('mysql:host=localhost;dbname=sms', 'root', '');

$reg = $_POST['Register_no0'];

$bg = $_POST['blood_group0'];
$email = $_POST['email0'];
$pno = $_POST['parent_no0'];

$_SESSION['re'] = $reg;


$query = $conn->query("SELECT * From bstud WHERE regno='$reg';");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);

if($reg = $row['regno'] || $bg = $row['bg'] || $email = $row['email'] || $pno = $row['pno']){

	header('Location: ranpwd.php');
}else{
	header('Location: forverify.html');
}
