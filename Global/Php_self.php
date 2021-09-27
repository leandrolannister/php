<!-- $_SERVER["PHP_SELF"] é o caminho para o próprio arquivo em questão. 
   Desta forma, ao submeter o formulário, a requisição POST será enviada para ele mesmo. 
   Porém, não é recomendado que faça isso. -->
   <?php 
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
?>

<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>