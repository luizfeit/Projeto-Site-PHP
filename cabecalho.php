<?php require_once ("logica-usuario.php")?>
<?php require_once ("Usuarios.php")?>

<html>
    <head>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="meucss/meucss.css" rel="stylesheet" type="text/css">
</head>

   <?php
    if (AdmEstaLogado())
    {
    ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logado: <?=AdmLogado()?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="textoNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="camp.php">Inserir Campeonatos <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listarUsuario.php">Consultar</a>
      </li>
    </ul>
    <span class="navbar-text">
    <a class="navbar-brand" href="logout.php"> Desconectar </a>
    </span>
  </div>
</nav>
        
    <?php
    }
    elseif(usuarioEstaLogado())
    {
    ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logado: <?=usuarioLogado()?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="textoNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="conta-usuario.php?nick=<?=usuarioLogado()?>">Detalhes da Conta <span class="sr-only">(Página atual)</span></a>
      </li>
    </ul>
    <span class="navbar-text">
    <a class="navbar-brand" href="logout.php"> Desconectar </a>
    </span>
  </div>
</nav>
        
    <?php
    }
    else
    {
    ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="login.php">Login</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
    </nav>
  <?php
   }?>
</html>
