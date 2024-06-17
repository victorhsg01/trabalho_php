<?php
    session_start();

    if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))){
        echo "<script> location.href='index.php';</script>";
    }
    include("conexao.php");
   
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "select * from aluno where usuario = '{$usuario}'
    AND senha ='{$senha}'";

    $res = $con->query($sql) or die($con->error);
   
    $row = $res->fetch_object();
    $qtd = $res->num_rows;
   
    if($qtd > 0){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        echo"<script> location.href='dashboard.php';</script>";
    }else{
        echo"<script>alert('usuario ou senha invalido');</script>";
        echo"<script>location.href='index.php';</script>";
    }
?>