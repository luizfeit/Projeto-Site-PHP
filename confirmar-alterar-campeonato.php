<?php require_once ("conecta.php")?>
<?php require_once ("Campeonato.php")?>
<?php require_once ("banco-usuario.php")?>

  <?php
    $campeonato=new Campeonatos;
    $campeonato->id=$_POST ["id"];
    $campeonato->nome_campeonato=$_POST ["nome_campeonato"];
    $campeonato->lista=$_POST ["lista"];
    $campeonato->premiacao=$_POST ["premiacao"];
    $campeonato->codigo=$_POST ["codigo"];
    $campeonato->data_camp=$_POST ["data_camp"];
    $campeonato->hora=$_POST ["hora"];

        if(alterarCampeonato ($conexao,$campeonato))
         {
           
            header("Location:listarCampeonato.php?removido=true");
        }
        else
        {
            echo mysqli_error($conexao);
        }
            
            
?>



