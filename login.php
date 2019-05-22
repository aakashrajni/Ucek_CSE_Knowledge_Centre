<?php
session_set_cookie_params(0);

session_start();
$conn = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');

$name = $_POST['username'];
  $pass =$_POST['password'];

$base = $conn->query("SELECT * FROM bstud WHERE regno='$name'");
$base->execute();
$row6 = $base->fetch(PDO::FETCH_ASSOC);

$base1= $row6['regno'];
$_SESSION['usern'] = $name;
$query = $conn->query("SELECT * From bstud WHERE regno='$base1';");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
if(password_verify($pass, $row['pass'])) {
	$_SESSION['log'] = 2;
	$_SESSION['username']=$_POST['username'];
	$_SESSION['register_no'] = $base1;
        header('Location: studpanel/html/profile.php');
}else
        header('Location: index.html');