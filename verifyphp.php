<?php
    echo $_POST['id'];
    $reg = $_POST['id'];
    $myPDO = new PDO('mysql:host=localhost;dbname=dihubin_dih', 'dihubin_root', 'Dihroot@1');
   $quer = $myPDO->query("UPDATE bstud SET ver='1' WHERE regno = '$reg'");
     $query = $myPDO->query("UPDATE astud SET ver='1' WHERE regno = '$reg'");
?>