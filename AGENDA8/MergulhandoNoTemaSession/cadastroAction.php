<?php require_once ('verificarAcesso.php'); ?>
<?php require_once ('cabecalho.php'); ?>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <?php
        require_once 'conexaoBD.php';
        $sql = "INSERT INTO amigo (nome, apelido, email)
        VALUES ('".$_POST['txtNome']."', '".$_POST['txtApelido']."', '".$_POST['txtEmail']."')";
     
        if ($conexao->query($sql) === TRUE) {
            echo '
            <a href="principal.php">
                <h1 class="w3-button w3-teal">Amigo Salvo com sucesso! </h1>
            </a> 
            ';
            
        } else {
            echo '
            <a href="principal.php">
                <h1 class="w3-button w3-teal">ERRO! </h1>
            </a> 
            ';
        }
        $conexao->close();
    ?>
</div>
<?php require_once ('rodape.php'); ?>