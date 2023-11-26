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
            <form action="backend/check.php" method="post" class="registro">
                Login:
                <input type="text" id="text" name="login">
                Senha:
                <input type="password" id="senha" name="senha">
            
                <input type="submit" value="Login" class="btn" name="logsubmit">

                <a href="cadastro.php"><input type="button" value="Cadastrar" class="btn"></a>

            </form>
        </div>
    </div>
    </main>

    <footer>
        <p><a href="https://www.linkedin.com/in/pedro-henrique-moura-6938791b5/" target="_blank" class="me">© 2023. Desenvolvido por Pedro Moura</a></p>
    </footer>

</body>
</html>