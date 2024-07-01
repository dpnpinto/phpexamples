<?php
$servername = "localhost";
$username = "root";
$password = "mypassword";

// Criar a ligação à base de dados e colocar na variavel conn
$conn = mysqli_connect($servername, $username, $password);
// Se a variavel ficou sem um valor existiu erro na coneção
if (!$conn) {
  die("Coneção ao sgbd falhou: " . mysqli_connect_error());
}

// String com comando SQL para criar a base de dados "myDB"
$sql = "CREATE DATABASE myDB";
// Executado o SQL para criação da BD
if (mysqli_query($conn, $sql)) {
  echo "Foi criada a base de dados com sucesso";
} else {
  echo "Erro ao criar a base de dados: " . mysqli_error($conn);
}
//fechar a coneção à base de dados
mysqli_close($conn);
?>

