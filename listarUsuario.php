<?php require_once ("conecta.php")?>
<?php require_once ("Usuarios.php")?>
<?php require_once ("banco-usuario.php")?>

<head> <meta charset="utf=8">
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="meucss/meucss.css" rel="stylesheet" type="text/css">
  </head>
  <body>
   <div class="bg4">
   <div class="container">
  <div class="consulta">
<h1 style= color:white;> Listar Usuários </h1>

<form method="post" action="localizarRecebe.php?procurar=buscar" style= color:white;> 
      Pesquisar: <input type="text" name="palavra">
     <input type="submit" value="Buscar">
     </form>
<?php 

   listarUsuario ($conexao);
?>

<a href="paginaComCadastro.php"><button type="submit" class="btn btn-light">SAIR</a></button> 
</div>
</div>
</div>

</body>
</html>