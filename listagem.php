<?php

    $connection = mysqli_connect("localhost", "root", "", "formbasic");

    $sql = "select * from cadastro";

    try {
        mysqli_query($connection, $sql);
        echo "Cadastro sucedido";
    }
    catch(\Throwable){
        echo "erro";
    }
        
    
?>