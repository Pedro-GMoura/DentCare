 <?php 
    session_start();
    // print_r($_SESSION);

    if((!isset($_SESSION['login'])==true) and (!isset($_SESSION['senha']))==true){
       
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']); 
    
        echo '<script>';
        echo 'window.alert("Para acessar essa página, por favor faça login no sistema");';
        echo 'window.location.href = "login.php";';
        echo '</script>';


    } else {
        $logado = $_SESSION['login'];
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
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
            <a href="backend/sair.php"><button class="btn">Sair</button></a>
        </nav>
</header>

<main class="content">

   <main class="vitrine"> <div class="produto">
        <h1>Próteses</h1>
        <p>A prótese dentária é um dispositivo utilizado para substituir dentes ausentes ou danificados. Ela pode ser removível ou fixa e é feita de materiais como resina acrílica, porcelana, metal ou uma combinação desses materiais. A prótese dentária pode ajudar a melhorar a aparência estética do sorriso, além de auxiliar na mastigação e na fala.</p>

    </div>
    <div class="produto">
        <h1>Endodontia</h1>
        <p>O tratamento de canal, também conhecido como endodontia, é um procedimento realizado para salvar um dente que sofreu danos na polpa dentária. O tratamento de canal envolve a remoção da polpa afetada, limpeza e desinfecção do canal radicular e preenchimento com um material obturador. Após o tratamento, o dente pode ser restaurado com uma coroa ou obturação para garantir sua força e função.</p>
    </div>
    <div class="produto">
        <h1>Implantes</h1>
        <p>Os implantes são uma solução eficaz para substituir dentes perdidos ou danificados. Os implantes oferecem uma série de vantagens em relação a outras opções de tratamento, como dentaduras ou pontes, incluindo maior estabilidade, durabilidade e conforto. Além disso, os implantes ajudam a preservar a estrutura óssea e a manter a integridade da arcada dentária.</p>
    </div>
    <div class="produto">
        <h1>Ortodontia</h1>
        <p>A ortodontia é uma especialidade odontológica que tem como objetivo corrigir a posição dos dentes e dos ossos maxilares, para melhorar a estética e a função dos dentes. Uma das opções mais modernas e eficazes para o tratamento ortodôntico são os alinhadores invisíveis. Eles são feitos de um material transparente e são praticamente invisíveis, o que os torna uma opção muito popular entre adultos e adolescentes.</p>
    </div>
</main>
    <div class="cgeral">
        <h1>Clínica Geral</h1>
        <p>A clínica geral em odontologia é responsável pelo diagnóstico, prevenção e tratamento de diversas doenças bucais, além de promover a saúde e bem-estar dos pacientes por meio de orientações e cuidados específicos.</p>
    </div>

    <div class="consulta">
        <form action="backend/agendamento.php" method="post">
            <p>CPF(Números):</p><input type="number"  name="cpf">
            <p>Nome:</p><input type="text"  name="nome">
            <p>Data:</p><input type="date" name="data">

            <p class=>Tipo de Atendimento:</p>
                <select name="tipoAtendimento">
                    <option value="Proteses">Próteses</option>
                    <option value="Endodontia">Endodontia</option>
                    <option value="Implantes">Implantes</option>
                    <option value="Ortodontia">Ortodontia</option>
                    <option value="ClinicaGeral">Clínica Geral</option>
                </select>
            

            <p><input type="submit" value="Agendar" class="btn"></p>
            <p><a href="consultas.php"><input type="button" value="Consultas" class="btn"></a></p>
        
        </form>
    </div>

</main>

<footer>
        <p><a href="https://www.linkedin.com/in/pedro-henrique-moura-6938791b5/" target="_blank" class="me">© 2023. Desenvolvido por Pedro Moura</a></p>
</footer>

    
</body>
</html>