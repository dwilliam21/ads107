<!DOCTYPE html>
<html>
<head>
<title>Página de inserção de Pessoas</title>
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
        margin: 0 0 20px;
    }
    table{
        width: 20%;
        font-size: 15pt;
    }
    td{
        color: white;
        text-align: center;
        padding: 5px 10px;
        border-radius: 5px;
        background-color: rgb(255, 150, 50);
    }
    #inserir{
        font-size: 12pt;
        color: white;
        margin: 0;
        padding: 5px 50px;
        border-radius: 5px;
        background-color: rgb(255, 110, 0);
    }
    </style>
</head>
<body>
<h1> <?php echo $titulo ?> </h1>
<strong> <?php echo $msg ?> </strong>
<form method="post">
<table border=’1’>
<tr><td>Nome:</td><td><input type="text" name="Nome" /></td></tr>
<tr><td>Naturalidade:</td><td><input type="text" name="Naturalidade" /></td></tr>
<tr><td><input type="submit" value="<?php echo $acao ?>" id="inserir"></td></tr>
</table>
</form>
</body>
</html>