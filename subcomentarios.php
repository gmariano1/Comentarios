<?php
	/*
		Página de subcomentários.

	*/
	require 'banco.php';
    $id_comentario = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sub-comentários</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<a href="index.php"><button>Voltar</button></a>
<?php
	//pega os comentarios no banco de dados
	$result = mysqli_query($link, "select id, nome, email, date_format(data_comment,'%d/%m/%Y %H:%i:%s') as data_comentario, comentario from tbsubcomentarios where tbcomentario_id = ".$id_comentario);
	echo'
            
            <table class="table table-bordered">
                <thead>
                    <tr class="table-info">
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail <span class="glyphicon glyphicon-envelope"></span></th>
                        <th scope="col">Data</th>
                        <th scope="col">Comentário</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                </thead>';
    echo       "<tbody>";
    //mostra comentários com as infos relacionadas.
	while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
		echo'
			<tr>
				<th scope="row">'.$row['id'].'</th>
                            <td>'.$row['nome'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['data_comentario'].'</td>
                            <td>'.$row['comentario'].'</td>
                            <td><a href="subformulario.php?id='.$row['id'].'"><button>Comentar comentario</button></td>
                            <td><button>Mostrar comentários</button></td>
            </tr>';
	}
?>

</body>
</html>