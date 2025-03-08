<?php

/* BANCO DE DADOS */
$localhost = "127.0.0.1";
$banco = "mercado";
$user_banco = "root";
$password = "";

$mysqli = new mysqli($localhost, $user_banco, $password, $banco);
if($mysqli->connect_error){
echo "falhou algo aí meu bom, olha só: " . $mysqli->connect_error . " .";
}

/* CODIGO LOGIN */


$usuario=$_POST["usuario"];
$senha=$_POST["senha"];

if(isset($_POST["entrar"])){

}


?>