<?php 

$id_comentario = $_GET['id'];

?>

<a href="index.php"><button>Voltar</button></a>
<br>
<form name="form" method="post" action="dados_subformulario.php">
	<input type="hidden" name="id_comentario" value="<?php echo $id_comentario ?>">
	Nome:
	<input type=text name=nome>
	<br><br>
	E-Mail:
	<input type=text name=email>
	<br><br>
	Mensagem:
	<br><textarea name=comentario></textarea>
	<br><br>
	<input type=submit value=Enviar>
	<input type=reset value=Limpar>

</form>
<hr>