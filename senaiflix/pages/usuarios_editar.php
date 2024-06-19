<?php
include 'conexao.php';
	$id = $_GET['id'];
	$q = "SELECT * FROM usuarios WHERE id = '$id'";
	$resultado = $conn->query($q);
	if($resultado->num_rows <= 0){
		echo "Usuário não encontrado";
	}
	$linha = $resultado->fetch_assoc();
?>

<a href = "index.php?pagina=usuarios_listar" target = ""> Voltar </a><br>
<h3> Editar </h3>
<form action = "pages/usuarios_editar_salvar.php?id=<?php echo $linha['id']; ?>" method = "POST">
    <label for = "nome"> Nome </label><br>
    <input type = "text" name = "nome" required placeholder = "Digite o nome" value ="<?php echo $linha['nome']; ?>"><br>
            
    <label for = "usuario">Usuário</label><br>
    <input type = "text" name = "usuario" required placeholder = "Digite o usuário" value ="<?php echo $linha['usuario']; ?>"><br>

    <label for = "senha">senha</label><br>
    <input type = "password" name = "senha" required placeholder = "Digite a senha" value ="<?php echo $linha['senha']; ?>"><br>
            
    <label for = "email"> E-mail </label><br>
    <input type = "email" name = "email" required placeholder = "Digite o email"value ="<?php echo $linha['email']; ?>"><br>
        
    <button type = "submit" value = "Enviar"> Enviar </button>
</form>
