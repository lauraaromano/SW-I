<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email == 'lauraromano2018@gmail.com' && $senha == '1234'){
        //privada.php
        $nome= "Laura";
        header('Location: privada.php?nome='.$nome);
    }else{
        //erro.php
        header ('Location: erro.php');
    }
?>