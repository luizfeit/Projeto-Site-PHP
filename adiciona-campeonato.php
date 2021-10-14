<?php require_once ("conecta.php")?>
<?php require_once ("Campeonato.php")?>
<?php require_once ("banco-usuario.php")?>

<html>
    <head>
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="meucss/meucss.css" rel="stylesheet" type="text/css">
    </head>
<body>
<?php
   $campeonato=new Campeonatos;
   $campeonato->nome_campeonato=$_POST ['nome_campeonato'];
   $campeonato->lista=$_POST ['lista'];
   $campeonato->premiacao=$_POST ['premiacao'];
   $campeonato->codigo=$_POST ['codigo'];
   $campeonato->data_camp=$_POST ['data_camp'];
   $campeonato->hora=$_POST ['hora'];
   
   if(empty($campeonato->nome_campeonato) or empty($campeonato->lista) or empty($campeonato->premiacao) or empty($campeonato->data_camp) or empty($campeonato->hora))
    {
      echo "<script> alert('Campos não preenchidos, tente novamente!'); history.go(-1);</script>";
    }

    else if(inserirCampeonato ($conexao,$campeonato))
     {
        header("Location:paginaComCadastro.php");
     }
      else
      {
       $erro=mysqli_error ($conexao);
          echo "ERRO".$erro;
      }