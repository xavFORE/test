<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

        function espace(){
            print '<br/><br/><br/>';
        }


        function direBonjour($prenom){
            print 'bonjour ' .$prenom.'<br/>' ;
        }

        direbonjour('karim');
        direBonjour('steeve');
        direBonjour('mike');
        espace();

        function nomAge($prenom, $age){
            print $prenom. ' a ' .$age. ' ans<br/>';
        }
        nomAge('alexis', 26);
        espace();


        function direBonsoir($prenom){

            print 'ceci devrait être affiché <br>';
            return 'bonsoir '.$prenom. '<br>';
            print'Ceci ne devrait pas être affiché car il est après le return';
        }

        espace();
        $bonsoirUtilisateur = direBonsoir('michou');
        espace();

        direBonsoir('karim');
        espace();
        print $bonsoirUtilisateur;
?>
</body>
</html>