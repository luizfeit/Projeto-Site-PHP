<?php require_once ("conecta.php")?>
<?php require_once ("Usuarios.php")?>
<?php require_once ("banco-usuario.php")?>
<?php require_once ("logica-usuario.php")?>

<html>
    <head>
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="meucss/meucss.css" rel="stylesheet" type="text/css">
    </head>
<body>
<?php
  $usuarios= new Usuarios;
  $usuarios->nome=$_POST ['nome'];
  $usuarios->nick=$_POST ['nick'];
  $usuarios->email=$_POST ['email'];
  $usuarios->senha=$_POST ['senha'];

    if(empty($usuarios->nome) or empty($usuarios->nick) or empty($usuarios->email) or empty($usuarios->senha))
    {
      echo "<script> alert('Campos não preenchidos, tente novamente!'); history.go(-1);</script>";
    }

     elseif (InserirUsuario ($conexao,$usuarios))
    {
      print "<div class='bg2'>";
      print "<center>";
      print "<div class=tela>";
      print "<h1> Cadastrado com sucesso </h1>";
      print " Agradecemos por participar :D";
      print "<br>";
      print "<div class='confirmacao'>";
      print "<div class=tabela >";
      print "<table class='table'>";
      print " <thead class='thead-dark'>";
      print "  <tr>";
      print "    <th scope='col'>Nome</th>";
      print "   <th scope='col'>Nome De Invocador</th>";
      print "   <th scope='col'>E-mail</th>";
      print "   <th scope='col'>Senha</th>";
      print "  </tr>";
      print " </thead>";
      print " <tbody>";
      print "  <tr>";
      print "   <td>$usuarios->nome</td>";
      print "   <td>$usuarios->nick</td>";
      print "   <td>$usuarios->email</td>";
      print "   <td>$usuarios->senha</td>";
      print "  </tr>";
      print " </tbody>";
      print " </table>";
      print " <a href='login.php'> <input type='submit' class='btn btn-primary btn-lg' value='Confirmar'></a>";
      print "</div>";
      print "</div>";
      print "</div>";
      print "</div>";
      print "</center>";
    }
    else
    {
     $erro=mysqli_error ($conexao);
	    echo "ERRO".$erro;
    }
    
?>