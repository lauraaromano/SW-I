<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td{
            border:1px red solid;
        }
    </style>
</head>
<body>
    <?php
        //criar uma tabela
        $linha = 8;
        $coluna = 5;
        echo "<table>";
        for ($l=1; $l <= $linha ; $l++) {
            echo "<tr>";
            for ($c=1; $c <= $coluna ; $c++) { 
                echo "<td>XXXXXXXX</td>";
            }        
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
