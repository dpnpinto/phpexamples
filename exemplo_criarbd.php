<?php
$servername = "localhost";
$username = "root";
$password = "pint20";

// Criar a ligação à base de dados e colocar na variavel conn
$conn = mysqli_connect($servername, $username, $password);
// Se a variavel ficou sem um valor existiu erro na coneção
if (!$conn) {
  die("Coneção ao sgbd falhou: " . mysqli_connect_error());
}

// A criar uma base de dados
$sql = "CREATE DATABASE myDB";
// são passados na função a coneção e o SQL
if (mysqli_query($conn, $sql)) {
  echo "Foi criada a base de dados com sucesso";
} else {
  echo "Erro ao criar a base de dados: " . mysqli_error($conn);
}
//fechar a coneção à base de dados
mysqli_close($conn);
?>

