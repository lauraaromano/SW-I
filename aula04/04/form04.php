<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
    
    <form action="exe04.php" method="post">
        <p> Nome: <input type="text" name="nome" id="" required></p>
        <p> E-mail: <input type="text" name="email" id="" required></p>
        <p> Data de nascimento: <input type="number" name="data" id="" required></p>

        <select name="cartao">
            <option value="Visa"> Visa </option>
            <option value="Elo"> Elo </option>
            <option value="Mastercard"> Mastercard</option>
            <option value="JCB">JCB</option>
        </select>


        
        


        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>