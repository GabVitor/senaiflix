<?php
    include 'conexao.php';

    $sql = "SELECT * FROM filmes ORDER BY id";

    $resultado = $conn->query($sql);
?>
<a href = "index.php?pagina=filmes_cadastro"> Cadastrar filme </a>
<table border = '1' widht = "50%">
    <tr>
    <th>id</th>
    <th>título</th>	
    <th>descrição</th>	
    <th>ano lançamento</th>	
    <th>gênero</th>	
    <th>classificação</th>	
    <th>editar</th>
    <th>remover</th>
    </tr>

<?php
    while($linha = $resultado->fetch_assoc()){
        echo"<tr>
            <td>".$linha['id']."</td>
            <td>".$linha['nome']."</td>
            <td>".$linha['cpf']."</td>
            <td>".$linha['endereco']."</td>
            <td>".$linha['bairro']."</td>
            <td>".$linha['cidade']."</td>
            <td>".$linha['estado']."</td>
            <td>".$linha['cep']."</td>
            <td>".$linha['email']."</td>
            <td>".$linha['telefone']."</td>
            <td><a href = 'index.php?pagina=filmes_editar&id=".$linha['id']."'>editar</a></td>
            <td><a href = 'index.php?pagina=filmes_remover&id=".$linha['id']."'>remover</a></td>
            </tr>";
    }
?>