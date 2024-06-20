<?php

// print_r($_REQUEST);
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) )
{
    // Acessa
    // && obrigou preencher email e senha
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    print_r('email: ' . $email);
    print_r('<br><br>');
    print_r('senha: ' . $senha);
}
else
{
    // Não Acessa
    header('Location: login.php');
}
?>