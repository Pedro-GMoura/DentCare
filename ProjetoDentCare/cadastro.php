<?php 

if(isset($_POST["cadastrar"])) {
    include_once("backend/conexao.php");

    $user = $_POST["user"];
    $emailregistro = $_POST["emailregistro"];
    $pass = $_POST["pass"];

    $result = mysqli_query($conexao, "INSERT INTO cadastro(user,pass,emailregistro) 
    VALUES ('$user','$pass','$emailregistro')");

    echo '<script>';
    echo 'window.alert("Cadastro efetuado com sucesso!");';
    echo 'window.location.href = "login.php";';
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
                <li class="link"><a href="servicos.php">Servicos</a></li>
                <li class="link"><a href="contato.php">Contato</a></li>
            </ul>
            <a href="login.php"><button class="btn">Login</button></a>
        </nav>
    </header>

    <main class="formulario">
        <div>
            <form action="cadastro.php" method="POST" class="registro">
                Login:
                <input type="text" id="text" name="user">
                Senha:
                <input type="password" id="senha" name="pass">
                Email:
                <input type="text" id="email" name="emailregistro">
            
                <input type="submit" value="Cadastrar" class="btn" name="cadastrar">
            </form>
        </div>
    </div>
    </main>

    <footer>
        <p><a href="https://www.linkedin.com/in/pedro-henrique-moura-6938791b5/" target="_blank" class="me">© 2023. Desenvolvido por Pedro Moura</a></p>
    </footer>

</body>
</html>