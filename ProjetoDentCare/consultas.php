<?php 
session_start();
include_once('backend/conexao.php'); 

if (!isset($_SESSION['login']) || !isset($_SESSION['senha'])) {
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']); 

    echo '<script>';
    echo 'window.alert("Para acessar essa página, por favor faça login no sistema");';
    echo 'window.location.href = "login.php";';
    echo '</script>';
} else {
    $logado = $_SESSION['login'];
    $result = null;

    if (!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sqlSearch = "SELECT * FROM consulta WHERE cpf LIKE '$data'";
        $result = $conexao->query($sqlSearch);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DentCare</title>
    <link rel="stylesheet" href="style/teste.css">
</head>
<body class="teste">
    <header class="cabecalho">
        <nav>
            <div class="nav_logo"><a href="index.php">DentCare</a></div>
            <ul class="nav_links">
                <li class="link"><a href="index.php">Home</a></li>
                <li class="link"><a href="sobre.php">Sobre Nós</a></li>
                <li class="link"><a href="servicos.php">Serviços</a></li>
                <li class="link"><a href="contato.php">Contato</a></li>
            </ul>
            <a href="login.php"><button class="btn">Login</button></a>
        </nav>
    </header>

    <main class="mainconsulta">
        <div class="search">
            <h1>Digite seu CPF:</h1>
            <input type="text" id="pesquisar">
            <input type="button" value="Pesquisar" class="acoes" onclick="searchData()">
        </div>

        <table>
            <thead>
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Data</th>
                    <th>Consulta</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if ($result && $result->num_rows > 0) {
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['cpf']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['data']."</td>";
                        echo "<td>".$user_data['tipo_atendimento']."</td>";
                        echo "<td>
                            <a href='edit.php?id=".$user_data['cpf']."'><input type='button' class='acoes' value='Editar'></a>
                            <a href='backend/delete.php?id=".$user_data['cpf']."'><input type='button' class='acoes' value='Excluir'></a>
                            </td>";  
                    }
                } else {
                    echo "<tr><td colspan='5'>Nenhum resultado encontrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p><a href="https://www.linkedin.com/in/pedro-henrique-moura-6938791b5/" target="_blank" class="me">© 2023. Desenvolvido por Pedro Moura</a></p>
    </footer>

    <script>
        var search = document.getElementById('pesquisar');

        search.addEventListener("keydown", function(event) {
            if (event.key === "Enter") {
                searchData();
            }
        });

        function searchData() {
            window.location = 'consultas.php?search='+search.value;
        }
    </script>
</body>
</html>