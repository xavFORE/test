<?php

echo "********************voilà******************<br/>";

$nom = "Marie" ;
$age = 20;
$homme = false;

$nom1 = "Pierre";
$age1 = 35;
$homme1 = true;



echo $nom. ' a '.$age.' ans ';



if ($homme===false){
    echo "et est une fille.<br/><br/>";
}else{
    echo " et est un homme.<br/><br/>";
}

echo $nom1. ' a '.$age1.' ans ';

if ($homme1 === false){
    echo "et est une fille.<br/>";
}else{
    echo " et est un homme.<br/>";
}

echo "********************voilà******************<br/>";
?>

<?php

echo $nom. ' a '.$age.' ans ';
 echo ($homme) ? " et est un homme.<br/>": " et est une femme.<br/>";


echo '<br/>'.$nom1. ' a '.$age1.' ans ';
 echo (!$homme1) ? " et est une femme.<br/>": " et est un homme.<br/>.";

 


?>
