<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio01</title>
    <style>
        
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        .par {
            background-color: rgb(0, 0, 255);
        }
        .impar {
            background-color: rgb(255, 0, 0);
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <?php
            for ($col = 1; $col <= 3; $col++) {
                echo "<th>Coluna $col</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($linha = 1; $linha <= 5; $linha++) {
            $tipoLinha = ($linha % 2 === 0) ? "par" : "impar";
            echo "<tr class=\"$tipoLinha\">";
            
            for ($coluna = 1; $coluna <= 3; $coluna++) {
                echo "<td>Linha {$linha}, Coluna {$coluna}</td>";
            }
            
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
