<?php

require_once('bd/conexao.php');
function listar(){

    $sql = "select * from  tblcategorias";

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    // if( $select = mysqli_query($conexao, $sql)){
    //     echo('selecao feita com sucesso');
    // }else{
    //     echo('erro');
    // }

    return $select;
}

        

?>