<?php require_once ("conecta.php")?>
<?php require_once ("Usuarios.php")?>
<?php require_once ("banco-usuario.php")?>
<?php require_once ("logica-usuario.php")?>

<?php
  $usuarios= new Usuarios;
  $usuarios->id=$_POST["id"];
  $usuarios->nome=$_POST ["nome"];
  $usuarios->nick=$_POST ["nick"];
  $usuarios->email=$_POST ["email"];
  $usuarios->senha=$_POST ["senha"];
  
 
  if (alterar($conexao,$usuarios))
  {
      header("Location:listarUsuario.php?removido=true");
  }
  else
    {
        echo mysqli_error($conexao);
    }
  ?>