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

////////////////////////////////////////////////////////////////////////////////////////////////////


if(!empty($_GET["id"])) {
    include_once("backend/conexao.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM consulta WHERE cpf=$id";
    $result = $conexao->query($sqlSelect);

   if($result->num_rows > 0){

        while($user_data = mysqli_fetch_assoc($result)){
    
    $cpf = $user_data["cpf"];
    $nome = $user_data["nome"];
    $data = $user_data["data"];
    

            print_r($cpf);

     }

   }else{
    header('Location:consultas.php');
   }

  

    //echo '<script>';
    //echo 'window.alert("Edição efetuado com sucesso!");';
    //echo '</script>';
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
            <?php
    
                if(isset($_SESSION['login'])) {
    
                 echo '<a href="backend/sair.php"><button style="background-color: rgb(250, 95, 95);" class="btn">Sair</button></a>';
                } else {
    
                echo '<a href="login.php"><button class="btn">Login</button></a>';
                }
            ?>
        </nav>
</header>

<main class="content">
<?php ?>
    <div class="consulta">
        <form action="backend/saveedit.php" method="post">
            <input type="hidden"  name="cpf" value="<?php echo $cpf?>">
            <p>Nome:</p><input type="text"  name="nome" value="<?php echo $nome?>">
            <p>Data:</p><input type="date" name="data" value="<?php echo $data?>">

            <p class=>Tipo de Atendimento:</p>
                <select name="tipoAtendimento" value="Selecione" >
                    <option value="proteses">Próteses</option>
                    <option value="endodontia">Endodontia</option>
                    <option value="implantes">Implantes</option>
                    <option value="ortodontia">Ortodontia</option>
                    <option value="clinicaGeral">Clínica Geral</option>
                </select>
            
            <p><a href="consultas.php"><input type="button" value="Voltar" class="btn"></a></p>
            <p><input type="submit" value="Atualizar" class="btn" name='atualizar'></p>
            
        
        </form>
    </div>

</main>

<footer>
        <p><a href="https://www.linkedin.com/in/pedro-henrique-moura-6938791b5/" target="_blank" class="me">© 2023. Desenvolvido por Pedro Moura</a></p>
</footer>

    
</body>
</html>