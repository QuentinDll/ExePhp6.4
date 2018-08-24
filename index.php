<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 6</title>
</head>
<body>
  <p>
    <?php
    // declaration des variables
    $lastname = "Hill";
    $firstname = "Jake";
    $age = 21;
    // declaration de la fonction
    function sentence($firstname , $lastname , $age){
      return "Bonjour" ." ". $firstname ." ". $lastname ." ". ",tu as" ." ". $age ." ". "ans";
    }
    // declaration de la variable contenant la fonction
    $res = sentence($firstname , $lastname , $age);
    echo $res;
    ?>
  </p>
</body>
</html>
