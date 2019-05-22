<?php
session_set_cookie_params(0);
session_start();
$conn = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');

$name = $_POST['username'];
  $pass =$_POST['password'];

$_SESSION['usern'] = $name;
    $query = $conn->query("SELECT * From staffdata WHERE employid='$name';");
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
    if(password_verify($pass, $row['password'])) {
        $_SESSION['login'] = 1;
        header('Location: 1year.php');
}else
        header('Location: index.html');