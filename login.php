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
$selecionar_admin = "SELECT * FROM login WHERE usuario = '" . $usuario . "' AND senha = '". $senha . "';";
$result = $mysqli->query($selecionar_admin);
if($result->num_rows>0){
    echo "deu certo";
    header("Location: mercado.html");
}
else{
    header("Location: index.html?erro=1");
exit();
}
}


?>