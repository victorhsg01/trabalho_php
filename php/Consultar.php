<?php

    session_start();
    if(empty($_SESSION)){
        echo"<script>location.href='index.php';</script>";
    }
    include_once('conexao.php');
    $logado =$_SESSION['usuario'];
    $sql = "select * from cliente";
    $result = $con->query($sql);
    //print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>

<br>
    <?php
        echo"LISTANDO DADOS DA TABELA CLIENTE";
        echo"<BR>";
        echo"<a href='logout.php'> sair </a>";
    ?>
    <div>
        <table border="2">
        <tr>
        <td>identificador</td>
            <td>nome</td>
            <td>email</td>
            <td>telefone</td>
            <td>datan</td>
            <td>cidade</td>
            <td>editar</td>
            <td>excluir</td>
        </tr>
        <?php
        while($user_data = mysqli_fetch_assoc($result))
        {
            echo"<tr>";
            echo"<td>".$user_data['id']."</td>";
            echo"<td>".$user_data['nome']."</td>";
            echo"<td>".$user_data['email']."</td>";
            echo"<td>".$user_data['telefone']."</td>";
            echo"<td>".$user_data['datan']."</td>";
            echo"<td>".$user_data['cidade']."</td>";
            echo"<td><a href='alterar.php?id=$user_data[id]'><img src='../img/editar.png' /></a></td>";
            echo"<td><a href='#'><img src='../img/excluir.png' /></a></td>";
            echo"</tr>";

        }
        ?>
        </table>
    </div>
</body>
</html>