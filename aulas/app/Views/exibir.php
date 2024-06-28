<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        margin: 0 50px;
    }

    h1 {
        color: white;
        text-align: center;
        background-color: rgb(255, 150, 50);
        padding: 10px;
        border-radius: 12px;
        margin: 0;
    }
    table{
        width: 80%;
        margin:  2% 10%;
        font-size: 15pt;
    }
    td{
        color: white;
        text-align: center;
        padding: 5px 10px;
        border-radius: 5px;
        background-color: rgb(255, 150, 50);
    }
    </style>
</head>

<body>
    <h1>Usuários cadastrados </h1>
    <table border="1">
        <tr>
            <th>Código/Id</th>
            <th>Nome</th>
            <th>Nacionalidade</th>
        </tr>
        <?php foreach($pessoas as $pessoa): ?>
        <tr> 
            <td><?php echo $pessoa['Id'] ?></td>
            <td><?php echo $pessoa['Nome'] ?></td>
            <td><?php echo $pessoa['Naturalidade'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>