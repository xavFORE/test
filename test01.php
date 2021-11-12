<?php
// page1.php

session_start();
$prenoms = [
    "xavier"    => " est vieux",
    "olivier"   => " vas voyage",
    "remi"      => " est dans le train",
    "alexis"    => " achète des voitures",
    "nelly"     => " est en rage",
    "mehdi"     => " est un ange",
    "hanane"    => " utilise de argan",
    "bouchra"   => " aime les brownies",
    "karim"     => " est un crack en javascript",
];
if (array_key_exists('liste', $_SESSION)) {
    $_prenoms;
} else

    $_SESSION['liste'] = $prenoms;
if ($_POST) {


    // XaviER
    $nom = $_POST["nom"];

    // XaviER -> xavier
    $nom = strtolower($nom);

    if (array_key_exists($nom, $prenoms)) {
        $mes = $prenoms[$nom];
        print($nom . " " . $mes . "<br>");
    } else {
        // mot clé :
        //              session
        //              cookies
        //              session_start

        print("ajout de " . $nom . " dans le dictionnaire<br>");
        $prenoms[$nom] = "nouveau dans la liste<br>";
        $_SESSION['liste'] = $prenoms;
        print_r($prenoms);
    }
}

// Fonctionne si le cookie a été accepté
echo '<br /><a href="test02.php">page 2</a>';

?>
<form action="#" method="post">
    <input type="text" name="nom" placeholder="ton nom">
    <br>
    <button type="submit">OK</button>
</form>