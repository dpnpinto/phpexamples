
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variaveis e colocar todas com uma string a vazia 
$name = $email = $gender = $comment = $website = "";

function clean_input($data) {
  //Retirar esaços em branco
  $data = trim($data);
  //Retirar back slashes  "\"
  $data = stripslashes($data);
  //REmover caracteres especiais
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = clean_input($_POST["name"]);
  $email = clean_input($_POST["email"]);
  $website = clean_input($_POST["website"]);
  $comment = cleean_input($_POST["comment"]);
  $gender = clean_input($_POST["gender"]);
}

?>

<h1>Exemplo de validação de formulário em PHP</h1>
<h1>By https://dpnpinto.github.io </h1>
!-- Esta ação permite que seja a propia página a receber o metodo, o htmlspecialchars permite a modificação do código e evitar exploits
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  O seu nomes: <input type="text" name="name">
  <br><br>
  O seu E-mail: <input type="text" name="email">
  <br><br>
  O seu site: <input type="text" name="website">
  <br><br>
  Commentários: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Qual o seu genero:
  <input type="radio" name="gender" value="female">Femenino
  <input type="radio" name="gender" value="male">Masculino
  <input type="radio" name="gender" value="other">Outro
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h1>O que foi inserido:</h1>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
