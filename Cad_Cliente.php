<?php 
    include_once './model/Cliente.php';
    include_once './iCRUD/iCRUD.php';
    
    if (isset($_POST['cadastrar'])) {
        $cliente = new Cliente();
        $cliente->setNome($_POST['nome']);
        $cliente->cadastrar();               
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
            Cadastrar Cliente
            <input type="text" name="nome">
            <input type="submit" value="cadastrar" name="cadastrar" />
        </form> 
        
        
    </body>
</html>
