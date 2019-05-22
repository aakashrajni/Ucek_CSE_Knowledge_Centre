<?php 
session_start();
if($_SESSION['login'] != 1)
    header ('Location: index.html');
else
{
    
    $delmsg = $_POST['id']??'';
    echo $delmsg;
    $myPDO = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');
    $query = $myPDO->query("DELETE FROM msgboard WHERE msg='$delmsg';");
    //$query = $myPDO->query("INSERT INTO msgboard(msg) VALUES ('$delmsg'); ");
}
?>