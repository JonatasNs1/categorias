<?php

     


    

//    if($_SERVER['REQUEST_METHOD'] == 'POST'){
//         $nome = $_POST['nome'];

//         if($nome == null){
//             echo('dados vazio');
//         }
  
//     }


require_once('../configuracoes/config.php');
require_once('../bd/inserirCategoria.php');

$nome = (string) null;


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //Recebe os dados encaminhados pelo formulario, através do metodo POST
    $nome = $_POST['nome'];
  
    
    //Validação de campos obrigatórios
if($nome == null )
{
    echo ("caixa vaizia");  
}
    //validacao de quantidade de caracteres
    //strlen($nome)>100 - Retorna a quantidade de caracteres de uma variavel
elseif(strlen($nome)>100)
    {
          echo ("<script> 
        alert('".caracter."');
        window.history.back(); 
    </script>"); 
    }
    else{
            $categorias = array(
                'nome' => $nome
          );
          
         if (inserir($categorias)) {
            echo ("foi 2");
         }
            
          else{
            echo ("nao foi 2");
          }
             
    }

    
}

?>