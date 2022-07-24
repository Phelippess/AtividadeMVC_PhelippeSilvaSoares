<?php


require "model/UsuarioModel.php";

class InicioController {
    public function Index ()
     {
         include "view/index.php";
     }

    public function Login ()
          {
              include "view/Login.php";
          }

    public function Painel ()
               {
                   $iniciamodel = new UsuarioModel();
                   $usuario = $iniciamodel -> UsuarioLogado();
                   include "view/Painel.php";
                }
}
?>