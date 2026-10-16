<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire de contact</title>
  </head>
  <body>
    <script type="text/javascript">
      //   var langue = "fr";
      //   document.write("Le site est en langue " + langue);
      //   // exercice : écrivez "Hello VotrePrenom" avec VotrePrenom sous forme de variable ayant
      //   // pour valeur votre prenom. Résultat attendu dans mon cas "Hello Thibault"
      //   var prenom = "Thibault";
      //   document.write("Hello " + prenom);
      //   var name = prompt("Quel est votre prenom ?");
      //   document.write("Hello " + name);
      // var prenom = prompt("prenom ?");
      // document.write("var prenom vaut : " + prenom);
    </script>
    Contactez-moi
    <a href="index.html">Retour</a>

    <?php
      // $prenom = 'Thibault';
      // echo 'Hello ' . $prenom;
      $chiffre = 'hello';
      if($chiffre>2){
        echo 'plus grand que 2';
      }
      elseif($chiffre<2) {
        echo 'plus petit que 2';
      }
      elseif($chiffre==2) {
        echo 'egal a 2';
      }
      else{
        echo 'pas un chiffre';
      }


      echo '<hr>';

      $nombre = 0;
      $compteur = 1;
      while($compteur <= 10){
        if ($nombre % 3 == 0) {
          echo $nombre . '<br>';
          $compteur++;
        }
        $nombre++;
      }

      echo '<hr>';
      // creer une var age qui a pour valeur votre age
      // dire si mineur ou majeur en fonction de 18
    ?>

    <form method="post" enctype="text/plain">
      <label for="nom">Nom :</label>
      <input
        type="text"
        name="nom"
        id="nom"
        placeholder="prénom"
        autofocus="autofocus"
        tabindex="1"
        maxlength="10"
      /><br />
      Mail ou tel<input type="tel" name="email" /><br />
      Mdp : <input type="password" name="pwd" tabindex="2" /><br />
      Date de naissance<input type="date" /> Genre :
      <input type="radio" name="genre" value="mr" />Mr<input
        type="radio"
        name="genre"
        value="mme"
      />Mme<br />
      Pays :
      <select>
        <option>Fr</option>
        <option>Uk</option></select
      ><br />
      Message :
      <textarea name="message"></textarea><br />
      <input type="checkbox" name="authorize" />J'autorise la conservation de
      mes données
      <input type="submit" value="Contactez-moi" />
    </form>
  </body>
</html>
