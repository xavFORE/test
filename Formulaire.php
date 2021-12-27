<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PHP</title>
</head>
<body>
    <form  method= "POST" action=" target.php">
        <p>
            <label for="prenom">Entrez votre prénom : </label>
            <input type="text" name="prenom" id="prenom"/>
        </p>
        <p>
            <label for="nom">Entrez votre nom : </label>
            <input type="text" name="nom" id="nom"/>
        </p>
        <p>
            <label for="pseudo">Entrz votre pseudo : </label>
            <input type="text" name="pseudo" id="pseudo"/>
        </p>
        <p>
            <input type="submit" value ="envoyer">
        </p>
    </form>

   
</body>
</html>