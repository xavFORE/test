<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonction en  PHP</title>
</head>
<body>
    <h1>function string en PHP </h1>


    <?php
        
        function espace(){
            print '<br/><br/><br/>';
        }

     print strlen('pour compter le nombre de caractère');
     // attention strlen compte aussi les espaces et les accents compte double.

     espace();

    print str_word_count('pour compter le nombre de caractère',0,'è');
        espace();

     print str_repeat('bonjour ', 7);
     espace();


     $texte= "Bonjour comment allez-vous ?";
      print str_replace('jour', 'soir', $texte, $i);
      print '<br>nombre de remplacement '.$i;
      // ici on a remplacé jour par soir dans le mot bonjour qui est contenu 
      //dans la chaind de caractère contenu dans la variable $text.
        espace();

      $strMinuscule = strtolower('BONJOUR A TOUS');
      print ' ma chaine en minuscule : '.$strMinuscule;
        espace();
      $strMajuscule = strtoupper($strMinuscule);
      print ' ma chaine en majuscule : '.$strMajuscule;

      espace();
        $string = 'j\'aime le <strong>PHP</strong>';
        print $string; 
        espace();
       print htmlspecialchars($string);
       espace();
       print htmlspecialchars_decode($string);
       espace();

        print nl2br('bonjour
       comment ça va ? ');
       espace();


        $chaineVersTableau = "Bonjour à tous";
         print_r (explode(" ", $chaineVersTableau));
         print_r (explode("o", $chaineVersTableau));

         espace();
         print_r (str_split( $chaineVersTableau, 2));
         espace();


        $tableau =['bonjour', 'à', 'tout', 'le', 'monde'];
        print $tableauTOString=$tableau;



    ?>

</body>
</html>