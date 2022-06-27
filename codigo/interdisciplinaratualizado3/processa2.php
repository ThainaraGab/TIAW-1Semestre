<?php
session_start();
include_once("conexão.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$artigo = filter_input(INPUT_POST, 'artigo', FILTER_SANITIZE_STRING);
$link = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_STRING);
$comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);

echo "Nome: $nome <br>";
echo "E-mail: $email <br>";

echo "link: $link <br>";

$result_contatos_msgs = "INSERT INTO artigos (nome, email, artigo, link, comentario, created) VALUES ('$nome', '$email', '$artigo', '$link', '$comentario', NOW())";
$resultado_contatos_msgs = mysqli_query($conn, $result_contatos_msgs);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    header("Location: envio.html");
    
    
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: envio.html");
}