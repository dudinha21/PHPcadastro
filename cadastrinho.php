<?php

Class cadastro
{
    private $pdo;
    public $erro = "";
        public function conectar($nome, $host, $usuario, $senha){
            global $pdo;
            global $erro;

            try
            {
                $pdo = new PDO("mysql: dbname=".$nome.";host=".$host, $usuario, $senha);
            }
            catch(PDOException $e)
            {
                $erro=$e->getMessage();
            }
          
        }
        public function enviar($nome, $telefone){
            global $pdo;
            

            $sql = $pdo->prepare("select * from cadastro where nome = :a");
            $sql->bindValue(":a", $nome);
            $sql->execute();
            if($sql->rowCount() > 0){
                return false;
                echo "nome já foi utilizado";
            }
            else{
                $sql = $pdo->prepare("insert into cadastro (nome, telefone) values (:n, :t)");
                $sql->bindValue(":n", $nome);
                $sql->bindValue(":t", $telefone);
                $sql->execute();
                return true;
                echo "enviado com sucesso";
            }
        }

        public function listagem($nome){
            global $pdo;
            $sql = $pdo->prepare("select * from cadastro where nome = :n");
            $sql->bindValue(":n", $nome);

        }


}

?>