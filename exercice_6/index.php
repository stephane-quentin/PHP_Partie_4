<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 6 PHP Partie 4</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <form method="post">
      <label>Nom :</label>
      <p><input type="text" name="lastname"/></p>
      <label>Prénom :</label>
      <p><input type="text" name="firstname"/></p>
      <label>Age :</label>
      <p><input type="text" name="age"/></p>
      <input type="submit" name="valider" value="OK"/>
    </form>
    <?php
    if(isset($_POST['valider'])){
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $age = $_POST['age'];
    function identity($lastname, $firstname, $age){
      return 'Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . ' ans';
    }
    echo identity($lastname, $firstname, $age);
    }
     ?>
  </body>
</html>
