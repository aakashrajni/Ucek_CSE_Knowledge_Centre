<?php
session_set_cookie_params(0);
session_start();
$conn = new PDO('mysql:host=localhost;dbname=sms', 'root', '');

$res = $_SESSION['re'];

$query =$conn->query ("SELECT email FROM bstud WHERE regno='$res';");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$emailts1 = $row['email'];

$password = $_POST['password02'];
$_SESSION['changepassword'] = $password;
$_SESSION['emailts1'] = $emailts1;

$hashedPwd = password_hash($password,PASSWORD_DEFAULT);

$conn->query ("UPDATE bstud SET pass = '$hashedPwd' WHERE regno='$res';");
$query->execute();


header('Location: mail2.php');