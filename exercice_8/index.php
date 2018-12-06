<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 8 PHP Partie 4</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <?php
      $nb1 = rand(1, 10);
      $nb2 = rand(1, 10);
      $nb3 = rand(1, 10);
      function Add($nb1, $nb2, $nb3){
          $result = $nb1 + $nb2 + $nb3;
          return 'L\'addition de ' . $nb1 . '+' . $nb2 . '+' . $nb3 . ' donne ' . $result;
          }
      echo Add($nb1, $nb2, $nb3);
     ?>
  </body>
</html>
