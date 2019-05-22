<?php

session_start();

function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password9 = substr( str_shuffle( $chars ), 0, $length );
    return $password9;
}



$password9 = random_password(8); 

$_SESSION['pwd9'] = $password9;

header('Location:mail.php');

?>