<?php

    $connection = mysqli_connect("localhost", "root", "", "formbasic");

    $nome = preg_replace($_POST['nome']);
    $telefone = preg_replace($_POST['telefone']);
    
    $sql = "insert into cadastro (nome, telefone) values ('$nome', '$telefone')";

    try {
        mysqli_query($connection, $sql);
        echo "Cadastro sucedido";
    }
    catch(\Throwable){
        echo "erro";
    }
        
    
?>