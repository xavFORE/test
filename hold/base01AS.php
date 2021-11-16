<h1>Hello le PHP</h1>
<input type="text">

<?php

$nom = "toto";

$prenom = "Santrain";

for ($i = 0; $i < 3; $i++) {
    print("<h1>Hello $nom    ligne:$i</h1>\n");

}

function addition($number1, $number2){
    print(($number1 + $number2)."<br>\n");
};
addition(25, 2);
addition(50, 50);
$les_prenom = [
    "Olivier",
    "Karim",
    "Bouchera"
];

foreach ($les_prenom as $prenom) {
    disBonjour($prenom);
}
$chiffre = [
    10,
    12,
    50,
    120
];
moyen($chiffre);
function moyen($chiffre){
print(array_sum($chiffre)/count($chiffre). "<br>");
}


function disBonjour($nom)
{
    $nom = strtoupper($nom);
    print("bonjour $nom<br>\n");
}
disBonjour("Olivier");
disBonjour("Karim");
?>