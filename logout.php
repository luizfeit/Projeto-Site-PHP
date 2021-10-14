<?php require_once "logica-usuario.php"?>

<?php
logout();//chama a função logout que está na página.
         //logica-usuario.php (destroí a sessão)
header("Location:index.php?logout=true"); 
die(); //morte X(
    
    ?>
