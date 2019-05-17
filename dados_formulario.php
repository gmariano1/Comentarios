<?php
//conecta banco de dados
require 'banco.php';
//Pega os valores do formulario
$nome=$_POST['nome'];
$email=$_POST['email'];          
$comentario=$_POST['comentario'];
//código para inserir no banco
$sql = "INSERT INTO tbcomentarios (nome, email, comentario)
VALUES ('$nome', '$email', '$comentario')";
//insere no banco
$resultado = mysqli_query($link, $sql);
//retorna a pagina inicial
if($resultado)
	header("location: index.php?comment_aceito");
else
	header("location: index.php?erro");



