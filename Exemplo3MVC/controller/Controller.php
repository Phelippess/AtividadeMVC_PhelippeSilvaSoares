<?php
require "model/Model.php";


class Controller{

    public function Index(){
        $iniciamodel = new Model();
        $dados = $iniciamodel->ApresentaDados();
        include "view/View.php";
       
        
    }  
        



}

?>