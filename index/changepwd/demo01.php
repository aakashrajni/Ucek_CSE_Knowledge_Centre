<?php
session_set_cookie_params(0);
session_start();
$conn = new PDO('mysql:host=localhost;dbname=sms', 'root', '');

$query =$conn->query ("SELECT email FROM bstud WHERE regno='$res';");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$emailts = $row['email'];
$_SESSION['emailts'] = $emailts;

$res = $_SESSION['re'];
$random1 = $_SESSION['pwd9'];

$password1 = $random1;

$hashedPwd1 = password_hash($password1,PASSWORD_DEFAULT);

$conn->query ("UPDATE bstud SET pass = '$hashedPwd1' WHERE regno='$res';");



header('Location: index.html');