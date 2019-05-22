<?php 
session_start();
if($_SESSION['login'] != 1)
    header ('Location: index.html');
else
{
    $newid = $_POST['id'];
    $newmsg = $_POST['data'];
    $myPDO = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');
    $query = $myPDO->query("INSERT INTO msgboard(pageid,msg) VALUES ('$newid','$newmsg'); ");
}
?>