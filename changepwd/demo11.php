<?php
session_start();
$conn = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');

$reg = $_POST['Register_no0'];

$bg = $_POST['blood_group0'];
$email = $_POST['email0'];
$pno = $_POST['parent_no0'];

$_SESSION['re'] = $reg;


$query = $conn->query("SELECT * From astud WHERE regno='$reg';");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);

if($reg = $row['regno'] || $bg = $row['bg'] || $email = $row['email'] || $pno = $row['pno']){

	header('Location: ranpwd.php');
}else{
	header('Location: ../index.html');
}
