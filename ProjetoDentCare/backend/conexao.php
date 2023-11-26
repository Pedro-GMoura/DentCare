<?php 
 
    $dbHost = "Localhost";
    $dbUsername = "root";
    $dbPassword = "";

    $dbName = "dentcaretrabalho"; 

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if ($conexao->connect_errno) {
    // 
    //     echo "Erro";
    //   }else {
    //     echo "sucesso";
    // }

?>