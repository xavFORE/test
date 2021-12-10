<?php
require_once "ressources.php";
require_once "fonctions.php";
$requet = $_GET['requet'];
if ($requet == 'select * from emprunteurs;'|| $requet == 'select * from livres;' || $requet == 'select livres.nom, livres.id from livres, emprunts where livres.id=emprunts.idl and emprunts.dateFin is NULL;'|| $requet == 'select nom from livres where livres.absent = 0;') {
    $query  = $requet;
    //print( $query );
    $res = query($query);

    $tab = [];
    while ($ligne = $res->fetch_assoc()) {
        $ligne['nom'] = ($ligne['nom']);
        $tab[] = $ligne;
    }
    print(json_encode($tab));
} else {
    print("erreur");
}
?>