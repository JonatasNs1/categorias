<?php

    require_once('../bd/conexao.php');
    function excluir($idcategorias){
        $sql = "delete from tblcategorias where idcategorias =".$idcategorias;

  
    
        $conexao = conexaoMysql();

        if($ex = mysqli_query($conexao, $sql)){
            return true;
        }else{
            return false;
        }
    }



?>