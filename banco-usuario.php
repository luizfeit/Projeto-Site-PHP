<?php require_once ("Usuarios.php")?>
<?php require_once ("Campeonato.php")?>
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
    function InserirUsuario ($conexao,$usuarios)
    {
        $sql="INSERT INTO bdcadastro (nome,nick,email,senha) VALUES ('$usuarios->nome',
                                                                   '$usuarios->nick',
                                                                   '$usuarios->email',
                                                                   '$usuarios->senha')";
    $resultado=mysqli_query ($conexao,$sql);
    return $resultado;
    }
    //============================================================================================================
    function removerUsuario($conexao,$id)
    {
        $sql="delete from bdcadastro where id = '$id'";
        $resultado=mysqli_query ($conexao,$sql);
        return $resultado;
    }
    //============================================================================================================

    function alterar($conexao,$usuarios)
    {
        $sql="UPDATE bdcadastro SET nome='$usuarios->nome',
                                  nick='$usuarios->nick',
                                  email='$usuarios->email',
                                  senha='$usuarios->senha' WHERE id='$usuarios->id'";
        $resultado=mysqli_query ($conexao,$sql);
        return $resultado;

    }
    //============================================================================================================

    function listarUsuario ($conexao)
    {
        $sql= "SELECT * FROM bdcadastro";
        $resultado=mysqli_query($conexao,$sql);

         while ($consulta=mysqli_fetch_assoc($resultado))
        { 
            ?>
          <div class="consulta">
           <table class="table table-striped table-dark">
           <form action="remover-adm.php" method="post">
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
                <td> <a href="alterar-usuario.php"> <button type="submit" class="btn btn-warning" value="Alterar" name="alterar"> Alterar 
                    </a>  </button> </td>
            </tr>
            <tr>
            <td> <input type=hidden value="<?php echo $consulta['id']; ?>" name=id> </td>
            </tr>
            </tbody>
            </table>
            </form>
            </div>
            
        <?php 
        }}

        //============================================================================================================
        function listarUsuario2 ($conexao)
    {
        $sql= "SELECT * FROM bdcadastro ";
        $resultado=mysqli_query($conexao,$sql);

        while ($consultar=mysqli_fetch_assoc($resultado))
        { 
            ?>
             <div class="consulta">
             <table class="table table-striped table-dark">
             <form action="confirmar-altera-usuario.php" method="post">
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
           <th scope="row"><?php echo $consultar['id']?></th>
           <td><input type=text value=<?php echo $consultar['nome']?> name=nome> </td>
           <td><input type=text value=<?php echo $consultar['nick']?> name=nick> </td>
           <td><input type=email value=<?php echo $consultar['email']?> name=email> </td>
           <td><input type=text value=<?php echo $consultar['senha']?> name=senha> </td>
           <td><input type=hidden value=<?php echo $consultar['id']?> name=id> </td>
           <td><button type="submit" class="btn btn-success" value="Alterar" name="alterar">Salvar</button></td>
           </tr>
           <tr>
           </tr>
           </tbody>
           </form>
           </table>
           </div>
           
       <?php
        }}
        //============================================================================================================
        function listarUsuario3 ($conexao,$nick)
        {
            $sql= "SELECT * FROM bdcadastro WHERE nick='$nick'";
            $resultado=mysqli_query($conexao,$sql);
    
            while ($consultar=mysqli_fetch_assoc($resultado))
            { 
                ?>
                 <div class="consulta">
                 <table class="table table-striped table-dark">
                 <form action="confirmar-alterar-usuario2.php?nick=<?=usuarioLogado();?>" method="post">
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
               <th scope="row"><?php echo $consultar['id']?></th>
               <td><input type=text value=<?php echo $consultar['nome']?> name=nome> </td>
               <td><input type=text value=<?php echo $consultar['nick']?> name=nick> </td>
               <td><input type=email value=<?php echo $consultar['email']?> name=email> </td>
               <td><input type=text value=<?php echo $consultar['senha']?> name=senha> </td>
               <td><input type=hidden value=<?php echo $consultar['id']?> name=id> </td>
               <td><button type="submit" class="btn btn-success" value="Alterar" name="alterar">Salvar</button></td>
               </tr>
               <tr>
               </tr>
               </tbody>
               </form>
               </table>
            </div>
               
           <?php
            }}
            function listarUsuario4 ($conexao,$nick)
        {
            $sql= "SELECT * FROM bdcadastro";
            $resultado=mysqli_query($conexao,$sql);
    
             while ($consulta=mysqli_fetch_assoc($resultado))
            { 
                ?>
              <div class="consulta">
               <table class="table table-striped table-dark">
               <form action="remover-adm.php" method="post">
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
                    <td> <a href="alterar-usuario.php"> <button type="submit" class="btn btn-warning" value="Alterar" name="alterar"> Alterar 
                        </a>  </button> </td>
                </tr>
                <tr>
                <td> <input type=hidden value="<?php echo $consulta['id']; ?>" name=id> </td>
                </tr>
                </tbody>
                </table>
                </form>
                </div>
                
            <?php 
            }}
            //===========================================================================================================
            function buscaUsuario ($conexao,$email,$senha,$adm) 
            {
                $sql="select*from bdcadastro where email='$email' and senha='$senha' and adm='$adm'";
                $resultado=mysqli_query($conexao,$sql);
                $usuarios=mysqli_fetch_assoc($resultado);
                return $usuarios;
            }
            //===========================================================================================================
            function InserirCampeonato ($conexao,$campeonato)
            {
                $sql="INSERT INTO bdcampeonato (nome_campeonato,lista,premiacao,codigo,data_camp,hora) VALUES ('$campeonato->nome_campeonato',
                                                                            '$campeonato->lista',
                                                                            '$campeonato->premiacao',
                                                                            '$campeonato->codigo',
                                                                            '$campeonato->data_camp',
                                                                            '$campeonato->hora')";
                $resultado=mysqli_query ($conexao,$sql);
                return $resultado;
            }
        //============================================================================================================
         

         function alterarCampeonato ($conexao,$campeonato)
         {
             $sql="UPDATE bdcampeonato SET nome_campeonato='$campeonato->nome_campeonato',
                                         lista='$campeonato->lista',
                                         premiacao='$campeonato->premiacao',
                                         codigo='$campeonato->codigo',
                                         data_camp='$campeonato->data_camp',
                                         hora='$campeonato->hora' WHERE id='$campeonato->id'";
             $resultado=mysqli_query ($conexao,$sql);
             return $resultado;                                       
        }
        //============================================================================================================
        function removerCampeonato ($conexao,$id)
        {
            $sql="DELETE FROM bdcampeonato WHERE id='$id'";
            $resultado=mysqli_query ($conexao,$sql);
            return $resultado;

        }
        //============================================================================================================
        function listarCampeonato($conexao) 
        {
             $sql= "SELECT * FROM bdcampeonato";
             $resultado=mysqli_query ($conexao,$sql);

       while ($camp=mysqli_fetch_assoc($resultado))
       {
           ?>
          <hr>
          <label> <h2> <b> Titulo: </b> </h2> </label> 
          <h2> <?php echo $camp ['nome_campeonato']?> </h2>
          <br>
          <?php echo $camp ['lista']?>
          <br>
          <br>
          <label> <b> Premiação: </b> </label>
          <?php echo $camp['premiacao'] ?>
          <br>
          <br>
          <label> <b> Código para o Campeonato: </b> </label>
          <?php echo $camp['codigo'] ?>
          <br>
          <br>
          <label>  <b> Data do Campeonato (ano/mês/dia): </b> </label>
          <?php echo $camp['data_camp'] ?>
          <br>
          <br>
          <label> <b> Horário: </b> </label>
          <?php echo $camp['hora']?>
          <?php 
            if(AdmEstaLogado())
            {
               ?>
               </br>
               <br>
               <form action="removerCampeonato.php" method="post">
               <br>
               <button type="submit" class="btn btn-danger" value="Remover" name="remover">Deletar</button>
               <input type=hidden value="<?php echo $camp['id']; ?>" name=id> 
               </form>
               <form action="alterar-campeonato.php" method="post">
               <button type="submit" class="btn btn-warning" value="remover" name="remover">alterar</button>
               <input type=hidden value="<?php echo $camp['id']; ?>" name=id> 
               </form>
               <hr>
           <?php
            }}}
          ?>
          <?php
         //============================================================================================================
        function listarCampeonato2 ($conexao,$id)
        {
            $sql= "SELECT * FROM bdcampeonato WHERE id='$id'";
            $resultado=mysqli_query($conexao,$sql);

            if ($camp=mysqli_fetch_assoc($resultado))
            {

            ?>  
                 <form action="confirmar-alterar-campeonato.php" method="post">
                 <hr>
                 <label> <b>Titulo: </b> </label> 
                 &nbsp;<input type="text" value=<?php echo $camp ['nome_campeonato']?> name=nome_campeonato> 
                 <br>
                 <br>
                 <label> <b>Requisitos: </label>
                 <br>
                 &nbsp; <textarea value=<?php echo $camp ['lista']?> name=lista style="width: 400px; height: 350px;"> </textarea>
                 <br>
                 <br>
                 <label> <b> Premiação: </b> </label>
                 &nbsp; <input type="text" value=<?php echo $camp['premiacao'] ?> name=premiacao>
                 <br>
                 <br>
                 <label> <b> Código para o Campeonato: </b> </label>
                 <input type="text" value=<?php echo $camp['codigo'] ?> name=codigo>
                 <br>
                 <br>
                 <label> <b> Data do Campeonato: </b> </label> 
                 <input type="date" value=<?php echo $camp ['data_camp']?> name=data_camp>
                 <br>
                 <br>
                 <label> <b> Horário: </b> </label>
                 <input type="time" value=<?php echo $camp['hora']?> name=hora>
                 <br>
                 <br>
                 &nbsp; &nbsp; <button type="submit" class="btn btn-success" value="Alterar" name="alterar">Salvar</button>
                 <input type=hidden value="<?php echo $camp['id']; ?>" name=id>
    <?php
            }}
    ?>
</body>
</html>