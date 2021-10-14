  <html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="meucss/meucss.css" rel="stylesheet" type="text/css">
  </head>
  <body>
   <form method="post" action="adiciona-usuario.php">
       <div class="bg">
       <p class="py-5 text-center"> </p>
       
   <div class="container container-fluid rounded p-5" id="error-cadastro" style="width: 400px; background-color: white;" id="base">
                <h3 style="color: black;">Cadastro-se Invocador
                <span class="label label-default"></span></h3>
                <div class="form-group">
                    <label for="usr">Nome</label>
                    <input type="text" placeholder="Digite o primeiro nome"
                        class="form-control" autocomplete="off" name="nome" >
                </div>
                <div class="form-group">
                    <label for="usr">Nome De Invocador </label>
                    <input type="text" placeholder="Digite o Nome do Invocador"
                        class="form-control" autocomplete="off" name="nick">
                </div>
                <div class="form-group">
                    <label for="usr">Email</label>
                    <input type="email" placeholder="Ex: exemplo@hotmail.com"
                        class="form-control" autocomplete="off" name="email">
                </div>
                <div class="form-group">
                    <label for="usr">Senha</label>
                    <input type="password" placeholder="Digite Sua senha"
                        class="form-control" autocomplete="off" name="senha">
                </div>
                <center>
                <button type="submit" class="btn btn-secondary">cadastrar</button>
                <button type="reset" class="btn btn-secondary">Apagar</button>
                <br>
                <br>
                <a href="login.php"> sair </a>
                 </center> 
            </div>
            </div>
         
   </form>
  </body>
   </html>