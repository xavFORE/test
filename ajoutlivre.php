<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajout livre</title>
</head>

<body>
  <?php

  require_once "ressources.php";
  require_once "fonctions.php";

  if ($_GET) {
    $mysqli = new mysqli($servername, $username, $password, $database);
    $nom = $_GET['nom'];
    $auteur = $_GET['auteur'];
    $query  = "insert into livres (nom,auteur ) values ('$nom','$auteur')";
    //print($query);
    $res = $mysqli->query($query);



    $mysqli->close();
  }
  ?>


  <form action="#" method="get">



    <input type="text" name='nom' placeholder="nom du livre">
    <br>
    <input type="text" name='auteur' placeholder="qui est l'auteur">
    <br>

    <button type="submit">Ajouter un livre</button><button type="submit"><a href="#">revenir a accueuil</a></button>
  </form>
</body>

</html>