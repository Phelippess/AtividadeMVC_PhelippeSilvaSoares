<?php
require "controller/InicioController.php";
$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "index";

$Iniciactrl = new inicioController();

switch($pagina)
{
    case 'index':
        $Iniciactrl -> Index();
        break;
        
    case 'login':
         $Iniciactrl -> Login();
         break;
           
     case 'painel':
         $Iniciactrl -> Painel();
        break;


}
?>