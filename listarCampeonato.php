<?php require_once ("logica-usuario.php") ?>
<?php require_once ("banco-usuario.php")?>
<?php require_once ("Campeonato.php")?>
<?php require_once ("cabecalho.php")?>
<?php require_once ("conecta.php")?>
<!DOCTYPE html>
<html lang="pt-br"> <!-- Definindo o idioma no HTML -->
  <head> <meta charset="utf=8">
     <title>Campeonatos Competitivos de League of Legends</title>
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="meucss/meucss.css" rel="stylesheet" type="text/css">
  </head>
  <body class=body1>

<?php
    if(usuarioEstaLogado() or AdmEstaLogado())
    {
    ?>
    <div class="container">
       <nav class="nav1">
          <!-- "ul" lista não ordenada -->
          <ul class="menu"> 
             <li> <h2> Informações </h2></li>
             <hr>
             <li> <h2><a href=paginaComCadastro.php> Voltar </h2> </a></li>
             </nav>
             <section>
             <center> <h1> <b> CAMPEONATOS </b> </h1> </center>
        <?php listarCampeonato ($conexao);?>
        </section>
        <?php
    }
    else{
        ?>
          <div class="container">
       <nav class="nav1">
          <!-- "ul" lista não ordenada -->
          <ul class="menu"> 
             <li> <h2> Informações </h2></li>
             <hr>
             <li> <h2><a href=index.php> Voltar </h2> </a></li>
             <hr>
             </nav>
             <div class="section2">
             <center> <h1> <b> CAMPEONATOS </b> </h1> </center>
             <br> <br>
             <p> <a href="cadastro.php">Cadastre-se </a> ou faça <a href="login.php">login</a> para poder visualizar os campeonatos disponiveis  </p>
            </div>
    <?php 
    } 
    ?>
          </body>
    </html>

