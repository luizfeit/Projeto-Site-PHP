<?php require_once ("conecta.php")?>
<?php require_once ("logica-usuario.php")?>
<?php require_once ("banco-usuario.php")?>
<?php require_once ("Usuarios.php")?>

<?php
$usuarios=buscaUsuario($conexao,$_POST["email"],$_POST["senha"],$_POST["adm"]);
if($usuarios == null)
{
    header ("Location:login.php?login=0");
}
elseif ($usuarios["email"]=='adm@hotmail.com' and $usuario["senha"]='123')
{
    logaAdm ($usuarios["nick"]);
    header ("Location:paginaComCadastro.php?adm=adm");
}
else
{
    logaUsuario ($usuarios["nick"]);
    header ("Location:paginaComCadastro.php?login=1");
}
die();
?>