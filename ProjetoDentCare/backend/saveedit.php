<?php  

    include_once('conexao.php'); 

    if (isset($_POST['atualizar'])){
        
        $cpf = $_POST["cpf"];
        $nome = $_POST["nome"];
        $data = $_POST["data"];
        $tipoAtendimento = $_POST["tipoAtendimento"];

        $sqlUpdate = "UPDATE consulta SET nome='$nome',cpf='$cpf',data ='$data',tipo_atendimento ='$tipoAtendimento' WHERE cpf = '$cpf'";

        $result = $conexao->query($sqlUpdate);
    }

    header('location:../consultas.php');


?>