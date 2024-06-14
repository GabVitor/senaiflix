<html>
    <head>
        <meta charset = "UTF-8">
    </head>
    <body>
    <a href = "index.php?pagina=filmes_listar"> Lista de filmes </a>
        <h3> Cadastro de Filmes </h3>
        <form action = "index.php?pagina=filmes_cadastro_salvar" method = "POST">
            <label for = "titulo"> Título do filme </label><br>
            <input type = "text" name = "titulo" required placeholder = "Digite o título do filme"><br>
            
            <label for = "descricao"> Descrição do filme </label><br>
            <input type = "text" name = "descricao" required placeholder = "Digite a descrição do filme"><br>
            
            <label for = "ano_lancamento"> Ano de lançamento do filme </label><br>
            <input type = "date" name = "ano_lancamento" required placeholder = "Digite o ano de lançamento do filme"><br>
        
            <label for = "genero"> Gênero do filme </label><br>
            <input type = "text" name = "genero" required placeholder = "Digite o gênero do filme"><br>
            
            <label for = "classificacao"> Classificação do filme </label><br>
            <input type = "text" name = "titulo" required placeholder = "Digite a classificação do filme"><br>
    
            <button type = "submit" value = "Enviar"> Enviar </button>
        </form>
    </body>
</html>
            