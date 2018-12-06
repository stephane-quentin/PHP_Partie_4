<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 7 PHP Partie 4</title>
  </head>
  <body>
    <p><a href="http://monProjet">Accueil</a></p>
    <form method="post">
      <label>Entrez votre age :</label>
      <input type="text" name="age"/> <br/>
      <label>Choix</label>
      <select name="choice">
        <option value="man">Homme</option>
        <option value="woman">Femme</option>
      </select>
      <input type="submit" name="valider" value="OK"/>
    </form>
    <?php
      if(isset($_POST['valider']))
      {
      $age = $_POST['age'];
      $gender = $_POST['choice'];
      function whatAreYou($age, $gender){
      if($age < 18 && $gender == 'man'){
          return 'Vous êtes un homme et vous êtes mineur';
        } elseif ($age < 18 && $gender == 'woman'){
          return 'Vous êtes une femme et vous êtes mineure';
        } elseif ($age >= 18 && $gender == 'woman'){
          return 'Vous êtes une femme et vous êtes majeure';
        } else {
          return 'Vous êtes un homme et vous êtes majeur';
        }
      }
      echo whatAreYou($age, $gender);
      }
     ?>
  </body>
</html>
