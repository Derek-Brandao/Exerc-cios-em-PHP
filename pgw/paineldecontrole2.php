<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-image: url('uauuuu.jpg'); height: 100%; overflow-y:hidden; overflow-x:hidden; background-size: cover;background-repeat: no-repeat;">
<big><big><div class="container" style="position:relative; left: 1000px;top: 200px; border: white dotted 2px; height: 275px; width: 400px; border-radius: 20px">
    <br/>
    <br/>
        <center>
        <big><a style="color:white;" href="inserir.html"class="btn1">Inserir Produto</a><br/><br/></big>
        <a style="color:white;" href="crescente.php"class="btn2">Listar - Crescente</a><br/><br/>
        <a style="color:white;" href="decrescente.php"class="btn3">Listar - Decrescente</a><br/><br/>
    </center>
</div>
</big>
</big>
<big><big><a href="projeto3.php" style="position:relative; ;top:568px;color:white;">Voltar</a></big></big>
<form action="destroi2.php" style="color: white; padding: 0; border: 3px dotted white; width: 600px;border-radius: 20px; height: 275px; position: relative; bottom: 105px;left: 250px;">
    <big style="color:white;"><center><h2 style="position:relative;color: white;">Você está logado em:<br/><br/>
    <?php
    session_start();
    ini_set('display_errors', 0 );
    error_reporting(0);
    if ($_SESSION["logado"] != 1) {
        $_SESSION["des"] = 1;
        header('location: projeto3.php');
    }
    $sup = $_SESSION["nm"];
    $sop = $_SESSION["nome"];
    echo $sop;
    echo $sup;
    ?>
    </big></center>
    
    <input type="submit" value="Deslogar e excluir conta" id="btt" style="position:relative;left:210px;top:20px;height:35px;width:180px;border-radius: 20px; border-style: solid" >
    </form>
    <br/>
</body>
</html>