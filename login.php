<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="meucss/meucss.css" rel="stylesheet" type="text/css">
  </head>
  <body>
   <form method="post" action="Entrarlogin.php">
       <div class="bg">
       <p class="py-5 text-center"> </p>
       
   <div class="container container-fluid rounded p-5" id="error-cadastro" style="width: 400px; background-color: white;" id="base">
                <h3 style="color: black;">Insira sua Conta
                <span class="label label-default"></span></h3>
                <div class="form-group">
                    <label for="usr">Email</label>
                    <input type="text" placeholder="Digite o Email"
                    class="form-control" autocomplete="off" name="email">
                </div>
                <div class="form-group">
                    <label for="usr">Senha</label>
                    <input type="password" placeholder="Digite Sua senha"
                        class="form-control" autocomplete="off" name="senha">
                </div>
                <center>
                <button type="submit" class="btn btn-secondary">Entrar</button> 
                <br>
                <p> Não possui conta ?  <a href="cadastro.php"> Crie uma agora </a> </p>
                <br>
                <a href="index.php"> Sair </a>
                 </center> 
            </div>
            </div>
         
   </form>
  </body>
   </html>