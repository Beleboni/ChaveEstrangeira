<?php 
    include_once './model/Cliente.php';
    $cliente = new Cliente();
    $dados = $cliente->listar();   
   
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          <table>
                    <tr>
                        <td>Nome</td>
                    </tr>
                    <?php
                        if (!empty($dados)):
                            foreach ($dados as $empr):
                                ?>   
                                <tr>
                                    <td><?php echo $empr['nome']; ?></td>
                                    <td align="center" class="linhaDois"><a href="Cad_Projeto.php?ac&id=<?php echo $empr['id'];?> ">Novo</a></td>
                                   
                                </tr>

                                <?php
                            endforeach;
                        else:
                            echo "<td colspan='6' align='center'>Opps!!! Não existem Empresas cadastradas</td>";
                        endif; 
                    ?>          
                </table>    
        
    </body>
</html>