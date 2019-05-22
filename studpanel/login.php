<?php
session_start();
$conn = new PDO('mysql:host=localhost;dbname=sms', 'root', '');


$name = $_POST['username'];

$pass =$_POST['password'];

$base = $conn->query("SELECT * FROM stud WHERE email='$name'");
$base->execute();
$row6 = $base->fetch(PDO::FETCH_ASSOC);

$base1= $row6['regno'];
$_SESSION['usern'] = $name;
$query = $conn->query("SELECT * From stud WHERE regno='$base1';");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
if(password_verify($pass, $row['pass'])) {
	$_SESSION['login'] = 2;
	$_SESSION['username']=$_POST['username'];
	$_SESSION['register_no'] = $base1;
	header('Location: html/profile.php');
}else
header('Location: index.html');