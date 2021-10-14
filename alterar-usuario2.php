<?php require_once ("conecta.php")?>
<?php require_once ("Usuarios.php")?>
<?php require_once ("banco-usuario.php")?>
<?php require_once ("logica-usuario.php")?>

<h1 style= color:dark;> Listar Usuários </h1>
<div class=bg5>
<div class="telaUsuario">

<?php 
   $nick=$_REQUEST ['nick'];
   
   if ($nick==usuarioLogado())
   {
      listarUsuario3 ($conexao,$nick);
   }
   ?>
   </div>
</div>