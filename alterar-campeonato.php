<?php require_once ("conecta.php")?>
<?php require_once ("Usuarios.php")?>
<?php require_once ("banco-usuario.php")?>
<?php require_once ("cabecalho.php")?>


<!DOCTYPE html>
<html lang="pt-br"> <!-- Definindo o idioma no HTML -->
  <head> <meta charset="utf=8">
     <title>Campeonatos Competitivos de League of Legends</title>
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="meucss/meucss.css" rel="stylesheet" type="text/css">
  </head>
  <body class=body1>
     <div class="container">
       <nav class="nav1">
          <!-- "ul" lista não ordenada -->
          <ul class="menu"> 
             <li> <h2> Informações </h2></li>
             <hr>
             <br>
             <li> <h3><a href="listarCampeonato.php"> Voltar </h3> </a> </li>
             </ul>
             <br>

          </nav>
      <section>
      <center> <h1> Campeonatos </h1> </center>
      <?php
          $id=$_POST ['id'];
          listarCampeonato2 ($conexao,$id);
       ?>
       </section>
       </body>
       </html>
