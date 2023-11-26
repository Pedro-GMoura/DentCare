<?php 
 
if(!empty($_GET["id"])) {
    include_once("conexao.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM consulta WHERE cpf=$id";
    $result = $conexao->query($sqlSelect);

   if($result->num_rows > 0){

    $sqlDelete = "DELETE FROM consulta WHERE cpf=$id";
    $resultDelete = $conexao->query($sqlDelete);

    header('Location:../consultas.php');

     }

   }else{
    header('Location:../consultas.php'); 
   }
 
?>