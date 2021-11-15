<?php
session_start();

$prenoms = [
    "xavier"    => " est vieux",
    "olivier"   => " va en voyage",
    "remi"      => " est dans le train",
    "alexis"    => " achète des voitures",
    "nelly"     => " est en rage",
    "mehdi"     => " est un ange",
    "hanane"    => " utilise de argan",
    "bouchra"   => " aime les brownies",
    "karim"     => " est un crack en javascript",
];

if (array_key_exists('liste', $_SESSION)) {
    $prenoms = $_SESSION['liste'];
} else
    $_SESSION['liste'] = $prenoms;



if ($_POST) {

    // XaviER
    $prenom = $_POST["prenom"];
    print("saisie $prenom <br>");

    // XaviER -> xavier
    $prenom = strtolower($prenom);

    if (array_key_exists($prenom, $prenoms)) {
        $mes = $prenoms[$prenom];
        print($prenom . " " . $mes . "<br>");
    } else {
        // mot clé :
        //              session
        //              cookies
        //              session_start
        //              php store dictionary in session

        //print_r( $prenoms );
        print($prenom . " inconnu <br>");
        print("ajout de " . $prenom . " dans le dictionnaire<br>");
        $prenoms[$prenom] = "nouveau dans la liste";
        $_SESSION['liste'] = $prenoms;
        print_r($prenoms);

        //header( "location : ");
    }


    //exit();
}
?>  
<form action="#" method="post">
    <input type="text" name="nom" placeholder="ton nom">
    <br>
    <button type="submit">OK</button>
</form>