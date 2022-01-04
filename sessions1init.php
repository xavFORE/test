<?php

// initialisation sans cookie
// le PHPSESSID est automatiquement ajouté aux url

ini_set("session.use_cookies", 0);
ini_set("session.use_only_cookies", 0);
ini_set("session.use_trans_sid", 1);
ini_set("session.cache_limiter", "");
session_start();

// je demarre la session
// un cookie va être déposé
// je peux gérer la durée du cookie
session_start(['cookie_lifetime' => 3600 * 24 * 15]);


// mes variables persos
$nom = 'toto';
$age = 112;
print(" Bonjour $nom<br>");


// je les stocke dans le dictionaire de _SESSION
$_SESSION['prenom'] = $nom;
$_SESSION['age'] = $age;

// recuperation de l'ID de session
$sessionID = session_id();
?>
<a href="sessions2recup.php">suivant</a>