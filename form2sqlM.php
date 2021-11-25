<?php
    #require_once "affTable.php";

    if ( $_GET )
    {
        $nomUser = $_GET[ "nom" ];
        $ageUser = $_GET[ "age" ];
        $mdpUser = $_GET[ "mdp" ];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "toto";

        $mysqli = new mysqli($servername, $username, $password, $dbname);

        if ($mysqli -> connect_error) {
          print("Failed to connect to MySQL : " . $mysqli -> connect_error);
          exit();
        }

        $sql = "INSERT INTO personnes (nom, age, mdp) VALUES ('$nomUser', '$ageUser', '$mdpUser')";
        $sqlSelect = "SELECT * FROM personnes";
        
        if ($mysqli->query($sql) === TRUE)
            print($sql."<br>");
        else
            print("Error : " . $sql . "<br>" . $mysqli->error);

		$resultat = $mysqli -> query($sqlSelect);

		while ($ligne = $resultat -> fetch_assoc())
            if($ligne['mdp'] != "")
			    print('Nom : ' . $ligne['nom'] . '<br>'. 'Age : ' . $ligne['age'] . '<br>' . 'Mot de passe : ' . $ligne['mdp'] . '<br><br>');
            else
                print('Nom : ' . $ligne['nom'] . '<br>'. 'Age : ' . $ligne['age'] . '<br><br>');

        $mysqli->close();
        #exit(0);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="#" method="GET">
    <input type="text" placeholder="saisir nom" name="nom"><br>
    <input type="text" placeholder="saisir age" name="age"><br>
    <input type="password" placeholder="saisir mot de passe" name="mdp"><br>
    <button type="submit">OK</button>
</form>


</body>
</html>