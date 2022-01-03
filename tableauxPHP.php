<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les tableaux en php</title>
</head>

<body>
    <h1> Les tableaux en PHP </h1>

    <?php
    $prenoms = ['pierre', 'paul', 'jacques'];

    for ($x = 0; $x <= 2; $x++) {
        print $prenoms[$x] . '<br/>';
    }


    foreach ($prenoms as $prenom) {
        print $prenom . '<br/>';
    }




    $prenoms[0] = 'pierre';
    $prenoms[1] = 'paul';
    $prenoms[2] = 'jacques';

    $age = ['pierre' => 24, 'paul' => 22, 'jacques' => 'non renseigné'];
    print $prenoms[0] . '<br/>';
    print $age['pierre'] . '<br/>';

    $age['pierre'] = 24;
    $age['paul'] = 22;
    $age['jacques'] = 'non renseigné';

    foreach ($age as $valeurs) {
        print $valeurs . '<br/>';
    }

    foreach ($age as $prenom => $valeur) {
        print ' l\' age de ' . $prenom . ' est ' . $valeur . '<br/>';
    }

    print_r($age);

    print '<pre>';
    print_r($age);
    print '</pre>';


    $membres = [
        ['pierre',  24, 'pierre.giraud@edhec.com'],
        ['paul',    22, 'paul.dubreuil@live.com'],
        ['jacques', 36, 'jacquesO@gmail.com']
    ];

    print $membres[0][0] . ' a ' . $membres[0][1] . ' ans. et son adresse mail est : ' . $membres[0][2] . '<br/>';
    print $membres[1][0] . ' a ' . $membres[1][1] . ' ans. et son adresse mail est : ' . $membres[1][2] . '<br/>';
    print $membres[2][0] . ' a ' . $membres[2][1] . ' ans. et son adresse mail est : ' . $membres[2][2] . '<br/>';

    for ($ligne = 0; $ligne < 3; $ligne++) {
        $membre_no = $ligne + 1;
        print '<br/>';
        print 'membre numéro ' . $membre_no . '<br/>';
        print '<ul>';
        for ($col = 0; $col < 3; $col++) {
            print '<li>' . $membres[$ligne][$col] . '</li>';
        }
        print '</ul>';
    }


    
    ?>

</body>

</html>