<?php
include 'conexao.php';
	$id = $_GET['id'];
	$q = "SELECT * FROM filmes WHERE id = '$id'";
	$resultado = $conn->query($q);
	if($resultado->num_rows <= 0){
		echo "Filme não encontrado";
	}
	$linha = $resultado->fetch_assoc();
?>



<a href = "index.php?pagina=filmes_listar" target = ""> Voltar </a><br>
<h3> Editar </h3>
<form action = "pages/filmes_editar_salvar.php?id=<?php echo $linha['id']; ?>" method = "POST">
    <label for = "titulo"> Título do filme </label><br>
    <input type = "text" name = "titulo" required placeholder = "Digite o título do filme" value ="<?php echo $linha['titulo']; ?>"><br>
            
    <label for = "descricao"> Descrição do filme </label><br>
    <input type = "text" name = "descricao" required placeholder = "Digite a descrição do filme" value ="<?php echo $linha['descricao']; ?>"><br>
            
    <label for = "ano_lancamento"> Ano de lançamento do filme </label><br>
    <input type = "number" name = "ano_lancamento" required placeholder = "Digite o ano de lançamento do filme"value ="<?php echo $linha['ano_lancamento']; ?>"><br>
        
    <label for = "genero"> Gênero do filme </label><br>
    <input type = "text" name = "genero" required placeholder = "Digite o gênero do filme"value ="<?php echo $linha['genero']; ?>"><br>
            
    <label for = "classificacao"> Classificação do filme </label><br>
    <input type = "number" name = "classificacao" required placeholder = "Digite a classificação do filme"value ="<?php echo $linha['classificacao']; ?>"><br>
    
    <button type = "submit" value = "Enviar"> Enviar </button>
</form>
