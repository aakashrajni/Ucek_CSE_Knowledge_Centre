<?php 
$val = $_POST['id'];
$myPDO = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');
$query = $myPDO->query("SELECT COUNT(*) AS total FROM astud WHERE regno='$val'");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);
echo $row['total'];
?>