<?php

include_once './abstract/Abstrata.php';
include_once './iCRUD/iCRUD.php';

class Cliente extends Abstrata implements iCRUD {
    //CRIANDO OS ATRUBUTOS
    private $id;
    private $nome;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    
        
    public function alterar() {
        
    }

    public function cadastrar() {
        $pdo = parent::getDB();
        
        try {
            $cadastrar = $pdo->prepare("INSERT INTO cliente(nome) VALUES(?)");
            $cadastrar->bindParam(1, $this->getNome());
            $cadastrar->execute();
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        } finally {
            
        }
            
    }
    
    public function deletar() {
        parent::deletar();
    }
    
    public function listar() {
        parent::$tabela = "cliente";
        return parent::listar();
    }

    
}