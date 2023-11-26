<?php 
include_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $data = $_POST["data"];
    $tipoAtendimento = $_POST["tipoAtendimento"];

    $query = "INSERT INTO consulta (cpf, nome, data, tipo_atendimento) VALUES ('$cpf', '$nome', '$data', '$tipoAtendimento')";
    
    if (mysqli_query($conexao, $query)) {

        echo '<script>';
        echo 'window.alert("Consulta agendada com sucesso!");';
        echo 'window.location.href = "../consultas.php";';
        echo '</script>';


    } else {
        echo "Erro ao inserir dados: " . mysqli_error($conexao);
    }
}
?>