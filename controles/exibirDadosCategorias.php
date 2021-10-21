<?php

    require_once('bd/listarCategorias.php');
    function exibir(){
        
        $dadosListar =  listar();
  
        return $dadosListar;
    }


  




?>