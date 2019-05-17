<?php
	/*
		Página de comentários.

	*/
	require 'banco.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comentários</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<a href="formulario.html"><button>Comentar</button></a>
<h2>Comentários Enviados pelos Usuários</h2>



<?php
	//pega os comentarios no banco de dados
	$result = mysqli_query($link, "select id, nome, email, date_format(data_comment,'%d/%m/%Y %H:%i:%s') as data_comentario, comentario from tbcomentarios");
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
                            <td><a href="subformulario.php?id='.$row['id'].'"><button>Comentar comentario</button></a></td>
                            <td><a href=subcomentarios.php?id='.$row['id'].'><button>Mostrar comentários</button></a></td>
            </tr>';
	}
?>

</body>
</html>