<?php
    include 'conexao.php';

    $sql = "SELECT * FROM filmes ORDER BY id";

    $resultado = $conn->query($sql);
?>
<a href = "index.php?pagina=filmes_cadastro"> Cadastrar filme </a>
<table border = '1' widht = "50%">
    <tr>
    <th>ID</th>
    <th>Título</th>	
    <th>Descrição</th>	
    <th>Ano lançamento</th>	
    <th>Gênero</th>	
    <th>Classificação</th>	
    <th>Editar</th>
    <th>Remover</th>
    </tr>

<?php
    while($linha = $resultado->fetch_assoc()){
        echo"<tr>
            <td>".$linha['id']."</td>
            <td>".$linha['titulo']."</td>
            <td>".$linha['descricao']."</td>
            <td>".$linha['ano_lancamento']."</td>
            <td>".$linha['genero']."</td>
            <td>".$linha['classificacao']."</td>
            <td><a href = 'pages/filmes_editar?id=".$linha['id']."'>editar</a></td>
            <td><a href = 'pages/filmes_remover?id=".$linha['id']."'>remover</a></td>
            </tr>";
    }
?>