<?php
    session_start (); //Iniciando uma sessão
    
     function usuarioEstaLogado() //Não logou
     {
        return isset($_SESSION["usuario_logado"]);
     }
     //-----------------------------------------------------------------
     function usuarioLogado()//Já logou
     {
        return ($_SESSION["usuario_logado"]);
     }
     //------------------------------------------------------------------
     function logaUsuario ($email)
     {
         $_SESSION["usuario_logado"]=$email;
         
     }
     
     function AdmEstaLogado() //Não logou
     {
        return isset($_SESSION["adm_logado"]);
     }
     //-----------------------------------------------------------------
     function AdmLogado()//Já logou
     {
        return ($_SESSION["adm_logado"]);
     }
     //------------------------------------------------------------------
     function logaAdm ($email)
     {
         $_SESSION["adm_logado"]=$email;
     }
     //------------------------------------------------------------------
     function logout ()
     {
         session_destroy();
     }

?>
