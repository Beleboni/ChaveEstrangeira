<?php 
    include_once './model/Projeto.php';
    include_once './iCRUD/iCRUD.php';
    
    $id = $_GET['id'];
    echo $id;
    
    if (isset($_POST['cadastrar'])) {
        $projeto = new Projeto();
        $projeto->setIdCliente($id);
        $projeto->setNomeProjeto($_POST['nomeProjeto']);
        if($projeto->cadastrar()):
            echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>
                    alert ('Dados Cadastrados com sucesso !!!')</SCRIPT>";
            
            else:
                echo $projeto->getErro();
        endif;            
    }

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="">
            Cadastrar Projeto
            <input type="text" name="nomeProjeto">
            <input type="submit" value="cadastrar" name="cadastrar" />
        </form> 
    </body>
</html>
