<?php
    include '../conexao.php';

    if(!isset($_GET['id'])){
        echo "Usuário Inválido".$conn->error;
        exit();
    }
    $id = $_GET['id'];

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $nome = $_POST["nome"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $email = $_POST["email"];
        $data_atualizacao = date("Y-m-d H:i:s");

        $q = "UPDATE usuarios SET nome = '$nome', usuario = '$usuario', senha = '$senha', email = '$email', data_atualizacao = '$data_atualizacao' WHERE id = '$id'";
        if($conn->query($q) == TRUE){
            echo "Usuário atualizado";
        }else{
            echo "error". $conn->error;
        }
    }
    header('Location: ../index.php?pagina=usuarios_listar');
?>
