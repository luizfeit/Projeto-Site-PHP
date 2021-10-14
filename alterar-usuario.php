<?php require_once ("conecta.php")?>
<?php require_once ("Usuarios.php")?>
<?php require_once ("banco-usuario.php")?>
<?php require_once ("logica-usuario.php")?>


<div class="bg4">
   <div class="container">
  <div class="consulta">
<h1 style= color:white;> Listar Usuários </h1>
<?php 
     
      listarUsuario2 ($conexao);
   
?>
</div>
</div>
</div>