<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
</head>
<body class ="w3-black">
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" >
    <?php
    session_start();    
    $nome = $_POST['txtNome'];
    $senha = $_POST['txtSenha'];
       require_once 'conexaoBD.php';
       $sql = "SELECT * FROM professor WHERE nome =  '".$nome."';";
       $resultado = $conexao->query($sql);
       //echo $sql;
       $linha = mysqli_fetch_array($resultado);
       if($linha != null)
        {
            if($linha['senha'] == $senha )
            {
                echo '
                <a href="professor.php">
                    <h1 class="w3-button w3-green">Login Realizado com Sucesso!  </h1>
                </a> 
                ';
                $_SESSION['logado'] = $nome;
            }
            else
            {
                echo '
                <a href="index.php">
                    <h1 class="w3-button w3-green">Login Inválido! </h1>
                </a> 
                ';
            }
        }
        else
            {
                echo '
                <a href="index.php">
                    <h1 class="w3-button w3-green">Login Inválido! </h1>
                </a> 
                ';
            }
        $conexao->close();
    ?>
</div>
</body>
</html>