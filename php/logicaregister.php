<?php
if(isset($_POST['submit']))
{
include_once('conexao.php');

$nome =$_POST['nome'];
$email =$_POST['email'];
$telefone =$_POST['telefone'];
$data_nasc =$_POST['data_nascimento'];
$cidade =$_POST['cidade'];

$result = mysqli_query($con,"INSERT INTO cliente(nome,
email, telefone, datan, cidade) values
('$nome','$email','$telefone','$data_nasc','$cidade')");

echo('cadastrado com sucesso: ');
}?>