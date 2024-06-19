<?php
    include 'conexao.php';

    $sql = "SELECT * FROM usuarios ORDER BY id";

    $resultado = $conn->query($sql);
?>
<a href = "index.php?pagina=usuarios_cadastro"> Cadastrar de usuários </a>
<table border = '1' widht = "50%">
    <tr>
    <th>ID</th>
    <th>Nome</th>	
    <th>Usuário</th>	
    <th>Senha</th>
    <th>E-mail</th>	
    <th>Editar</th>
    <th>Remover</th>
    </tr>

<?php
    while($linha = $resultado->fetch_assoc()){
        echo"<tr>
            <td>".$linha['id']."</td>
            <td>".$linha['nome']."</td>
            <td>".$linha['usuario']."</td>
            <td>".$linha['senha']."</td>
            <td>".$linha['email']."</td>
            <td><a href = 'pages/usuarios_editar?id=".$linha['id']."'>editar</a></td>
            <td><a href = 'pages/usuarios_remover.php?id=".$linha['id']."'>remover</a></td>
            </tr>";
    }
?>