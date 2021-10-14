<?php require_once ("conecta.php")?>
<?php require_once ("logica-usuario.php") ?>
<?php require_once ("Usuarios.php")?>
<?php require_once ("banco-usuario.php")?>

<html lang="pt-br">
  <head> <meta charset="utf=8">
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="meucss/meucss.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <?php

  $nick=$_GET ['nick'];

  if ($nick==usuarioLogado())
  {
   $sql="SELECT * FROM bdcadastro WHERE nick='$nick'";
   $resultado=mysqli_query($conexao,$sql);
   $num=mysqli_num_rows ($resultado);
   if ($consulta=mysqli_fetch_assoc($resultado))
   { 
       ?>
    <div class="bg5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Logado: <?=usuarioLogado();?> </a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="paginaComCadastro.php">Sair <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
    </ul>
  </div>
</nav>
    <div class="telaUsuario">

    <div class="consulta">
    <table class="table table-striped table-dark">
    <form action="remover-usuario.php?nick=<?=usuarioLogado();?>" method="post">
    <thead>
    <tr>
         <th scope="col">ID</th>
         <th scope="col">Nome</th>
         <th scope="col">Nome_de_Invocador</th>
         <th scope="col">E-mail</th>
         <th scope="col">Senha</th>
          </tr>
     </thead>
     <tbody>
     <tr>
         <th scope="row"><?php echo $consulta['id']?></th>
         <td><?php echo $consulta ['nome']?>  </td>
         <td><?php echo $consulta ['nick']?>  </td>
         <td><?php echo $consulta ['email']?> </td>
         <td><?php echo $consulta ['senha']?> </td>

         <td> <button type="submit" class="btn btn-danger" value="Remover" name="remover">Deletar</button></td>
         <td> <a href="alterar-usuario2.php?nick=<?=usuarioLogado();?>"> <button type="submit" class="btn btn-warning" value="Alterar" name="alterar"> Alterar 
         </a>  </button> </td>
     </tr>
     <tr>
     <td> <input type=hidden value="<?php echo $consulta['id']; ?>" name=id> </td>
     </tr>
     </tbody>
     </table>
     </form>
     </div>
   </div>
   </div>


<?php
//===================================================================================================================================
   }}
  ?>
  </body>
  </html>