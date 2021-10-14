<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="meucss/meucss.css" rel="stylesheet" type="text/css">
  </head>
  <body>
   <form method="post" action="adiciona-campeonato.php">
       <div class="bg3">
       <!--<p class="py-5 text-bottom"> </p>-->
       <div class="container container-fluid rounded p-5" id="error-cadastro" style="width: 600px; background-color: white;" id="base">
           <h3 style="color: black;"> Insira os Campeonatos
           <span class="label label-default"></span></h3>
           <div class="form-group">  
             <label for="usr"> Nome do campeonato</label>
             <input type=text placeholder="Nome do Campeonato" class="form-control" 
              autocomplete="off "name="nome_campeonato">
              </div>
              <div class="form-group">  
             <label for="usr"> Detalhes do campeonato </label>
             <br/>
             <textarea id="lista" name="lista" style="width: 500px; height:200;"></textarea>
              </div>
              <div class="form-group">  
             <label for="usr"> Premiação </label>
             <br>
             <textarea id="premiacao" name="premiacao" rows=1 cols=50> </textarea>
              </div>
              <div class="form-group">  
             <label for="usr"> Código Do Campeonato </label>
             <input type="text" placeholder="Nome do Campeonato" class="form-control" 
              autocomplete="off "name="codigo">
              </div>
              <div class="form-group">  
             <label for="usr">Data</label>
             <input type="date"  class="form-control" 
              autocomplete="off" name="data_camp" value="data">
              </div>
              <div class="form-group">  
              <label for="usr">Data</label>
              <input type="time"  class="form-control" 
              autocomplete="off" name="hora" value="hora">
              </div>
              <center>
                <button type="submit" class="btn btn-secondary">cadastrar</button>
                <button type="reset" class="btn btn-secondary">Apagar</button>
                <a href="paginaComCadastro.php"> <button type="reset" class="btn btn-secondary"> Voltar </a> </button>
              </center> 
            </div>
            </div>
            </form>
            </body>
            </html>