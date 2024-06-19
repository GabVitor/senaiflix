<?php
    include '../conexao.php';

    if(!isset($_GET['id'])){
        echo "Filme Inválido".$conn->error;
        exit();
    }
    $id = $_GET['id'];

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];
        $ano_lancamento = $_POST["ano_lancamento"];
        $genero = $_POST["genero"];
        $classificacao = $_POST["classificacao"];
        $data_atualizacao = date("Y-m-d H:i:s");

        $q = "UPDATE filmes SET titulo = '$titulo', descricao = '$descricao', ano_lancamento = '$ano_lancamento', genero ='$genero', classificacao = '$classificacao', data_atualizacao = '$data_atualizacao' WHERE id = '$id'";
        if($conn->query($q) == TRUE){
            echo "Filme atualizado";
        }else{
            echo "error". $conn->error;
        }
    }
    header('Location: ../index.php?pagina=filmes_listar');
?>
