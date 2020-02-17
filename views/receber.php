<?php

session_start();

$host = "localhost";
$user = "root";
$senha = "";
$bd = "db_ecommerce";

$conn = Mysqli_connect($host, $user, $senha, $bd);


$nome = $_POST['nome'];
$email = $_POST['email'];
$avaliacao = $_POST['avaliacao'];


$sql = "INSERT INTO tb_funcionarios(nome, email, avaliacao) VALUES('$nome', '$email', '$avaliacao')";

$query = mysqli_query($conn, $sql);

$_SESSION['enviado'] = "Enviado com sucesso!";

  header('Location: index.php')

?>