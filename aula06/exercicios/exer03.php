<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Tabela de Produtos</title>
    <style>
        

        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #222;
            color: white;
        }

        .Eletrônicos {
            background-color: #add8e6;
        }

        .Vestuário {
            background-color: #f08080;
        }

        .Alimentos {
            background-color: #90ee90;
        }
    </style>
</head>
<body>

<?php
$produtos = [
    [
        'nome' => 'Smartphone',
        'preco' => 2500.00,
        'categoria' => 'Eletrônicos'
    ],
    [
        'nome' => 'Camiseta',
        'preco' => 45.90,
        'categoria' => 'Vestuário'
    ],
    [
        'nome' => 'Notebook',
        'preco' => 4200.00,
        'categoria' => 'Eletrônicos'
    ],
    [
        'nome' => 'Arroz 5kg',
        'preco' => 22.30,
        'categoria' => 'Alimentos'
    ],
    [
        'nome' => 'Calça Jeans',
        'preco' => 119.99,
        'categoria' => 'Vestuário'
    ]
];
?>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço (R$)</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto): 
            $classe = $produto['categoria'];
        ?>
            <tr class="<?= $classe ?>">
                <td><?= $produto['nome'] ?></td>
                <td><?= number_format($produto['preco'], 2, ',', '.') ?></td>
                <td><?= $produto['categoria'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
