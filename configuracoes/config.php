<?php

const BD_servidor = ('localhost');
const BD_usuario = ('root');
const BD_senha = ('bcd127');
const BD_database =('dbcategorias');
define ('SRC', $_SERVER['DOCUMENT_ROOT'].'categorias/'); 

const BD_MSG_EXCLUIR = "
<script> 
    alert('Registro excluido com sucesso do Banco de Dados'); 
    window.location.href='../index.php';
</script>";
const vazia = ('caixa vazia');
const BD_MSG_ERRO = "ERRO: Não foi possivel manipular os dados no Banco de dados!!!"; 

?>