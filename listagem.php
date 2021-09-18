<?php

require_once 'cadastrinho.php';
$c = new cadastro;


$nome =  $_POST['nome'];
$telefone = $_POST['telefone'];


$p->conectar("formbasic", "localhost", "root", "");
if($p->erro == "")
{
    $p->listagem($nome);
}
else{
    echo "erro na conexão";
}


 header("location: listagemPessoa.php");

        
    
?>