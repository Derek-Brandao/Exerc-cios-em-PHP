<?php
session_start();

if (($_POST['nome']==$_SESSION["nm"]) && ($_POST['senha']==$_SESSION["ps"]) || (($_POST['nome']==$_SESSION["nome"]) && ($_POST['senha']==$_SESSION["senha"]))) {
    $_SESSION["logado"] = 1;
    header('location: paineldecontrole2.php');
}
else{
    $_SESSION["logado"] = 0;
    $_SESSION["des"] = 0;
    $_SESSION["error"] = 1;
    header('location: projeto3.php');
}
?>