<?php 
session_start();

if(isset($_POST["logsubmit"]) && !empty($_POST["login"])  && !empty($_POST["senha"])) {

    include_once('conexao.php');

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    //print_r($login);
    // print_r ('<br>');
    // print_r($senha);

   $sql = "SELECT * FROM cadastro where user = '$login' and pass ='$senha'";

   $result = $conexao->query($sql);

  // print_r($result);

   if(mysqli_num_rows($result) < 1) {

    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);

    echo '<script>';
    echo 'window.alert("Esse usuário não existe. Por favor, faça o cadastro.");';
    echo 'window.location.href = "../cadastro.php";';
    echo '</script>';

   } else {

    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    echo '<script>';
    echo 'window.alert("Login efetuado com sucesso!.");';
    echo 'window.location.href = "../index.php";';
    echo '</script>';

   }


} else {
    header('Location: ../cadastro.php');
}

?>