<?php
    $login= $_POST['login'];
    $senha= $_POST['senha'];
    
  
    if ($login == 'etec' && $senha == 'informática'){
        echo "logado com sucesso";
    }
?>