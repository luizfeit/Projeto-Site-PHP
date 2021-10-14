<?php require_once ("conecta.php")?>
<?php require_once ("banco-usuario.php")?>
<?php require_once ("logica-usuario.php")?>

<?php

  $id=$_POST['id'];
  
    if (removerUsuario($conexao,$id))
    {
      header ("Location:listarUsuario.php?removido=true");
    }
    else
    {
      echo " <h1>Não removido</h1>";
      $error= mysqli_error($conexao);
      echo  $error;
    }
  ?>