<?php

require_once('../bd/excluirCategorias.php');

require_once('../configuracoes/config.php');




 
$idcategorias = $_GET['id'];


if(excluir($idcategorias)){
   echo(BD_MSG_EXCLUIR);
}else{
    echo ("
    ERRO: Não foi possivel;
        ");
}




?>