
<a href = "index.php?pagina=filmes_listar"> Lista de usuários </a>
<h3> Cadastro de usuários </h3>
<form action = "index.php?pagina=usuarios_cadastro_salvar" method = "POST">
    <label for = "nome"> Nome </label><br>
    <input type = "text" name = "nome" required placeholder = "Digite o nome"><br>
            
    <label for = "usuario"> Usuário </label><br>
    <input type = "text" name = "usuario" required placeholder = "Digite o usuário"><br>

    <label for = "senha"> Senha </label><br>
    <input type = "text" name = "senha" required placeholder = "Digite a senha"><br>
            
    <label for = "email"> E-mail </label><br>
    <input type = "email" name = "email" required placeholder = "Digite o email"><br>

    <button type = "submit" value = "Enviar"> Enviar </button>
</form>            