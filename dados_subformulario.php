<?php
require 'banco.php';

$nome=$_POST['nome'];
$email=$_POST['email'];        
$comentario=$_POST['comentario'];
$id_comentario = $_POST['id_comentario'];

$sql = "INSERT INTO tbsubcomentarios (nome, email, comentario, tbcomentarios_id)
VALUES ('$nome', '$email', '$comentario', '$id_comentario')";

$resultado = mysqli_query($link, $sql);

if($resultado)
	header("location: index.php?comment_aceito");
else
	header("location: index.php?erro");
