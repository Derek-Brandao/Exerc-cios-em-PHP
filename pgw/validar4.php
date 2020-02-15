<?php
session_start();
$_SESSION["nome"] = $_POST['nome'];
$_SESSION["senha"] = $_POST['senha'];
$conexao = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexao, "meubanco");
mysqli_query($conexao,“
UPDATE usuarios
SET senha = $_POST['senha']
");

if ($_POST['nome']==$_SESSION["nm"]) {
    $_SESSION["pass"] = $_POST['senha'];
    $_SESSION["ps"] = $_SESSION["senha"];
    $_SESSION["nm"] = null;
    header('location: projeto3.php');
}
else{
    $_SESSION["error"]=1;
    header('location: redefinirsenha2.php');
}
?>