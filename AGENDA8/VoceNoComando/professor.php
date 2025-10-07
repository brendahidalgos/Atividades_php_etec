<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if((!isset ($_SESSION['logado']) == true))
{
    header('location:acessoNegado.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Listagem Professores</title>
</head>
<body class="w3-black">
        <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin">
        <h1 class="w3-center w3-green  w3-margin">Professores</h1>
        <table class="w3-table-all w3-centered w3-text-black">
        <thead>   
            <tr class="w3-center w3-green ">
                <th>Código</th>
                <th>Nome</th>
                <th>Disciplina</th>
            </tr>
        <thead>
        <?php
            require_once 'conexaoBD.php';
            $conexao->set_charset("utf8");
            if ($conexao->connect_error) {
                die("Connection failed: " . $conexao->connect_error);
            } 
            $sql = "SELECT * FROM professor" ;
            $resultado = $conexao->query($sql);
            if($resultado != null)
            foreach($resultado as $linha) {
                echo '<tr>';
                echo '<td>'.$linha['idprofessor'].'</td>';
                echo '<td>'.$linha['nome'].'</td>';
                echo '<td>'.$linha['disciplina'].'</td>';
                echo '</tr>';
            }
            $conexao->close();
        ?>
    </table>
  

</div>
<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-bottomright">
        <form action="logoutAction.php" class="w3-container" method='post'>
            <button name="btnLogout" class="w3-button w3-red w3-cell w3-round-large w3-right w3-margin-right"> 
                <i class="w3-xxlarge fa fa-times-rectangle"> </i> Logout
            </button>
        </form>
    </div>
</body>
</html>