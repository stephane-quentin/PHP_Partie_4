<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 4 PHP Partie 4</title>
</head>
<body>
  <p><a href="http://monProjet">Accueil</a></p>
  <?php
  $nb1 = rand(1, 10);
  $nb2 = rand(1, 10);
  function compareNumber($nb1, $nb2){
    if ($nb1 > $nb2){
      return 'Le premier nombre est plus grand';
    }
    elseif ($nb1 < $nb2){
      return 'Le premier nombre est plus petit';
    }
    else {
      return 'Les deux nombres sont identiques';
    }
  }
  echo compareNumber($nb1, $nb2);
  ?>
  <p>
    <?php
    echo 'Le nombre 1 est : ' . $nb1
    ?>
  </p>
  <p>
    <?php
    echo 'Le nombre 2 est : ' . $nb2
    ?>
  </p>
</body>
</html>
