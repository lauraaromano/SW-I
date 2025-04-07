<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        table,tr,th,td{
            border: 1px solid black;
        }
    </style>
</head>

<body>
   <?php
        $usuario = 3;
        if($usuario == 3){
            echo"<ul>";
            for ($i=1; $i <= 3 ; $i++){ 
                echo"<li>item $i</li>";
            }
            echo"</ul>";
        } else{
            for ($i=1; $i <= 3 ; $i++) { 
                echo"<p>Paragrafo $i </p>";
            }
        }
   ?>
   
    <!-- se o usuario for diferente de 3, eu quero que apareça 3 paragrafos (p) -->

    <!-- se o usuario for igual a  3, eu quero que apareça 3 itens(ul li) -->

</body>
</html>