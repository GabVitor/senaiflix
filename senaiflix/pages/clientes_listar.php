<?php
    include 'conexao.php';

    $sql = "SELECT * FROM clientes ORDER BY id";

    $resultado = $conn->query($sql);
?>
<a href = "index.php?pagina=clientes_cadastro"> Cadastrar cliente </a>
<table border = '1' widht = "50%">
    <tr>
    <th>id</th>
    <th>nome</th>	
    <th>cpf</th>	
    <th>endereco</th>	
    <th>bairro</th>	
    <th>cidade</th>	
    <th>estado</th>	
    <th>cep</th>
    <th>email</th>	
    <th>telefone</th>	
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
            <td><a href = 'pages/clientes_editar&id=".$linha['id']."'>editar</a></td>
            <td><a href = 'pages/clientes_remover&id=".$linha['id']."'>remover</a></td>
            </tr>";
    }
?>