<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'conexao.php';
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];
        $ano_lancamento = $_POST["ano_lancamento"];
        $genero = $_POST["genero"];
        $classificacao = $_POST["classificacao"];
        $data_cadastro = date("Y-m-d H:i:s");
        $data_atualizacao = date("Y-m-d H:i:s");
        $status = 0;
    
        $sql = "INSERT INTO filmes (titulo, descricao, ano_lancamento, genero, classificacao, data_cadastro, data_atualizacao, status) 
        VALUES ('$titulo','$descricao','$ano_lancamento','$genero','$classificacao','$data_cadastro','$data_atualizacao','$status')";
        if($conn->query($sql) == TRUE){
            echo "Cadastro de filme realizado com sucesso";
        }else{
            echo "Error". $conn->error;
        }
    }
?>