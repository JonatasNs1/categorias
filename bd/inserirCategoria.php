<?php
    
    require_once('../bd/conexao.php');
    

    // function inserir($arrayCategoria){

    //     $sql = "insert into tblcategorias
    //     (
    //     nome,
    //     ) 
    //     values
    //     (
    //         '".$arrayCategoria['nome']."'
           
    //     )
    //     ";

        function inserir($arrayCategoria)
        {
            
            $sql = "insert into tblcategorias
                (
                nome
                ) 
                values
                (
                    '".$arrayCategoria['nome']."'
                )
                ";
   

        $conexao = conexaoMysql();

        // $inserido = mysqli_query($conexao,$sql);

        if($inserido = mysqli_query($conexao,$sql)){
          return true;
        
        }else{
        return false;
        }

    }



?>