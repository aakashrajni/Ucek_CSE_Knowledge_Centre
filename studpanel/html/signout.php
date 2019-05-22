<?php 
session_start();
$_session['login'] = 0;
session_destroy();
header('location: ../../index.html');
?>
