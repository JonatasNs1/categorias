<?php
    require_once('../bd/conexao.php');

    // function edita($arrayCategoria){
    //     $sql = "update tblcategorias set
    //         nome = '".$arrayCategoria['nome']."'
      
    //     where idcategorias = ".$arrayCategoria['id'];
    //     $conexao = conexaoMysql();

    //    if( mysqli_query($conexao, $sql)){
    //        return true;
    //    }else{
    //         return false;
    //    }
    // }


function edita($arrayCategoria)
{
    $sql = "update tblcategorias set 
            nome = '".$arrayCategoria['nome']."'
    
        where idcategorias= ".$arrayCategoria['id'];
        $conexao = conexaoMysql();

        if(mysqli_query($conexao,$sql)){
            return true;
        }else{
            return false;
        }
    

}


?>

