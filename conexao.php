<?php
$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "senaiflix_gabrielvitor";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if($conn->connect_error){
        die("Erro de conexão: ".$conn->connect_error);
    }
?>