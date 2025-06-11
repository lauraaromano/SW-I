<?php
    include_once 'Aluno.class.php';

    $fulano = new Aluno("Fulano da Silva",9,7);

    $nota1 = $fulano->getNota1();
    $nota2 = $fulano->getNota2();
    
    // echo $nota1;

    
    echo "ALUNO:". $aluno = $fulano->getNome()."<br>";
    $media = $fulano->Media($nota1,$nota2);
    echo "MÉDIA:". $media . "<br>";
    echo "SITUAÇÃO:". $fulano->VerificarSituacao($media);

    
    
?>