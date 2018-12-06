<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3 PHP Partie 4</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <form method="post">
      <label>Entrez 2 chaines de caractères :</label>
      <p><input type="text" name="string1"/></p>
      <p><input type="text" name="string2"/></p>
      <input type="submit" name="valider" value="OK"/>
    </form>
    <?php
    if(isset($_POST['valider']))
    {
    $string1 = $_POST['string1'];
    $string2 = $_POST['string2'];
    function stringTestDouble($string1, $string2){
      return '1ère chaine : '.$string1.' et la deuxième : '.$string2;
    }
    echo stringTestDouble($string1, $string2);
    }
     ?>
  </body>
</html>
