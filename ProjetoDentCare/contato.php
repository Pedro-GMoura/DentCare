<?php 
  
if(isset($_POST["enviar"])) {
    include_once("backend/conexao.php");

    $nome = $_POST["nome"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $mensagem = $_POST["txt"];

    $result = mysqli_query($conexao, "INSERT INTO formulario(nome_completo,telefone,email,mensagem) 
    VALUES ('$nome','$tel','$email','$mensagem')");

    echo '<script>';
    echo 'window.alert("Mensagem enviada com sucesso!");';
    echo '</script>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DentCare</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header class="cabecalho">
        <nav>
            <div class="nav_logo"><a href="index.php">DentCare</a></div>
            <ul class="nav_links">
                <li class="link"><a href="index.php">Home</a></li>
                <li class="link"><a href="sobre.php">Sobre Nós</a></li>
                <li class="link"><a href="servicos.php">Serviços</a></li>
                <li class="link"><a href="contato.php">Contato</a></li>
            </ul>
            <?php
                session_start();
                if(isset($_SESSION['login'])) {
    
                 echo '<a href="backend/sair.php"><button style="background-color: rgb(250, 95, 95);" class="btn">Sair</button></a>';
                } else {
    
                echo '<a href="login.php"><button class="btn">Login</button></a>';
                }
            ?>
        </nav>
    </header>

    <main class="formulario">
        <div>
            <form action="contato.php" method="POST" class="registro">
                Nome Completo:
                <input type="text" id="text" name="nome">
                Telefone:
                <input type="text" id="tel" name="tel">
                Email:
                <input type="email" id="email" name="email">
                Mensagem:
                <textarea rows="10" cols="30px" name="txt"></textarea><br>
    
    
                <input type="submit" value="Enviar" class="btn" name="enviar">
            </form>
        </div>
    </div>
    </main>

    <footer>
        <p><a href="https://www.linkedin.com/in/pedro-henrique-moura-6938791b5/" target="_blank" class="me">© 2023. Desenvolvido por Pedro Moura</a></p>
    </footer>

</body>
</html>