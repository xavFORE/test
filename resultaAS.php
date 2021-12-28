<?PHP 
$compteur= $_GET['chiffre'];
$numHaz = rand(0, $compteur);
$dict['numHaz']= $numHaz;
print(json_encode($dict));
?>