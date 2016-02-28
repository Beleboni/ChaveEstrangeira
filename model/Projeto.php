<?php

include_once './abstract/Abstrata.php';
include_once './iCRUD/iCRUD.php';


class Projeto extends Abstrata implements iCRUD {
    private $id;
    private $idCliente;
    private $nomeProjeto;
    
    function getId() {
        return $this->id;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getNomeProjeto() {
        return $this->nomeProjeto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNomeProjeto($nomeProjeto) {
        $this->nomeProjeto = $nomeProjeto;
    }

        
    
    
    public function alterar() {
        
    }

    public function cadastrar() {
        $pdo = parent::getDB();
        
        try {
            $cadastrar = $pdo->prepare("INSERT INTO projeto(idCliente, nomeProjeto) VALUES(?, ?)");
            $cadastrar->bindParam(1, $this->getIdCliente());
            $cadastrar->bindParam(2, $this->getNomeProjeto());
            $cadastrar->execute();
           if($cadastrar->rowCount() == 1):
                    return true;
                else:
                    echo "Falta Chave Estrangeira";
                endif;
        } catch (PDOException $e){        
            echo "Erro: " . $e->getMessage();
        }
        
    }
    
    public function deletar() {
        parent::deletar();
    }
    
    public function listar() {
        parent::listar();
    }

}
