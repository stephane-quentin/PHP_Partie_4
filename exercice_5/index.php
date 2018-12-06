<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 5 PHP Partie 4</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <form method="post">
      <label>Entrez une chaines de caractères et un nombre :</label>
      <p><input type="text" name="string1"/></p>
      <p><input type="text" name="int1"/></p>
      <input type="submit" name="valider" value="OK"/>
    </form>
    <?php
    if(isset($_POST['valider'])){
    $string1 = $_POST['string1'];
    $int1 = $_POST['int1'];
    function stringNumber($string1, $int1){
      return 'La chaine : ' . $string1 . ' et le nombre : ' . $int1;
    }
    echo stringNumber($string1, $int1);
    }
     ?>
  </body>
</html>
