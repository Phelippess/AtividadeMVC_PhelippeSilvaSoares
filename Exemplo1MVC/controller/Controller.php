<?php
require "model/Model.php";
require "view/View.php";

class Controller{

    public function Index(){
        $iniciamodel = new Model();
        $iniciaview = new View();
        $iniciaview -> Exibir ($iniciamodel->ApresentaDados());
        
    }  
        



}

?>