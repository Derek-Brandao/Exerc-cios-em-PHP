<?php
    $pont = fopen("cont.txt", "r");
$conteudo = fread($pont, filesize("cont.txt"));
fclose ($pont);

$pont = fopen("cont.txt", "r+");
$conteudo++;
fputs ($pont, $conteudo);
fclose ($pont);
?>

<!DOCTYPE html>
<html lang="pt-pr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <title>Projeto Login</title>
    
</head>
<body style="background-image: url('./img/fundo00.jpg'); background-size: cover">
        <div class="safe-top">
        
        </div>
        <div class="escopo">
            <form action="checar.php" method="post">
                <input type="text" name="nome" placeholder="Nome" class="form-control" >
                <input type="password" name="senha" placeholder="Senha" class="form-control">
                <div class="button">
                <button type="submit" class="btn" style="height: 40px;wid;background-color: white;color: black;border-radius: 10px"><big><big><big style="border-radius: 20px">Enviar</big></big></button><br/>
                <a href="cadastro.html" style="color:black">Cadastro</a>
                </div>
            </form>
        </div>
        <div class="safe-bottom" style="color: blue">
            <p>&copy; 2019 | Projeto 3/4</p>
        </div>
<br/>
    <center style="color:blue">O número de visitantes é <?php include("cont.txt"); ?></center>
</body>

</body>
</html>