<?php require_once ("conecta.php")?>
<?php require_once ("Usuarios.php")?>
<?php require_once ("banco-usuario.php")?>
<?php require_once ("logica-usuario.php") ?>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="meucss/meucss.css" rel="stylesheet" type="text/css">
  <body>
  <div class="bg4">
  <div class="container">
    <div class="consulta">
      <br>
  <h1 style= color:white;> Listar Funcionários </h1>
  <form method="post" action="localizarRecebe.php?procurar=buscar" style= color:white;> 
     Pesquisar: <input type="text" name="palavra">
     <input type="submit" value="Buscar">
     </form>

  <?php
    $palavra=$_POST['palavra'];
    $procurar=$_GET ['procurar'];

    if($procurar=="buscar")

    {
        $palavra=trim($palavra);
        $sql="SELECT * FROM bdcadastro WHERE nome LIKE '%".$palavra."%'
        ORDER BY nome";
        $resultado=mysqli_query ($conexao,$sql);
        $numResgistro=mysqli_num_rows($resultado);

        if($numResgistro!=0)
        {
            while($consulta=mysqli_fetch_object($resultado))
            {
                ?>
                <br>
                <br>
                <div class="consulta">
                 <table class="table table-striped table-dark">
                 <form action="remover-usuario.php" method="post">
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
                      <th scope="row"><?php echo $consulta->id?></th>
                      <td><?php echo $consulta->nome?>  </td>
                      <td><?php echo $consulta->nick?>  </td>
                      <td><?php echo $consulta->email?> </td>
                      <td><?php echo $consulta->senha?> </td>
                      <td> <button type="submit" class="btn btn-danger" value="Remover" name="remover">Deletar</button></td>
                      <td> <a href="alterar-usuario.php"> <button type="submit" class="btn btn-warning" value="Alterar" name="alterar"> Alterar 
                    </a>  </button> </td>
                      </tr>
                      <tr>
                      <td> <input type=hidden value="<?php echo $consulta->id; ?>" name=id> </td>
                      </tr>
                      </tbody>
                      </form> 
                      </table>
                      </div>

                      <?php
            }
        }
    }
    else 
    {
      echo "nenhum encontrado";
    }
  ?>
        <a href="listarUsuario.php"><button type="submit" class="btn btn-light">VOLTAR</a></button> 
  </div>
  </div>
  </div>
  
  
   