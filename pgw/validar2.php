<?php
session_start();
$_SESSION["nome"] = $_POST['nome'];
$_SESSION["senha"] = $_POST['senha'];

if ($_POST['nome']==$_SESSION["nm"]) {
    $_SESSION["pass"] = $_POST['senha'];
    $_SESSION["ps"] = $_SESSION["senha"];
    $_SESSION["nm"] = null;
    header('location: projeto2.php');
}
else{
    $_SESSION["erro"] = 1;
    header('location: redefinirsenha.php');
}
?>