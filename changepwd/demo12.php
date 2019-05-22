<?php
session_start();
$conn = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');
$rr = $_SESSION['re']
$query =$conn->query ("SELECT email FROM astud WHERE regno='$rr';");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
$emailts = $row['email'];
$_SESSION['emailts'] = $emailts;

$random1 = $_SESSION['pwd9'];

$password1 = $random1;

$hashedPwd1 = password_hash($password1,PASSWORD_DEFAULT);

$conn->query ("UPDATE astud SET pass = '$hashedPwd1' WHERE regno='$rr';");



header('Location: ../index.html');