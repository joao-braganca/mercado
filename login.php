<?php

/* BANCO DE DADOS */
$localhost = "localhost";
$banco = "mercado";
$user_banco = "root";
$password = "Root";

$mysqli = new mysqli($localhost, $user_banco, $password, $banco);
if($mysqli->connect-error){
acho "falhou algo aí meu bom, olha só 
}

/* CODIGO LOGIN */


$usuario=$_POST["usuario"];
$senha=$_POST["senha"];

if(isset($_POST["entrar"])){

}


?>