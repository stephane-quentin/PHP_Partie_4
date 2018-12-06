<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 2 PHP Partie 4</title>
</head>
<body>
  <p><a href="http://monProjet">Accueil</a></p>
  <form method="post">
    <label>Entrez une chaine de caractères :</label>
    <p><input type="text" name="string1"/></p>
    <input type="submit" name="valider" value="OK"/>
  </form>
  <?php
  if(isset($_POST['valider']))
  {
  $string1 = $_POST['string1'];
  function stringTest($string1){
      return 'La chaine de caractères : '.$string1;
      }
  echo stringTest($string1);
  }
  ?>
</body>
</html>
