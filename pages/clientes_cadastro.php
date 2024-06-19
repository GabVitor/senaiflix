		<a href = "index.php?pagina=clientes_listar"> Lista de clientes </a>
        <form action = "index.php?pagina=clientes_cadastro_salvar" method = "POST">
            <label for ="nome"> Nome do cliente </label><br>
            <input type = "text" name = "nome" required minlength = "3" placeholder = "Digite o nome do cliente"><br>

            <label for = "cpf"> CPF do cliente </label><br>
            <input type = "text" name = "cpf" required maxlength = "11" placeholder = "Digite o CPF do cliente"><br>

            <label for = "endereco"> Endereço do cliente </label><br>
            <input type = "text" name = "endereco" required placeholder = "Endereço do cliente"><br>
            
            <label for = "bairro"> Bairro do cliente </label><br>
            <input type = "text" name = "bairro" required placeholder = "Bairro do cliente"><br>
            
            <label for = "cidade"> Cidade do cliente </label><br>
            <input type = "text" name = "cidade" required placeholder = "Cidade do cliente"><br>

            <label class="letras" for = "estado"> Estado do cliente: </label><br>
		    <select id = "estado" name = "estado" required>
			    <option value = ""> Selecione...</option>
			    <option value = "AC"> Acre </option>
			    <option value = "AL"> Alagoas </option>
			    <option value = "AP"> Amapá </option>
			    <option value = "AM"> Amazonas </option>
			    <option value = "BA"> Bahia </option>
			    <option value = "CE"> Ceará </option>
			    <option value = "ES"> Espirito Santo </option>
			    <option value = "GO"> Goiás </option>
			    <option value = "MA"> Maranhão </option>
			    <option value = "MT"> Mato Grosso </option>
			    <option value = "MS"> Mato Grosso do Sul </option>
			    <option value = "MG"> Minas Gerais </option>
			    <option value = "PA"> Pará </option>
			    <option value = "PB"> Paraíba </option>
			    <option value = "PR"> Paraná </option> 
			    <option value = "PE"> Pernambuco </option>
			    <option value = "PI"> Piauí </option>
			    <option value = "RJ"> Rio de Janeiro </option>
			    <option value = "RN"> Rio Grande do Norte </option>
			    <option value = "RS"> Rio Grande do Sul </option>
			    <option value = "RO"> Rondônia </option>
			    <option value = "RR"> Roraima </option>
			    <option value = "SC"> Santa Catarina </option>
			    <option value = "SP"> São Paulo </option>
			    <option value = "SE"> Sergipe </option>
			    <option value = "TO"> Tocantins </option>
		    </select><br>

            <label for = "cep"> CEP do cliente </label><br>
            <input type = "text" name = "cep" required maxlength = "8" placeholder = "CEP do cliente"><br>

			<label for = "email"> E-mail do cliente </label><br>
			<input type = "text" name = "email" required placeholder = "E-mail do cliente"><br>

			<label for = "telefone">Telefone do cliente </label><br>
			<input type = "text" name ="telefone" required placeholder = "Telefone do cliente"><br>
			
            <button type = "submit"> Enviar </button>
        </form>